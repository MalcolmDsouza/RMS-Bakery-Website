
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>File my sql</title>
</head>
<body>
<?php
$dbh = new PDO("mysql:host=localhost;dbname=mydata","root","")
if(isset($_POST['btn'])){
	$name=$_FILES['myfile']['name'];
	$type=$_FILES['myfile']['name'];
	$data=file_get_contents($_FILES['myfile']['tmp_name']);
	$stmt=$dbh->prepare("insert into myblob values('',?,?,?)");
	$stmt->bindParam(1,$name);
	$stmt->bindParam(2,$type);
	$stmt->bindParam(3,$data);
	$stmt->execute();
}
?>
<form method="post" enctype="multipart/form-data">
	<input type="File" name="myfile">
	<button name="btn">Upload</button>
</form>
</body>
</html>