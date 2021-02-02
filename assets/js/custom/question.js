//ajax get all data ina questions
const get_data_ina = () =>
	new Promise((resolve, reject) => {
		$.ajax({
			url: `${BASE_URL}Question/getAllDataIna`,
			type: "get",
			dataType: "json",
			success: (res) => resolve(res),
		});
	});

//ajax get all data en questions
const get_data_en = () =>
	new Promise((resolve, reject) => {
		$.ajax({
			url: `${BASE_URL}Question/getAllDataEn`,
			type: "get",
			dataType: "json",
			success: (res) => resolve(res),
		});
	});

//ajax get data by id
const getById = (id) =>
	new Promise((resolve, reject) => {
		$.ajax({
			url: `${BASE_URL}Question/getDataById`,
			type: "POST",
			data: id,
			dataType: "json",
			success: (res) => resolve(res),
		});
	});

//ajax get data by id
const getByIdEn = (id) =>
	new Promise((resolve, reject) => {
		$.ajax({
			url: `${BASE_URL}Question/getDataByIdEn`,
			type: "POST",
			data: id,
			dataType: "json",
			success: (res) => resolve(res),
		});
	});

const getTagedById = (id) => new Promise((resolve, reject) => {});

$(document).ready(function () {
	$(".select2").select2();

	//init swal success
	function swal_alert(title, data, type) {
		Swal.fire({
			title: title,
			text: data,
			type: type,
		});
	}

	//init swal error
	function swal_error(data) {
		Swal.fire({
			title: "Failed",
			text: data,
			type: "error",
		});
	}

	//selecting element html
	const element = {
		question: 'textarea[name="question"]',
		contents: 'textarea[name="contents"]',
		statusQ: 'select[name="statusQ"]',
		idCategory: 'select[name="idCategory"]',
		idQ: 'input[name="hiddenVal"]',
		tags: 'select[name="tags"]',
	};

	//empty form field
	const emptyField = function () {
		$(element.question).val("");
		$(element.contents).val("");
		$(element.idQ).val("");
		$(element.statusQ).val("");
		$(element.idTopic).val("");
		$(element.tags).val("").trigger("change");
		$("#summernote").summernote("code", "");
	};

	//showing error
	const error = {
		question: $(".error-question"),
		contents: $(".error-contents"),
		statusQ: $(".error-statusQ"),
		idTopic: $(".error-idTopic"),
		idQ: $(".error-hiddenVal"),
		tags: $('select[name="tags"]'),
	};

	//validation form
	const validation = () => {
		state = {
			question: false,
			contents: false,
			statusQ: false,
			idTopic: false,
			tags: false,
			idQ: false,
		};

		if ($(element.question).val() === "") {
			error.question.show();
			state.question = false;
		} else {
			error.question.hide();
			state.question = true;
		}
		if ($(element.contents).val() === "") {
			error.contents.show();
			state.contents = false;
		} else {
			error.contents.hide();
			state.contents = true;
		}
		if ($(element.statusQ).val() === "") {
			error.statusQ.show();
			state.statusQ = false;
		} else {
			error.statusQ.hide();
			state.statusQ = true;
		}
		if ($(element.idTopic).val() === "") {
			error.idTopic.show();
			state.idTopic = false;
		} else {
			error.idTopic.hide();
			state.idTopic = true;
		}
		if ($(element.tags).val() === "") {
			error.tags.show();
			state.tags = false;
		} else {
			error.tags.hide();
			state.tags = true;
		}

		if (
			state.question === true &&
			state.contents === true &&
			state.statusQ === true &&
			state.idTopic === true
		) {
			return true;
		} else {
			return false;
		}
	};

	//selecting element html
	const element_en = {
		question_en: 'textarea[name="question_en"]',
		contents_en: 'textarea[name="contents_en"]',
		statusQ_en: 'select[name="statusQ_en"]',
		idTopic_en: 'select[name="idTopic_en"]',
		idQ_en: 'input[name="hiddenVal_en"]',
		tags_en: 'select[name="tags_en"]',
	};

	//empty form field
	const emptyField_en = function () {
		$(element_en.question_en).val("");
		$(element_en.contents_en).val("");
		$(element_en.idQ_en).val("");
		$(element_en.statusQ_en).val("");
		$(element_en.idTopic_en).val("");
		$(element_en.tags_en).val("").trigger("change");
		$("#summernote_en").summernote("code", "");
	};

	//showing error
	const error_en = {
		question_en: $(".error-question"),
		contents_en: $(".error-contents"),
		statusQ_en: $(".error-statusQ"),
		idTopic_en: $(".error-idTopic"),
		idQ_en: $(".error-hiddenVal"),
		tags_en: $('select[name="tags"]'),
	};

	const validation_en = () => {
		state = {
			question_en: false,
			contents_en: false,
			statusQ_en: false,
			idTopic_en: false,
			tags_en: false,
			idQ_en: false,
		};

		if ($(element.question_en).val() === "") {
			error_en.question_en.show();
			state.question_en = false;
		} else {
			error_en.question_en.hide();
			state.question_en = true;
		}
		if ($(element.contents_en).val() === "") {
			error_en.contents_en.show();
			state.contents_en = false;
		} else {
			error_en.contents_en.hide();
			state.contents_en = true;
		}
		if ($(element.statusQ_en).val() === "") {
			error_en.statusQ_en.show();
			state.statusQ_en = false;
		} else {
			error_en.statusQ_en.hide();
			state.statusQ_en = true;
		}
		if ($(element.idTopic_en).val() === "") {
			error_en.idTopic_en.show();
			state.idTopic_en = false;
		} else {
			error_en.idTopic_en.hide();
			state.idTopic_en = true;
		}
		if ($(element.tags_en).val() === "") {
			error_en.tags_en.show();
			state.tags_en = false;
		} else {
			error_en.tags_en.hide();
			state.tags_en = true;
		}

		if (
			state.question_en === true &&
			state.contents_en === true &&
			state.statusQ_en === true &&
			state.idTopic_en === true
		) {
			return true;
		} else {
			return false;
		}
	};

	//show uploaded file name
	const regex = /[\/\\]([\w\d\s\.\-\(\)]+)$/;
	$("#imageTopic").on("change", function () {
		const file = this.files[0];
		const value = $(this).val().toLowerCase();

		const fileName = $(this).val();
		$("#file_name").text(fileName.match(regex)[1]);
	});

	//show data question ina to table
	const get_dataIna = async () => {
		const data = await get_data_ina();
		$("#questionTb").DataTable().clear().destroy();
		$(".bodyquestion").html(data[0]);
		$("#questionTb").DataTable({
			processing: true,
			lengthMenu: [
				[10, 20, 30],
				[10, 20, 30],
			],
		});
		$("#ina").show();
		$("#en").hide();
		$("#btn_lang_ina").addClass("disabled");
		$("#btn_lang_en").removeClass("disabled");
		$(".card-title").text("Data Form Question INA");
	};

	get_dataIna();

	//show data question en to table
	const get_dataEn = async () => {
		const data = await get_data_en();
		$("#questionTb_en").DataTable().clear().destroy();
		$(".bodyquestion_en").html(data[0]);
		$("#questionTb_en").DataTable({
			processing: true,
			lengthMenu: [
				[10, 20, 30],
				[10, 20, 30],
			],
		});
		$("#ina").hide();
		$("#en").show();
		$("#btn_lang_ina").removeClass("disabled");
		$("#btn_lang_en").addClass("disabled");
		$(".card-title").text("Data Form Question EN");
	};

	//summernote function
	$("#summernote").summernote({
		height: "300px",
		callbacks: {
			onImageUpload: function (image) {
				uploadImage(image[0]);
			},
			onMediaDelete: function (target) {
				deleteImage(target[0].src);
			},
		},
	});

	//function upload image summernote
	function uploadImage(image) {
		var data = new FormData();
		data.append("image", image);
		$.ajax({
			url: `${BASE_URL}Question/uploadImage`,
			cache: false,
			contentType: false,
			processData: false,
			data: data,
			type: "POST",
			dataType: "JSON",
			success: function (res) {
				// console.log(res.msg);
				if (res.status == error) {
					swal_alert(res.msg);
				} else {
					console.log("success insert image to ", res.msg);
					$("#summernote").summernote("insertImage", res.msg);
				}
			},
			error: function (xhr, status, error) {
				alert(xhr.responseText);
			},
		});
	}

	//function delete image summernote
	function deleteImage(src) {
		$.ajax({
			data: { src: src },
			type: "POST",
			url: `${BASE_URL}Question/deleteImage`,
			cache: false,
			success: function (response) {
				console.log(response);
			},
			error: function (xhr, status, error) {
				alert(xhr.responseText);
			},
		});
	}

	//summernote function
	$("#summernote_en").summernote({
		height: "300px",
		callbacks: {
			onImageUpload: function (image) {
				uploadImage_en(image[0]);
			},
			onMediaDelete: function (target) {
				deleteImage_en(target[0].src);
			},
		},
	});

	//function upload image summernote
	function uploadImage_en(image) {
		var data = new FormData();
		data.append("image", image);
		$.ajax({
			url: `${BASE_URL}Question/uploadImage`,
			cache: false,
			contentType: false,
			processData: false,
			data: data,
			type: "POST",
			dataType: "JSON",
			success: function (res) {
				// console.log(res.msg);
				if (res.status == error) {
					swal_alert(res.msg);
				} else {
					console.log("success insert image to ", res.msg);
					$("#summernote_en").summernote("insertImage", res.msg);
				}
			},
			error: function (xhr, status, error) {
				alert(xhr.responseText);
			},
		});
	}

	//function delete image summernote
	function deleteImage_en(src) {
		$.ajax({
			data: { src: src },
			type: "POST",
			url: `${BASE_URL}Question/deleteImage`,
			cache: false,
			success: function (response) {
				console.log(response);
			},
			error: function (xhr, status, error) {
				alert(xhr.responseText);
			},
		});
	}
	//button cancel
	$(document).on("click", "#cancel_btn", function (e) {
		setTimeout(function () {
			window.location.replace(`${BASE_URL}Question`);
		}, 200);
	});

	//store data question
	$("#store_btn").on("click", function (e) {
		e.preventDefault();
		// var tags = $('select[name="tags"]').val();
		// console.log(tags);
		// return;
		if (validation() === false) {
			return;
		}
		$("#overlay").fadeIn(100);
		console.log($(element.idCategory).val());
		// return;
		$.ajax({
			url: `${BASE_URL}Question/action_store`,
			type: "post",
			data: {
				question: $(element.question).val(),
				contents: $(element.contents).val(),
				idCategory: $(element.idCategory).val(),
				tags: $(element.tags).val(),
			},
			dataType: "json",
			success: function (res) {
				setTimeout(function () {
					window.location.replace(`${BASE_URL}Question`);
				}, 2000);
				if (res.code === 1) {
					$("#overlay").fadeOut(400);
					swal_alert(res.pesan, "success");
				} else {
					$("#overlay").fadeOut(400);
					swal_error(res.message);
				}
				emptyField();
			},
		});
	});

	//button edit get id
	$(document).on("click", ".btn_edit", function (e) {
		e.preventDefault();
		getById({ id: this.id }).then((res) => {
			// console.log(res);
			// return;
			setDataEdit(res);
		});
	});

	//button cancel
	$(document).on("click", "#cancel_btn_en", function (e) {
		setTimeout(function () {
			window.location.replace(`${BASE_URL}Question`);
		}, 200);
	});

	//store data question
	$("#store_btn_en").on("click", function (e) {
		e.preventDefault();
		// var tags = $('select[name="tags"]').val();
		// console.log(tags);
		// return;
		if (validation_en() === false) {
			return;
		}
		$("#overlay").fadeIn(100);
		$.ajax({
			url: `${BASE_URL}Question/action_store_en`,
			type: "post",
			data: {
				question: $(element_en.question_en).val(),
				contents: $(element_en.contents_en).val(),
				idTopic: $(element_en.idTopic_en).val(),
				tags: $(element_en.tags_en).val(),
			},
			dataType: "json",
			success: function (res) {
				setTimeout(function () {
					window.location.replace(`${BASE_URL}Question`);
				}, 2000);
				if (res.code === 1) {
					$("#overlay").fadeOut(400);
					swal_alert(res.pesan, "success");
				} else {
					$("#overlay").fadeOut(400);
					swal_error(res.message);
				}
				emptyField_en();
			},
		});
	});

	//button edit get id
	$(document).on("click", ".btn-edit_en", function (e) {
		e.preventDefault();
		getByIdEn({ idQ: this.id }).then((res) => {
			// console.log(res);
			// return;
			setDataEditEn(res);
		});
	});

	//setting data question to form field edit
	const setDataEdit = function (data) {
		$("#tbQ").hide();
		$("#questionF").show();
		$(".card-footer").show();
		$("#store_btn").hide();
		$(".tempat-edit").show();
		$(".status-form").show();

		$('select[name="statusQ"]').val(data.is_deleted).trigger("change");
		$('select[name="idCategory"]').val(data.category_id).trigger("change");
		$('textarea[name="question"]').val(data.question);
		$("#summernote").summernote("code", data.answer_desc);
		$('input[name="hiddenVal"]').val(data.id);

		$.ajax({
			url: `${BASE_URL}Question/getTagedByQuestion`,
			method: "POST",
			data: {
				idQ: data.id,
			},
			cache: false,
			success: function (res) {
				var item = res;
				var val1 = item.replace("[", "");
				var val2 = val1.replace("]", "");
				var values = val2;
				$.each(values.split(","), function (i, e) {
					$("#tags option[value='" + e + "']")
						.prop("selected", true)
						.trigger("change");
				});
			},
		});
	};

	const setDataEditEn = function (data) {
		$("#tbQ_en").hide();
		$("#questionF_en").show();
		$(".card-footer_en").show();
		$("#store_btn_en").hide();
		$(".tempat-edit_en").show();
		$(".status-form_en").show();

		$('select[name="statusQ_en"]').val(data.is_deleted).trigger("change");
		$('select[name="idTopic_en"]').val(data.topic_id).trigger("change");
		$('textarea[name="question_en"]').val(data.question);
		$("#summernote_en").summernote("code", data.answer_desc);
		$('input[name="hiddenVal_en"]').val(data.id);

		$.ajax({
			url: `${BASE_URL}Question/getTagedByQuestion`,
			method: "POST",
			data: {
				idQ: data.id,
			},
			cache: false,
			success: function (res) {
				var item = res;
				var val1 = item.replace("[", "");
				var val2 = val1.replace("]", "");
				var values = val2;
				$.each(values.split(","), function (i, e) {
					$("#tags_en option[value='" + e + "']")
						.prop("selected", true)
						.trigger("change");
				});
			},
		});
	};

	//update function
	$("#update_btn").on("click", function (e) {
		e.preventDefault();
		if (validation() === false) {
			return;
		}
		$("#overlay").fadeIn(100);
		$.ajax({
			url: `${BASE_URL}Question/action_update`,
			type: "post",
			data: {
				question: $(element.question).val(),
				contents: $(element.contents).val(),
				idCategory: $(element.idCategory).val(),
				statusQ: $(element.statusQ).val(),
				tags: $(element.tags).val(),
				idQ: $(element.idQ).val(),
			},
			dataType: "json",
			success: function (res) {
				setTimeout(function () {
					window.location.replace(`${BASE_URL}Question`);
				}, 2000);
				if (res.code === 1) {
					$("#overlay").fadeOut(400);
					swal_alert(res.pesan, "success");
				} else {
					$("#overlay").fadeOut(400);
					swal_error(res.message);
				}
				emptyField();
				$("#store_btn").show();
				$(".tempat-edit").hide();
				$(".status-form").hide();
			},
		});
	});

	//update function
	$("#update_btn_en").on("click", function (e) {
		e.preventDefault();
		if (validation_en() === false) {
			return;
		}
		$("#overlay").fadeIn(100);
		$.ajax({
			url: `${BASE_URL}Question/action_update_en`,
			type: "post",
			data: {
				question: $(element_en.question_en).val(),
				contents: $(element_en.contents_en).val(),
				idTopic: $(element_en.idTopic_en).val(),
				statusQ: $(element_en.statusQ_en).val(),
				tags: $(element_en.tags_en).val(),
				idQ: $(element_en.idQ_en).val(),
			},
			dataType: "json",
			success: function (res) {
				setTimeout(function () {
					window.location.replace(`${BASE_URL}Question`);
				}, 2000);
				if (res.code === 1) {
					$("#overlay").fadeOut(400);
					swal_alert(res.pesan, "success");
				} else {
					$("#overlay").fadeOut(400);
					swal_error(res.message);
				}
				emptyField();
				$("#store_btn_en").show();
				$(".tempat-edit_en").hide();
				$(".status-form_en").hide();
			},
		});
	});

	//delete function (change status to not active)
	// $(document).on("click", ".btn_delete", function (e) {
	// 	e.preventDefault();
	// 	$.ajax({
	// 		url: `${BASE_URL}Question/action_delete`,
	// 		type: "POST",
	// 		data: { idQ: this.id },
	// 		dataType: "json",
	// 		success: function (res) {
	// 			if (res.code === 1) {
	// 				$("#overlay").fadeOut(400);
	// 				swal_alert(res.pesan, "success");
	// 			} else {
	// 				$("#overlay").fadeOut(400);
	// 				swal_error(res.message);
	// 			}
	// 			emptyField();
	// 			get_data();
	// 		},
	// 	});
	// });

	$(document).on("click", ".btn_delete", function (e) {
		e.preventDefault();
		var id = this.id;
		// console.log(this.id);
		// return;
		const config = {
			title: "Are you sure?",
			text: "You will not be able to recover this data Question!",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes, delete it!",
			cancelButtonText: "No, cancel please!",
		};

		sweetAlert.fire(config).then(deleting);

		function deleting(isConfirm) {
			if (isConfirm.value) {
				console.log(id);
				$.ajax({
					url: `${BASE_URL}Question/action_delete`,
					type: "POST",
					data: { idQ: id },
					dataType: "json",
					error: function () {
						alert("Something is wrong");
					},
					success: function (data) {
						swal.fire(
							"Deleted!",
							"Your data Question has been deleted.",
							"success"
						);
						setTimeout(function () {
							window.location.replace(`${BASE_URL}Question`);
						}, 1000);
					},
				});
			} else {
				swal.fire("Cancelled", "Your data Question is safe :)", "error");
			}
		}
	});

	//show data question ina function
	$("#btnshow").on("click", function () {
		$("#tbQ").show();
		$("#questionF").hide();
		$(".card-footer").hide();
	});

	//show data question en function
	$("#btnshow_en").on("click", function () {
		$("#tbQ_en").show();
		$("#questionF_en").hide();
		$(".card-footer_en").hide();
	});

	//hide data question ina function
	$("#btnhide").on("click", function () {
		$("#tbQ").hide();
		$("#questionF").show();
		$(".card-footer").show();
	});

	//hide data question en function
	$("#btnhide_en").on("click", function () {
		$("#tbQ_en").hide();
		$("#questionF_en").show();
		$(".card-footer_en").show();
	});

	//get question ina function
	$("#btn_lang_ina").on("click", function () {
		get_dataIna();
	});

	//get question en function
	$("#btn_lang_en").on("click", function () {
		get_dataEn();
	});
});

$(window).on("load", function () {
	$("#overlay").fadeOut(400);
});
