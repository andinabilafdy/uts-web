function hitung() {

    // ambil nilai dari input
    let angka1 = parseInt(document.getElementById("angka1").value);
    let angka2 = parseInt(document.getElementById("angka2").value);
    let operator = document.getElementById("operator").value;

    // lakukan perhitungan
    let hasil;
        if (operator == "*") {
            hasil = angka1 * angka2;
        } else if (operator == "+") {
            hasil = angka1 + angka2;
        } else if (operator == "-") {
            hasil = angka1 - angka2;
        } else if (operator == "/") {
            hasil = angka1 / angka2;
        }

    // tampilkan hasil pada input "hasil"
    document.getElementById("hasil").value = hasil;
}

