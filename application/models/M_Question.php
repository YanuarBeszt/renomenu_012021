<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Question extends CI_Model
{
    private $_table = "question";

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function getByIdEn($id)
    {
        return $this->db->get_where("question", ["id" => $id])->row();
    }

    function getTagedByQuestion($id)
    {
        $this->db->select('*');
        $this->db->where('question_keyword.question_id', $id);
        $query = $this->db->get("question_keyword");
        return $query;
    }

    public function getAllDataIna_asc()
    {
        $this->db->select('question.id, question.question, category.id as idTopic, category.name as nameTopic, question.is_deleted, category.name as namePF');
        $this->db->join('category', 'question.category_id = category.id');
        $this->db->order_by('category.id', 'asc');
        return $this->db->get($this->_table)->result();
    }

    public function getDataByCategory($id)
    {
        $this->db->select('question.id, question.question, category.id as idTopic, category.name as nameTopic, question.is_deleted, category.name as namePF');
        $this->db->join('category', 'question.category_id = category.id');
        $this->db->where('question.category_id =', $id);
        return $this->db->get($this->_table)->result();
    }

    public function getAllDataEn_asc()
    {
        $this->db->select('question.id, question.question, topic.id as idTopic, topic.name as nameTopic, question.is_deleted, platform.name as namePF');
        $this->db->join('topic', 'question.topic_id = topic.id');
        $this->db->join('platform', 'platform.id = topic.platform_id');
        $this->db->where('question.language', '2');
        $this->db->order_by('topic.id', 'asc');
        return $this->db->get($this->_table)->result();
    }

    public function getTopQuestionsIna_desc($id)
    {
        $this->db->select('question.id as idq, question.question, question.topic_id, topic.name, question.is_deleted');
        $this->db->join('topic', 'question.topic_id = topic.id');
        $this->db->where('question.topic_id', $id);
        $this->db->where('question.is_deleted', 'n');
        $this->db->where('question.language', '1');
        $this->db->order_by('question.point', 'desc');
        return $this->db->get($this->_table)->result();
    }

    public function getTopQuestionsEn_desc($id)
    {
        $this->db->select('question.id as idq, question.question, question.topic_id, topic.name, question.is_deleted');
        $this->db->join('topic', 'question.topic_id = topic.id');
        $this->db->where('question.topic_id', $id);
        $this->db->where('question.is_deleted', 'n');
        $this->db->where('question.language', '2');
        $this->db->order_by('question.point', 'desc');
        return $this->db->get($this->_table)->result();
    }

    public function getSteps($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        // $this->db->where('question.language', '1');
        return $this->db->get($this->_table)->result();
    }

    public function getStepsEn($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $this->db->where('question.language', '2');
        return $this->db->get($this->_table)->result();
    }

    function storeDataIna($question, $contents, $idCategory, $tags)
    {
        $data = array(
            'question' => $question,
            'is_deleted' => 'n',
            // 'language' => '1',
            'answer_desc' => $contents,
            'category_id' => $idCategory,
            'created_by' => $this->session->userdata('user_logged')->id,
            'last_modified_by' => $this->session->userdata('user_logged')->id,
        );
        $this->db->insert($this->_table, $data);
        $idQ = $this->db->insert_id();
        $tagged = array();
        foreach ($tags as $key => $val) {
            $tagged[] = array(
                'question_id' => $idQ,
                'keyword_id' => $_POST['tags'][$key]
            );
        }
        $this->db->insert_batch('question_keyword', $tagged);
    }

    function storeDataEn($question, $contents, $idTopic, $tags)
    {
        $data = array(
            'question' => $question,
            'is_deleted' => 'n',
            'language' => '2',
            'answer_desc' => $contents,
            'topic_id' => $idTopic,
            'created_by' => $this->session->userdata('user_logged')->id,
            'last_modified_by' => $this->session->userdata('user_logged')->id,
        );
        $this->db->insert("question", $data);
        $idQ = $this->db->insert_id();
        $tagged = array();
        foreach ($tags as $key => $val) {
            $tagged[] = array(
                'question_id' => $idQ,
                'keyword_id' => $_POST['tags'][$key]
            );
        }
        $this->db->insert_batch('question_keyword', $tagged);
    }

    public function updateDataIna($question, $steps, $statusQ, $idTopic, $idTags, $idQ)
    {
        $data  = array(
            'question' => $question,
            'is_deleted' => $statusQ,
            'category_id' => $idTopic,
            'answer_desc' => $steps,
            'last_modified_by' => $this->session->userdata('user_logged')->id,
        );
        $this->db->where('id', $idQ);
        $this->db->update($this->_table, $data);

        $this->db->where('question_id', $idQ);
        $this->db->delete('question_keyword');
        if ($idTags != "") {
            $result = array();
            foreach ($idTags as $key => $val) {
                $result[] = array(
                    'question_id'   => $idQ,
                    'keyword_id'   => $_POST['tags'][$key]
                );
            }
            $this->db->insert_batch('question_keyword', $result);
        }
    }

    public function updateDataEn($question, $steps, $statusQ, $idTopic, $idTags, $idQ)
    {
        $data  = array(
            'question' => $question,
            'is_deleted' => $statusQ,
            'topic_id' => $idTopic,
            'answer_desc' => $steps,
            'last_modified_by' => $this->session->userdata('user_logged')->id,
        );
        $this->db->where('id', $idQ);
        $this->db->update('question', $data);

        $this->db->where('question_id', $idQ);
        $this->db->delete('question_keyword');
        if ($idTags != "") {
            $result = array();
            foreach ($idTags as $key => $val) {
                $result[] = array(
                    'question_id'   => $idQ,
                    'keyword_id'   => $_POST['tags'][$key]
                );
            }
            $this->db->insert_batch('question_keyword', $result);
        }
    }

    public function search($search)
    {
        $this->db->select('question.id, question.category_id, question.question, keyword.name');
        $this->db->like('question.question', $search);
        $this->db->or_like('keyword.name', $search);
        $this->db->join('question', 'question_keyword.question_id = question.id');
        $this->db->join('keyword', 'question_keyword.keyword_id = keyword.id');
        $this->db->where('question.is_deleted', 'n');
        $result = $this->db->get('question_keyword')->result();

        if ($result == null) {
            $this->db->select('question.id, question.category_id, question.question');
            $this->db->like('question', $search);
        $this->db->where('question.is_deleted', 'n');
        return $this->db->get($this->_table)->result();
        }

        return $result;
    }

}
