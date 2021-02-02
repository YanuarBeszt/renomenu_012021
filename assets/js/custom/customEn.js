//get all Platforms
const helpListPlatforms = () =>
  new Promise((resolve, reject) => {
    $.ajax({
      url: `${BASE_URL}Help/getPlatforms`,
      type: "get",
      success: (res) => resolve(res),
    });
  });

//get all topics by id platform
const listTopics = (id) =>
  new Promise((resolve, reject) => {
    $.ajax({
      url: `${BASE_URL}Help/getTopics`,
      data: { idPF: id },
      type: "POST",
      success: (res) => resolve(res),
    });
  });

//get all steps by id topic
const contents = (id) =>
  new Promise((resolve, reject) => {
    $.ajax({
      url: `${BASE_URL}Topics/getStepsEn`,
      data: { idQ: id },
      type: "POST",
      dataType: "json",
      success: (res) => resolve(res),
    });
  });

//get all top question
const listTopQuestions = () =>
  new Promise((resolve, reject) => {
    var url = window.location.pathname.split("/");
    var idQ = url.pop();
    $.ajax({
      url: `${BASE_URL}Topics/getTopQuestionsEn`,
      data: { idQ: idQ },
      type: "POST",
      success: (res) => resolve(res),
    });
  });

//get data steps by id topic
function contentsTopic(id) {
  $.ajax({
    url: `${BASE_URL}Topics/getStepsEn`,
    data: { idQ: id },
    type: "POST",
    dataType: "json",
    success: function (res) {
      $(".QTitle").hide();
      $(".contentTittle").html(res.contentTitle);
      $(".question").html(res.contents);
    },
  });
}
$(document).ready(function () {
  //add intro session introjs every first running
  function introSession() {
    introJs().setOption("showBullets", false).start();
    sessionStorage.setItem("intro", "TRUE");
  }

  //running intro js if does not have intro session
  var intro = sessionStorage.getItem("intro");
  if (intro == null) {
    introSession();
  }

  //function click search result
  $(document).on("click", ".btn-Squestion", function (e) {
    e.preventDefault();
    var id = $(this).attr("id");
    var split = id.split("-");
    var num1 = split[0];
    var string = num1.toString();

    $("#search").val("");

    sessionStorage.setItem("reloading", string);
    window.location = `${BASE_URL}Topics/${split[1]}`;
  });

  //running ajax get data question
  const get_data_TopQ = async () => {
    const data = await listTopQuestions();

    var reloading = sessionStorage.getItem("reloading");
    if (reloading != null) {
      contentsTopic(reloading);
      sessionStorage.removeItem("reloading");
    } else {
      $(".question").html(data);
    }
  };

  //running ajax when menu platform menu is clicked
  $(document).on("click", ".btn-platform", function (e) {
    e.preventDefault();
    const id = $(this).attr("id");
    $("#sectionTopics").show();
    listTopics(id).then((res) => {
      $(".helpTopics").html(res);
      location.href = "#sectionTopics";
    });
  });

  //get data steps when list question is clicked
  $(document).on("click", ".btn-question", function (e) {
    e.preventDefault();
    const id = $(this).attr("id");
    $(".question").html("");
    $(".QTitle").hide();
    contents(id).then((res) => {
      $(".question").html(res.contents);
      $(".contentTittle").html(res.contentTitle);
      $("span#last").append('<i id="iconBr" class="fa fa-caret-right"></i>');
      $(".breadcrumbs").append(
        '<span><a href="" onclick="return false">' +
          res.contentTitle +
          "</a></span>"
      );
    });
  });

  $(".lang_indo").click(function (e) {
    e.preventDefault();
    var pathname = window.location.pathname;
    var split = pathname.split("/");
    var str = split[2];

    if (str == "en") {
      var str2 = split[4];
      // console.log(str2);
    } else {
      var str2 = split[3];
    }
    var string = str2.toString();
    $.ajax({
      type: "POST",
      url: `${BASE_URL}Topics/setSessionsIna`,
    }).done(function () {
      window.location = `${BASE_URL}Topics/${string}`;
    });
  });

  $(".lang_eng").click(function (e) {
    e.preventDefault();
    var pathname = window.location.pathname;
    var split = pathname.split("/");
    var str = split[2];
    // console.log(str);
    // return;

    if (str == "en") {
      var str2 = split[4];
      // console.log(str2);
    } else {
      var str2 = split[3];
    }
    var string = str2.toString();
    $.ajax({
      type: "POST",
      url: `${BASE_URL}Topics/setSessionsEn`,
    }).done(function () {
      window.location = `${BASE_URL}en/Topics/${string}`;
    });
  });

  //get all platform when document is ready
  const get_data_HelpPlatform = async () => {
    const data = await helpListPlatforms();
    $(".helpPlatform").html(data);
  };

  //functions
  get_data_HelpPlatform();
  get_data_TopQ();

  //ajax onkeyup live search
  $("#search").keyup(function () {
    if ($("#search").val().length >= 3) {
      $.ajax({
        type: "post",
        url: `${BASE_URL}Help/SearchEn`,
        cache: false,
        data: "search=" + $("#search").val(),
        success: function (response) {
          $("#finalResult").html("");
          var obj = JSON.parse(response);
          if (obj.length > 0) {
            try {
              var items = [];
              $.each(obj, function (i, val) {
                items.push(
                  "<li><a href='' class='btn-Squestion' id=" +
                    val.idQ +
                    "-" +
                    val.idTopic +
                    ">" +
                    val.question +
                    "</a></li>"
                );
                return i < 4;
              });
              $("#finalResult").show();
              $("#finalResult").append.apply($("#finalResult"), items);
            } catch (e) {
              alert("Exception while request..");
            }
          } else {
            $("#finalResult").show();
            $("#finalResult").html(
              $("<li><a href=''> We are sorry, no data match. </a></li>")
            );
          }
        },
        error: function () {
          alert("Error while request..");
        },
      });
    }
    return false;
  });
});
