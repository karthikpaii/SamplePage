<?php 
$sql='CREATE TABLE IF NOT EXITS user(id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50), email VARCHAR(50))";
if($conn->query($sql)==TRUE)
{
echo "Table Created Sucesfully.<br>";
}else
{
 echo "Error Creating table: ".$conn->error;
}

$name="Tow";
$email="ton@gmail.com";
$stat=$conn->prepare("INSERT INTO user (name,email) VALUES(?,?)");
$stmt=blind_param("ss",$name,$email);
if($stmt->execute())
{
echo "New Record Added.<br>";
}else
{
echo "Error".$stmt->error;
}
$stmt->close();
$stmt->close();
?>