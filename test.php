<?php

if(isset($_POST['test'])){
	$name = $_POST['test'];
	$conx = mysqli_connect("localhost","root","123456","bitnami_pm");
	$sql = "INSERT INTO PMT_TEST (`TEXT`) VALUES '$name'";
	$res = mysqli_query($conx,$sql);

}

?>