<?php /*https://codeshare.io/QnONnq*/
defined('BASEPATH') OR exit('No direct script access allowed');

//print_r($articulos);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Artículos</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!--Axios para peticiones GET y POST -->	
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>
<style>
/*	.class
		#id
	*/
	header{
		margin-left:  5%;
		margin-right:  5%;
		width: 90%;
		border:  1px solid black;
		height:  100px;
		text-align: center;
	}
	main{
		margin-top:  2%;
		margin-left:  5%;
		margin-right:  5%;
		width: 90%;
		display: flex;
		flex-direction: column;
		background-color: lightgray;
		height: 650px;
	}
	footer{
		margin-top:  2%;
		margin-left:  1%;
		margin-right:  1%;
		width: 98%;
		background-color: darkblue;
		text-align: center;

	}
	.imagen{
		width: 40%;
		border:  1px solid gray;
		margin-top:  15px;
		margin-left:  30%;
		margin-right:  30%;
		height:  70px;
	}
	.login{
		width: 80%;
		border:  1px solid lightblue;
		margin-top:  10px;
		height:  50px;
		margin-left:  10%;
		margin-right:  10%;
		background-color: lightgray;
		text-align: center;
		padding-top: 150px;
		padding-bottom: 300px;

	}
	.inputs{

		width: 40%;
		margin-left:  30%;
		margin-right:  30%;
	}
</style>
<body>