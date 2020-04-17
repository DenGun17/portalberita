<?php 
include"../pengaturan/koneksi.php";
// <h1> Berita terbaru </h1>
$querynews=mysqli_query($koneksi,"select*from berita order by id_berita desc limit 0,5 "); //berita akan tampil 1 per satu dari yg terbaru
$jmlberita=mysqli_num_rows(mysqli_query($koneksi,"select*from berita")); //dihitung semua berita
echo "<div class='jcarousel-wrapper'>
<div class='jcarousel'>
<ul>"; //ini sebagai bingkai dari slider
while($berita=mysqli_fetch_array($querynews))
{ //memulai perulangan
// $qry=mysqli_query($koneksi,"select * from berita ");
// $data=mysqli_fetch_array($qry);
$gambar=$berita['gambar'];
//echo "Judul".$berita['gambar'];
echo "<li><h3>".ucwords($berita['judul'])."</h3>"; //ucword membuat huruf awal kata menjadi huruf besar
echo "<div><img src='gambar/$gambar' width='300px' height='200px'></div>
<p>$berita[teks_berita]</p>
<br>
</li>
";

if (empty($berita['gambar'])) {
    $gambar="nopic.jpg";
}else {
    $gambar=$berita['gambar'];
}
echo "<div><img src='gambar/$gambar' width='300px' height='200px'></div>
<p>$berita[teks_berita]</p>
<br>
</li>
";
}
?>