//ajax get all data Banners
const get_data_all = () =>
	new Promise((resolve, reject) => {
		$.ajax({
			url: `${BASE_URL}Banner/getAllData`,
			type: "get",
			dataType: "json",
			success: (res) => resolve(res),
		});
	});

//ajax get data by idBanner
const getById = (id) =>
	new Promise((resolve, reject) => {
		$.ajax({
			url: `${BASE_URL}Banner/getDataById`,
			type: "POST",
			data: id,
			dataType: "json",
			success: (res) => resolve(res),
		});
	});

$(document).ready(function () {
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
			title: "Data",
			text: data,
			type: "error",
		});
	}

	//selecting element html
	const element = {
		nameBanner: 'input[name="nameBanner"]',
		imageBanner: 'input[name="imageBanner"]',
		statusBanner: 'input[name="statusBanner"]',
		urlBanner: 'input[name="urlBanner"]',
		hiddenVal: 'input[name="hiddenVal"]',
		file_name: "#file_name",
	};

	//empty form field
	const emptyField = function () {
		$(element.nameBanner).val("");
		$(element.imageBanner).val("");
		$(element.statusBanner).val("");
		$(element.urlBanner).val("");
		$(element.hiddenVal).val("");
		$(element.file_name).text("Choose file");
	};

	//show uploaded file name
	const regex = /[\/\\]([\w\d\s\.\-\(\)]+)$/;
	$("#imageBanner").on("change", function () {
		const file = this.files[0];
		const value = $(this).val().toLowerCase();

		const fileName = $(this).val();
		$("#file_name").text(fileName.match(regex)[1]);
	});

	//get all data Banners
	const get_data = async () => {
		const data = await get_data_all();
		$("#BannerTb").DataTable().clear().destroy();
		$(".bodyBanner").html(data[0]);
		$("#BannerTb").DataTable({
			processing: true,
			lengthMenu: [
				[5, 10, 20],
				[5, 10, 20],
			],
		});
	};

	get_data();

	$("form#BannerF").on("submit", function (e) {
		e.preventDefault();
		$("#overlay").fadeIn(100);
		var form_data = new FormData();
		var fileInfo = $("input[name='imageBanner']")[0].files[0];
		var nameBanner = $('input[name="nameBanner"]').val();
		var urlBanner = $('input[name="urlBanner"]').val();

		if (fileInfo === "") {
			$("#overlay").fadeOut(400);
			swal_error("File image is empty!");
			return;
		} else if (nameBanner === "") {
			$("#overlay").fadeOut(400);
			swal_error("File name is empty!");
			return;
		}

		form_data.append("file_image", fileInfo);
		form_data.append("nameBanner", nameBanner);
		form_data.append("url", urlBanner);
		$.ajax({
			url: `${BASE_URL}Banner/action_store`,
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

	//set data to the form field edit data
	$(document).on("click", ".btn-edit", function (e) {
		e.preventDefault();
		getById({ idBanner: this.id }).then((res) => {
			setDataEdit(res);
		});
	});

	//set value form field
	const setDataEdit = function (data) {
		$("#store_btn").hide();
		$(".tempat-edit").show();
		$(".status-form").show();
		$(".image-edit").show();
		$('select[name="statusBanner"]').val(data.is_deleted).trigger("change");
		$('input[name="urlBanner"]').val(data.url_banner);
		$('input[name="nameBanner"]').val(data.name);
		$('input[name="hiddenVal"]').val(data.id);
		$("#file_name").text(data.image);
		$("#image_position").attr(
			"src",
			"assets/images/upload/Banner/" + data.image
		);
	};

	//update action
	$("#update_btn").on("click", function (e) {
		e.preventDefault();
		$("#overlay").fadeIn(100);
		var form_data = new FormData();
		var fileInfo = $("input[name='imageBanner']")[0].files[0];
		var nameBanner = $('input[name="nameBanner"]').val();
		var statusBanner = $('select[name="statusBanner"]').val();
		var urlBanner = $('input[name="urlBanner"]').val();
		var idBanner = $('input[name="hiddenVal"]').val();

		form_data.append("file_image", fileInfo);
		form_data.append("nameBanner", nameBanner);
		form_data.append("statusBanner", statusBanner);
		form_data.append("urlBanner", urlBanner);
		form_data.append("idBanner", idBanner);
		$.ajax({
			url: `${BASE_URL}Banner/action_update`,
			type: "post",
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,
			dataType: "json",
			success: function (res) {
				// console.log(res);
				// return;
				if (res.code === 1) {
					$("#overlay").fadeOut(400);
					swal_alert(res.pesan, "success");
				} else {
					$("#overlay").fadeOut(400);
					swal_error(res.message);
				}
				emptyField();
				get_data();
				$("#store_btn").show();
				$(".tempat-edit").hide();
				$(".status-form").hide();
				$(".image-edit").hide();
			},
		});
	});

	//delete data(update status to not active)
	$(document).on("click", ".btn_delete", function (e) {
		e.preventDefault();
		$.ajax({
			url: `${BASE_URL}Banner/action_delete`,
			type: "POST",
			data: { idBanner: this.id },
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
