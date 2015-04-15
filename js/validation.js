function validatePayment() {
    var x = document.forms["form-transaksi"]["Jumlah"].value;
    if (x == null || x == "") {
        alert("Jumlah must be filled out");
        return false;
    }
}

function validateTambahPinjaman() {
	var x = document.forms["tambah-pinjaman"]["jumlah"].value;
    if (x == null || x == "") {
        alert("Jumlah must be filled out");
        return false;
    }
}

function validateOrderInventaris() {
	var x = document.forms["form-order-inventaris"]["NamaBarang"].value;
	var y = document.forms["form-order-inventaris"]["JumlahBarang"].value;
	var z = document.forms["form-order-inventaris"]["HargaBarang"].value;

	if (x == null || x =="" || y == null || y == "" || z == null || z == "") {
		alert("All forms must be filled");
		return false;
	}
}

function validateTambahBarang() {
	var x = document.forms["formTambahBarang"]["JumBarang"].value;
	if (x == null || x == "") {
        alert("Jumlah must be filled out");
        return false;
    }
}

function validatePakaiBarang() {
	var x = document.forms["formPakaiBarang"]["JumBarang"].value;
	if (x == null || x == "") {
        alert("Jumlah must be filled out");
        return false;
    }
}

