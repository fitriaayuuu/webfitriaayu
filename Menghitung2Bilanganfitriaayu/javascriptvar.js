var bil1,bil2,jml;

alert("Perhitungan Penjumlahan 2 bilangan");

bil1 = +prompt("Input Bilangan 1");
bil2 = +prompt("Input Bilangan 2");
jml = bil1 + bil2;

var konfirm = confirm("Apakah anda ingin mengetahui hasilnya?");

if(konfirm == true)
	document.write("Hasilnya : " +jml);
else
	document.location.href = "home.html";