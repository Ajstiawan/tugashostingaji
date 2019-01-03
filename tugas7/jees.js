var bil1,bil2,jml; 

alert("Menghitung Dua Bilangan");

bil1 = +prompt("Input Bilangan 1");
bil2 = +prompt("Input Bilangan 2");
jml = bil1 + bil2;

var konfirmasi = confirm("Apakah anda ingin melanjutkan perhitungan?");

if (konfirmasi == true)
    document.write("Hasilnya : " +jml);
else
    document.location.href = "index.html";