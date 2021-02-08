//get blog by id tags
const tagBlogs = (id) =>
	new Promise((resolve, reject) => {
		$.ajax({
			url: `${BASE_URL}Blog/getBlogsByIdTag`,
			data: { idPF: id },
			type: "POST",
			success: (res) => resolve(res),
		});
	});

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

		$("#search").val("");

		window.location = `${BASE_URL}Blog/artikel/${id}`;
	});

	//running ajax when menu platform menu is clicked
	$(document).on("click", ".cat-item", function (e) {
		e.preventDefault();
		const id = $(this).attr("id");

		tagBlogs(id).then((res) => {
			$(".blog-post").html(res);
			// location.href = "#sectionTopics";
		});
	});

	//ajax onkeyup live search
	$("#search").keyup(function () {
		if ($("#search").val().length >= 3) {
			$.ajax({
				type: "post",
				url: `${BASE_URL}Blog/Search`,
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
										val.id +
										"-" +
										val.topic_id +
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
