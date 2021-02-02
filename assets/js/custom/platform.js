//get all data platform
const get_data_all = () =>
	new Promise((resolve, reject) => {
		$.ajax({
			url: `${BASE_URL}Platform/getAllData`,
			type: "get",
			dataType: "json",
			success: (res) => resolve(res),
		});
	});

//get data platform by id platform
const getById = (id) =>
	new Promise((resolve, reject) => {
		$.ajax({
			url: `${BASE_URL}Platform/getDataById`,
			type: "POST",
			data: id,
			dataType: "json",
			success: (res) => resolve(res),
		});
	});

$(document).ready(function () {
	//init swalalert success
	function swal_alert(title, data, type) {
		Swal.fire({
			title: title,
			text: data,
			type: type,
		});
	}

	//init swalalert error
	function swal_error(data) {
		Swal.fire({
			title: "Data",
			text: data,
			type: "error",
		});
	}

	//make element per input field
	const element = {
		namePF: 'input[name="namePF"]',
		statusPF: 'select[name="statusPF"]',
		file_name: 'input[name="file_name"]',
		imagePF: 'input[name="imagePF"]',
		hiddenVal: 'input[name="hiddenVal"]',
		file_name: "#file_name",
	};

	//empty field input
	const emptyField = function () {
		$(element.namePF).val("");
		$(element.statusPF).val("");
		$(element.file_name).val("");
		$(element.imagePF).val("");
		$(element.hiddenVal).val("");
		$(element.file_name).text("Choose file");
	};

	//get uploaded file name
	const regex = /[\/\\]([\w\d\s\.\-\(\)]+)$/;
	$("#imagePF").on("change", function () {
		const file = this.files[0];
		const value = $(this).val().toLowerCase();

		const fileName = $(this).val();
		$("#file_name").text(fileName.match(regex)[1]);
	});

	//get all data platform every document is ready
	const get_data = async () => {
		const data = await get_data_all();
		$("#platformTb").DataTable().clear().destroy();
		$(".bodyPf").html(data[0]);
		$("#platformTb").DataTable({
			processing: true,
			lengthMenu: [
				[5, 10, 20],
				[5, 10, 20],
			],
		});
	};

	get_data();

	//submit insert data
	$("form#platformF").on("submit", function (e) {
		e.preventDefault();
		$("#overlay").fadeIn(100);
		var form_data = new FormData();
		var fileInfo = $("input[name='imagePF']")[0].files[0];
		var namePF = $('input[name="namePF"]').val();

		if (fileInfo === "") {
			$("#overlay").fadeOut(400);
			swal_error("File image is empty!");
			return;
		}
		if (namePF === "") {
			$("#overlay").fadeOut(400);
			swal_error("File name is empty!");
			return;
		}

		form_data.append("file_image", fileInfo);
		form_data.append("namePF", namePF);
		// console.log(Object.fromEntries(form_data));
		// return;
		$.ajax({
			url: `${BASE_URL}Platform/action_store`,
			type: "post",
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,
			dataType: "json",
			success: function (res) {
				if (res.code === 1) {
					$("#overlay").fadeOut(400);
					swal_alert(res.pesan, "success");
				} else {
					$("#overlay").fadeOut(400);
					swal_error(res.message);
				}
				emptyField();
				get_data();
			},
		});
	});

	//cancel button
	$(document).on("click", "#cancel_btn", function (e) {
		emptyField();
		$("#store_btn").show();
		$(".tempat-edit").hide();
		$(".status-form").hide();
		$(".image-edit").hide();
	});

	//edit selected data from table
	$(document).on("click", ".btn-edit", function (e) {
		e.preventDefault();

		getById({ idPF: this.id }).then((res) => {
			setDataEdit(res);
		});
	});

	//set data to form input
	const setDataEdit = function (data) {
		$("#store_btn").hide();
		$(".tempat-edit").show();
		$(".status-form").show();
		$(".image-edit").show();
		$('select[name="statusPF"]').val(data.is_deleted).trigger("change");
		$('input[name="namePF"]').val(data.name);
		$('input[name="hiddenVal"]').val(data.id);
		$("#file_name").text(data.image);
		$("#image_position").attr("src", "assets/img/upload/" + data.image);
	};

	//update data platform
	$("#update_btn").on("click", function (e) {
		e.preventDefault();
		$("#overlay").fadeIn(100);
		var form_data = new FormData();
		var fileInfo = $("input[name='imagePF']")[0].files[0];
		var namePF = $('input[name="namePF"]').val();
		var statusPF = $('select[name="statusPF"]').val();
		var idPF = $('input[name="hiddenVal"]').val();

		if (fileInfo === "") {
			$("#overlay").fadeOut(400);
			swal_error("File image is empty!");
			return;
		} else if (namePF === "") {
			$("#overlay").fadeOut(400);
			swal_error("File name is empty!");
			return;
		}

		form_data.append("file_image", fileInfo);
		form_data.append("namePF", namePF);
		form_data.append("statusPF", statusPF);
		form_data.append("idPF", idPF);
		$.ajax({
			url: `${BASE_URL}Platform/action_update`,
			type: "post",
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,
			dataType: "json",
			success: function (res) {
				// setTimeout(function () {
				// 	window.location.replace(`${BASE_URL}Platform`);
				// }, 2000);
				if (res.code === 1) {
					$("#overlay").fadeOut(400);
					swal_alert(res.pesan, "success");
				} else {
					$("#overlay").fadeOut(400);
					swal_error(res.message);
				}
				$("#store_btn").show();
				$(".tempat-edit").hide();
				$(".status-form").hide();
				$(".image-edit").hide();
				emptyField();
				get_data();
			},
		});
	});

	$(document).on("click", ".btn_delete", function (e) {
		e.preventDefault();
		$.ajax({
			url: `${BASE_URL}Platform/action_delete`,
			type: "POST",
			data: { idPF: this.id },
			dataType: "json",
			success: function (res) {
				if (res.code === 1) {
					$("#overlay").fadeOut(400);
					swal_alert(res.pesan, "success");
				} else {
					$("#overlay").fadeOut(400);
					swal_error(res.message);
				}
				emptyField();
				get_data();
			},
		});
	});
});
