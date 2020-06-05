<? 
mysql_connect("localhost","root",""); //koneksi 
mysql_select_db("artikel_db"); // mengaktifkan database 
//membuat tabel 
$sql = "CREATE TABLE tbl_artikel     
( 
artikelID int(10), 
PRIMARY KEY(artikelID), 
judul varchar(100), 
penulis varchar(100), 
lead varchar(255), 
content text,
waktu date 
)"; 
mysql_query($sql); // input data 
$input=mysql_query("insert into tbl_artikel(judul,penulis,lead,content,waktu) 
values('Buku PHP','Prabowo','', ,)"); 
?> 