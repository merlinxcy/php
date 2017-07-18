<?php 
$conn=new mysqli（$servername,$username,$passsword);
$conn->query($sql);

$conn=new mysqli($server,$username,$password);
$conn->query($sql);

$conn=mysqli_connect($servername,$username,$password);
mysqli_query($conn,$sql);

$conn=new mysqli();
$conn->query();

$conn=mysqli_connect();
mysqli_query($conn,$query);


$conn=new PDO("mysql:host=$servername;dbname=myDB",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO:ERRMODE_EXCEPTION);
$conn->exec($sql);

$con=new PDO("mysql:host=$servername;dbname=myDB",$username,$password);
$conn->setAttribute(PDO:ATTR_ERRMOde,PDO:ERRMODE_EXCEPTION);
$conn->exec($sql);

$conn=new PDO("mysql:host=$servername;dbname=myDB",$username,$password);
$conn->setAttribute(PDO:ATTR_ERRMODE,PDO:ERRMODE_EXCEPTION);
$conn->exec($sql);

$conn=new PDO("mysql:host=localhost;dbname=myDB;",$username,$password);
$conn->setAttribute(PDO::ATT_ERRMODE,PDO::ERRMODE_EXCEPTION);
$conn->exec($mysql);

try{
  $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
  $sql=''
  $conn->setAttribute(PDO::ATT_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $conn->exec($sql);
}



$servername='';
$username='';
$password='';
$dbname='';
$conn=new mysqli($servenrmae,$username,$password,$dbname);
if($conn->connection_error){
  die("".$conn->connect_error);
  
}
if($conn->query($sql)==True)
{
  echo 111;
}
else {
  echo $conn->error;
}
$conn->close();



$conn->beginTransaction();
$conn->exec();
$conn->exec();
$conn->commit();
$conn->rollback();

$


 ?>
