<?php
$target = "images/";
$target = $target . basename( $_FILES['photo']['name']);

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pic=($_FILES['photo']['name']);

mysql_connect("localhost", "username", "password") or die(mysql_error()) ;
mysql_select_db("Database_Name") or die(mysql_error()) ;

mysql_query("INSERT INTO 'visitors' VALUES ('$name', '$email', '$phone', '$pic')") ;

if(move_uploaded_file($_FILES['photo']['tmp_name'],$target))
{ echo "The file ". basename( $_FILES['uploadedfile']
['name']). " has been uploaded, and your information has been added to the directory";
}
else {

echo "Sorry, there was a problem uploading your file.";
}

mysql_connect("your.hostaddress.com", "username", "password") or die(mysql_error()) ;
mysql_select_db("Database_Name") or die(mysql_error()) ;
$data = mysql_query("SELECT * FROM visitors") or die(mysql_error());
while($info = mysql_fetch_array( $data )) {
Echo "<img src=http://www.yoursite.com/images/".$info['photo'] ."> <br>"; Echo "<b>Name:</b> ".$info['name'] . "<br> "; Echo "<b>Email:</b> ".$info['email'] . " <br>"; Echo "<b>Phone:</b> ".$info['phone'] . " <hr>"; }




?>
