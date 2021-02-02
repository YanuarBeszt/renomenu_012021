//get all data tags
const get_data_all = () =>
	new Promise((resolve, reject) => {
		$.ajax({
			url: `${BASE_URL}Tags/getAllData`,
			type: "get",
			dataType: "json",
			success: (res) => resolve(res),
		});
	});

//get data tags by id tags
const getById = (id) =>
	new Promise((resolve, reject) => {
		$.ajax({
			url: `${BASE_URL}Tags/getDataById`,
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
		nametags: 'input[name="nametags"]',
	};

	//empty field input
	const emptyField = function () {
		$(element.nametags).val("");
		$('select[name="statustags"]').val("");
	};

	//get all data tags every document is ready
	const get_data = async () => {
		const data = await get_data_all();
		$("#tagsTb").DataTable().clear().destroy();
		$(".bodyPf").html(data[0]);
		$("#tagsTb").DataTable({
			processing: true,
			lengthMenu: [
				[5, 10, 20],
				[5, 10, 20],
			],
		});
	};

	get_data();

	//submit insert data
	$("form#tagsF").on("submit", function (e) {
		e.preventDefault();
		$("#overlay").fadeIn(100);
		var nametags = $(element.nametags).val();
		if (nametags === "") {
			$("#overlay").fadeOut(400);
			swal_error("Form is empty!");
			return;
		}
		$.ajax({
			url: `${BASE_URL}Tags/action_store`,
			type: "POST",
			data: { nametags: $(element.nametags).val() },
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
			},
			error: function (XMLHttpRequest, textStatus, errorThrown) {
				alert("Status: " + textStatus);
				alert("Error: " + errorThrown);
			},
		});
	});

	//cancel button
	$(document).on("click", "#cancel_btn", function (e) {
		emptyField();
		$(".tempat-edit").hide();
		$("#store_btn").show();
		$(".status-form").hide();
	});

	//edit selected data from table
	$(document).on("click", ".btn-edit", function (e) {
		e.preventDefault();

		getById({ idTags: this.id }).then((res) => {
			setDataEdit(res);
		});
	});

	//set data to form input
	const setDataEdit = function (data) {
		$("#store_btn").hide();
		$(".tempat-edit").show();
		$(".status-form").show();
		$('select[name="statustags"]').val(data.is_deleted).trigger("change");
		$('input[name="nametags"]').val(data.name);
		$('input[name="hiddenVal"]').val(data.id);
	};

	//update data tags
	$("#update_btn").on("click", function (e) {
		e.preventDefault();
		$("#overlay").fadeIn(100);
		var nametags = $(element.nametags).val();

		if (nametags === "") {
			$("#overlay").fadeOut(400);
			swal_error("Form is empty!");
			return;
		}
		// console.log(nametags + ', ' + statustags + ', ' + idtags);
		// return;
		$.ajax({
			url: `${BASE_URL}Tags/action_update`,
			type: "POST",
			data: {
				nametags: $(element.nametags).val(),
				statustags: $('select[name="statustags"]').val(),
				idtags: $('input[name="hiddenVal"]').val(),
			},
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
			error: function (XMLHttpRequest, textStatus, errorThrown) {
				alert("Status: " + textStatus);
				alert("Error: " + errorThrown);
			},
		});
	});

	$(document).on("click", ".btn_delete", function (e) {
		e.preventDefault();
		$.ajax({
			url: `${BASE_URL}Tags/action_delete`,
			type: "POST",
			data: { idtags: this.id },
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
