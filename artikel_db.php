<? 
mysql_connect("localhost","root",""); 
$dbname="artikel_db"; 
$cek=mysql_query("CREATE DATABASE $dbname") or die("Couldn't Create Database: $dbname");   
if($cek){   
    echo "Database $dbname berhasil dibuat"; 
} 
?> 