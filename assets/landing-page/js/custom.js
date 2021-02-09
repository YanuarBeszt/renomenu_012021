//get blog by id tags
const tagBlogs = (id) =>
	new Promise((resolve, reject) => {
		$.ajax({
			url: `${BASE_URL}Blog/getBlogsByIdTag`,
			data: { idPF: id },
			type: "POST",
			dataType: "json",
			success: (res) => resolve(res),
		});
	});

$(document).ready(function () {
	//function click search result
	$(document).on("click", ".btn-Squestion", function (e) {
		e.preventDefault();
		var id = $(this).attr("id");

		$("#search").val("");

		window.location = `${BASE_URL}Blog/artikel/${id}`;
	});

	$(document).on("click", ".btn-Squestion2", function (e) {
		e.preventDefault();
		var id = $(this).attr("id");
		var split = id.split("-");
		var num1 = split[0];
		var num2 = split[1];

		$("#search2").val("");

		window.location = `${BASE_URL}Bantuan/konten/${num2}/${num1}`;
	});

	//running ajax when menu platform menu is clicked
	$(document).on("click", ".cat-item", function (e) {
		e.preventDefault();
		const id = $(this).attr("id");

		tagBlogs(id).then((res) => {
			$(".blog-post").html("");
			$(".blog-post").html(res);
			// location.href = "#sectionTopics";
		});
	});

	//ajax onkeyup live search
	$("#search").keyup(function () {
		if ($("#search").val().length >= 3) {
			// console.log($("#search").val());
			// return;
			$.ajax({
				type: "post",
				url: `${BASE_URL}Blog/Search`,
				cache: false,
				data: "search=" + $("#search").val(),
				success: function (response) {
					// console.log(response);
					// return;
					$("#finalResult").html("");
					var obj = JSON.parse(response);
					if (obj.length > 0) {
						try {
							var items = [];
							$.each(obj, function (i, val) {
								items.push(
									"<li><a href='' class='btn-Squestion' id=" +
										val.id + 
										">" +
										val.title +
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

	//ajax onkeyup live search
	$("#search2").keyup(function () {
		if ($("#search2").val().length >= 3) {
			// console.log($("#search2").val());
			// return;
			$.ajax({
				type: "post",
				url: `${BASE_URL}Question/Search`,
				cache: false,
				data: "search=" + $("#search2").val(),
				success: function (response) {
					// console.log(response);
					// return;
					$("#finalResult2").html("");
					var obj = JSON.parse(response);
					if (obj.length > 0) {
						try {
							var items = [];
							$.each(obj, function (i, val) {
								items.push(
									"<li><a href='' class='btn-Squestion2' id=" +
										val.id + "-" + val.category_id +
										">" +
										val.question +
										"</a></li>"
								);
								return i < 4;
							});
							$("#finalResult2").show();
							$("#finalResult2").append.apply($("#finalResult2"), items);
						} catch (e) {
							alert("Exception while request..");
						}
					} else {
						$("#finalResult2").show();
						$("#finalResult2").html(
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
