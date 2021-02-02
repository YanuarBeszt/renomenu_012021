<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["title"] = "Contact Us";
        $data["landingpage"] = false;

        $this->form_validation->set_rules('contactEmail', 'Email', 'required');
        $this->form_validation->set_rules('contactName', 'Name', 'required');
        $this->form_validation->set_rules('contactCompany', 'Company Name', 'required');
        $this->form_validation->set_rules('contactPhone', 'Phone', 'required|numeric');
        $this->form_validation->set_rules('contactSubject', 'Subject', 'required');
        $this->form_validation->set_rules('contactMessage', 'Message', 'required');

        $this->session->set_userdata('site_lang',  "indonesia");
        // $this->load->view('contact', $data);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('contact', $data);
        } else {
            $config = [
                'mailtype' => 'text',
                'charset' => 'utf-8',
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_user' => 'renotechid2012@gmail.com',
                'smtp_pass' => 'renotech2012',
                'smtp_port' => 465,
                'smtp_crypto' => 'ssl',
                'crlf'    => "\r\n",
                'newline' => "\r\n",
                'validation' => TRUE
            ];

            $this->load->library('email');
            $this->email->initialize($config);


            $admin_renomeet = 'admin@renomeet.com';
            $sales_renotech = 'sales@renotech.co.id';
            $renosales_renotech = 'renosales@renotech.co.id';
            $marketing_renotech = 'marketing@renotech.co.id';


            $email_contact =  $this->input->post('contactEmail');
            $name =  $this->input->post('contactName');
            $company_name = $this->input->post('contactCompany');
            $phone = $this->input->post('contactPhone');
            $subject = $this->input->post('contactSubject');
            $message = $this->input->post('contactMessage');


            $mail_content = '
            From    : ' . $name . ' <' . $email_contact . '>
            Subject : ' . $subject . '

            Hi Renotech, 

            Request incoming from Mr. / Ms. ' . $name . '. 
            from ' . $company_name . '

            Please contact him / her in ' . $email_contact . ' / ' . $phone . '
            
            Message: 
            ' . $message . ' ';

            $this->email->from('renotechid2012@gmail.com');
            $this->email->to($admin_renomeet);
            $this->email->cc($sales_renotech, $renosales_renotech, $marketing_renotech);
            $this->email->subject('Contact Renomeet');
            $this->email->message($mail_content);

            if ($this->email->send()) {
                $this->session->set_flashdata('flashContact', 'Pesan berhasil <strong>dikirim</strong>');
                redirect('contact');
            } else {
                $this->session->set_flashdata('flashContact', 'Pesan gagal <strong>dikirim</strong>');
                redirect('contact');
            }
        }
    }
}
