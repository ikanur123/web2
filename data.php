<HTML> 
<HEAD> 
<TITLE> UTS </TITLE> 
</HEAD> <BODY> 
<center> 
<h1> 
<?php 
$sekarang = getdate();
$bulan = $sekarang['month'];  
$hari = $sekarang ['mday'];  
$tahun = $sekarang ['year'];  
?> 
</h1> 
<h2> Selamat datang</h2> 
<h2> Data Pemantaun Covid19 Wilayah <?php echo $_POST['pilih']; ?> </h2>
<h3> Per <?php echo "$hari $bulan $tahun"; ?> <?php echo date('H:i:s'); ?></h3>
<h3> <?php echo $_POST['nama']; ?> / <?php echo $_POST['nim']; ?> </h3>
<table border="1" cellpadding="4" cellspacing="1">
    <thead>
        <tr width="80%">
            <th>Positif</th>
            <th>Dirawat</th>
            <th>Sembuh</th>
            <th>Meninggal</th>
        </tr>
        <tr>
            <th><?php echo $_POST['positif']; ?></th>
            <th><?php echo $_POST['rawat']; ?></th>
            <th><?php echo $_POST['sembuh']; ?></th>
            <th><?php echo $_POST['meninggal']; ?></th>
        </tr>
    </thead>
    </table>
</BODY> 
</HTML>