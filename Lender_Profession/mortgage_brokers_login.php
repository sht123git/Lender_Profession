<?php
	session_start();
	unset($_SESSION['NAME']);
	// Version 1.1

	include "Lender_Profession_readData.php";

	$inputParam = array( 

		"left" => "20%",
		"top" => "50px",
		"width" => "560px",
		"height" => "200px",
		"backgroundColor" => "#ddddfe",
		"borderLine" => "5px",
		"borderColor" => "solid blue",

		"alertText" => "Input correct value.",
		"textColor" => "#000000",  
		"textLeft" => "50px",
		"textTop" => "50px", 

		"btnLeft" => "450px",
		"btnTop" => "150px",  
		"btnWidth" => "100px",
		"btnHeight" => "35px",
		"btnBackcolor" => "green",
		"btnBordercolor" => "#006600"
	);

	$inputParam1 = array(

		"left" => "20%",
		"top" => "50px",
		"width" => "560px",
		"height" => "200px",
		"backgroundColor" => "#ddddfe",
		"borderLine" => "5px",
		"borderColor" => "solid blue",

		"alertText" => "Input correct value.",
		"textColor" => "#000000",  
		"textLeft" => "50px",
		"textTop" => "50px", 

		"btnLeft1" => "300px",
		"btnLeft2" => "330px",
		"btnTop" => "150px",  
		"btnWidth" => "100px",
		"btnHeight" => "35px",
		"btnBackcolor" => "green",
		"btnBordercolor" => "#006600"
	);
			
	function customAlertWindow($inputParam) 
	{
		?>
		<div id="customModalAlert" style ="display:none; position:fixed; z-index:1; overflow:auto; left:0; top:0;
				width:100%; height:100%; padding-top:<?=$inputParam['top']?>; background-color:rgba(0,0,0,0.1);">
			<div style="background-color:<?=$inputParam['backgroundColor']?>; width:<?=$inputParam['width']?>; height:<?=$inputParam['height']?>;
				margin-left:<?=$inputParam['left']?>; margin-top:<?=$inputParam['top']?>; border:<?=$inputParam['borderLine']?> <?=$inputParam['borderColor']?>; ">
								
				<label id="CustomAlertText" style ="max-width: 500px; color:<?=$inputParam['textColor']?>; position:absolute;
				margin-left:<?=$inputParam['textLeft']?>; margin-top:<?=$inputParam['textTop']?>;" ><?=$inputParam['alertText']?></label>

				<button class="button_additional_info" id="OKBtn" name="OKBtn" onclick="OnClickOKBtn()" 
					style = "background-color:<?=$inputParam['btnBackcolor']?>; position:relative; left:<?=$inputParam['btnLeft']?>;
						top:<?=$inputParam['btnTop']?>; font-weight:bold; border-radius: 12px; border-style: solid;
						border-width: 2px; border-color: <?=$inputParam['btnBordercolor']?>; color: white;
						width:<?=$inputParam['btnWidth']?>; Height:<?=$inputParam['btnHeight']?>; padding: 5px 25px; text-align: center; 
						text-decoration: none; font-size: 16px; margin: 4px 2px; cursor: pointer;">OK</button>
			</div>
		</div>       
		<?php
	}

	function customAlertWindow1($inputParam1) 
	{
		?>
		<div id="customModalAlert1" style ="display:none; position:fixed; z-index:1; overflow:auto; left:0; top:0;
				width:100%; height:100%; padding-top:<?=$inputParam1['top']?>; background-color:rgba(0,0,0,0.1);">
			<div style="background-color:<?=$inputParam1['backgroundColor']?>; width:<?=$inputParam1['width']?>; height:<?=$inputParam1['height']?>;
				margin-left:<?=$inputParam1['left']?>; margin-top:<?=$inputParam1['top']?>; border:<?=$inputParam1['borderLine']?> <?=$inputParam1['borderColor']?>; ">
								
				<label id="CustomAlertText1" style ="max-width: 500px; color:<?=$inputParam1['textColor']?>; position:absolute;
					margin-left:<?=$inputParam1['textLeft']?>; margin-top:<?=$inputParam1['textTop']?>;" ><?=$inputParam1['alertText']?></label>

				<button class="button_additional_info" id="YesBtn" name="YesBtn" onclick="OnClickYesBtn()" 
					style = "background-color:<?=$inputParam1['btnBackcolor']?>; position:relative; left:<?=$inputParam1['btnLeft1']?>;
						top:<?=$inputParam1['btnTop']?>; font-weight:bold; border-radius: 12px; border-style: solid;
						border-width: 2px; border-color: <?=$inputParam1['btnBordercolor']?>; color: white;
						width:<?=$inputParam1['btnWidth']?>; Height:<?=$inputParam1['btnHeight']?>; padding: 5px 25px; text-align: center; 
						text-decoration: none; font-size: 16px; margin: 4px 2px; cursor: pointer;">Yes</button>

				<button class="button_additional_info" id="NoBtn" name="NoBtn" onclick="OnClickNoBtn()" 
					style = "background-color:<?=$inputParam1['btnBackcolor']?>; position:relative; left:<?=$inputParam1['btnLeft2']?>;
						top:<?=$inputParam1['btnTop']?>; font-weight:bold; border-radius: 12px; border-style: solid;
						border-width: 2px; border-color: <?=$inputParam1['btnBordercolor']?>; color: white;
						width:<?=$inputParam1['btnWidth']?>; Height:<?=$inputParam1['btnHeight']?>; padding: 5px 25px; text-align: center; 
						text-decoration: none; font-size: 16px; margin: 4px 2px; cursor: pointer;">No</button>

			</div>
		</div>       
		<?php
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"> 	
		<meta name="description" content="Broker Users Login"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		
		<meta http-equiv=”Pragma” content=”no-cache”>
		<meta http-equiv=”Expires” content=”-1″>
		<meta http-equiv=”CACHE-CONTROL” content=”NO-CACHE”>
		<link rel="stylesheet" type="text/css" href="include/style_table.css">
		
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="Expires" content="-1">
		<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  

		<style>
			@import "compass/css3";

			* { box-sizing: border-box; }

			body {
				font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
				color: black;
				font-size:12px;
				background-color:white;
			}

			.input_text_right_side2 {
				position: absolute;
				font-size: 15px;
				width: 280px;
				height: 32px;
				font-style: italic;
				background: #2c3e50;
				overflow: hidden; 
				border-radius: 2px;
				border-color: white;
				padding: 10px;
				color: white;
				cursor: pointer;
			}

			* {
				margin: 0;
				padding: 0;
				font-family: "Poppins", sans-serif;
			}

			input[name="ProfessionalsText"] {
				border: 2px #1c2e40;
				font-size: 18px;
				padding: 5px;
				height: 35px;
				width: 350px;
				background:#2c3e50;
				color:white; 
				border-radius:.25em;
			}

			input::-webkit-calendar-picker-indicator {
				opacity: 100;
			}

			input.largerCheckbox {
				width: 18px;
				height: 18px;
			}
					
			.dropButton {
				position: absolute;
				/* flex: 1; */
				background-color:orange;
				color: yellow;
				cursor: pointer;
				border-block: none;
				border-radius: .3em;	
			}

			.dropButton:hover {				
				color: green;
			}
					
			.button_additional_info {
				position:absolute;
				left:1050px;
				top:235px;
				font-size: 10px;
				font-weight: bold;
				background-color: #2c3e50; 
				border-radius: 30px; /* Curve of border corners */
				border-style: solid;
				border-width: 2px;
				border-color: #006600;
				color: white;
				width: 185px;
				Height: 50px;
				padding: 5px 25px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
			}	

			.div-1 {
				position:absolute;
				left:0px;
				top: 83px;
				background-color: #2B2B2B; 
				height: 872px;
				width: 1912px; 
				margins: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color: white;
			}
					
			form h1 {
			font-size:18px;
			text-shadow:0 1px 0 black;
			text-align:center;
			padding:40px 0;
			border-bottom:1px solid rgba(0,0,0,1);
			position:relative;
			}

			form h1:after {
				content:"";
				display:block;
				width:250px;
				height:100px;
				position:absolute;
				top:0;
				left:50px;
				pointer-events:none;
				transform:rotate(70deg);
				background:linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
			}

			.bank-logo33 {	
				position:relative;
				margin-top: 8%; 
				margin-left: 26%;
				border-color: gray;
				width: 60%;
				height:80%;

			}

			input[type=text],
			input[type=password] {
				width:85%;
				color:black;
				padding-left:8px 5px;
				background: white;
				border:1px solid #222;
				box-shadow:
				0 1px 0 rgba(255,255,255,0.1);
				border-radius:0.3em;
				margin-bottom:20px;
				margin-left: 6%;
				text-align: center;
			}

			input[type=checkbox] {
				display:inline-block;
				vertical-align:top;
				text-align: center;
			}

			.p-container {
				padding:0 20px 20px 20px; 
				margin: auto;
				
			}

			.p-container:after {
				clear:both;
				display:table;
				content:"";
			}

			.p-container span {
				display:block;
				float:left;
				color:#005296;
				padding-top:8px;
			
			}

			input[type=submit] {
				padding:5px 20px;
				margin: auto;
				border:1px solid rgba(0,0,0,0.4);
				text-shadow:0 -1px 0 rgba(74, 236, 95, 0.4);
				box-shadow:
				inset 0 1px 0 rgba(0, 0, 0, 0.3),
				inset 0 10px 10px rgba(255,255,255,0.1);
				border-radius:0.3em;
				background:#024c92;
				margin-left: 28%;   
				color:white;
				float:center;
				font-weight:bold;
				cursor:pointer;
				font-size:13px;	
			}

			input[type=submit]:hover {
				box-shadow:
				inset 0 1px 0 rgba(255,255,255,0.3),
				inset 0 -10px 10px rgba(255,255,255,0.1);
				text-align: center;
			}

			.div-title-left {
				position:relative;
				top: 5px;
				height: 20px; 
				width: 400PX;
				padding: 15px;
				font-size: 15px;
				text-align: center;
				margin-left: 4%;
				font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;;
				border-width: 1px;
				border-color: gray
			}

			.div-title-left1 {
				position:relative;
				top: 5px;
				height: 20px; 
				width: 400PX;
				padding: 15px;
				font-size: 15px;
				text-align: center;
				margin-left: 4%;
				font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;;
				border-width: 1px;
				border-color: gray;
			}

			.div-buttons-left {
				position:absolute;
				top: 335px;
				left: 5px;
				height: 10px;
				width: 300PX;
				padding: 15px;
				font-size: 15px;
				text-align: center;
				font-family: "Times New Roman";
				border-width: 5px;
				border-color: gray;
			}

			.Cust_user_Broker_Name2 {
				position:relative;
				margin-left:150px; 
				margin-top:100px;
				background-color: black;
				height: 65px; 
				width: 450px;
				border-radius: 10px;
				border-style: solid;
				border-width: 0px;
				border-color: green;
				text-align: center;
				color:white;
				font-weight:bold;
				font-size:24px;		
			} 

			.TERMS {
				position:relative;
				font-family: "Times New Roman";
				color: black;
				font-size:10px;
				margin-left: 13%;
			
			}

			.div-title {
				position:relative;
				top: 5px;
				height: 50px;
				width: 100%;
				padding: 15px;
				font-size: 35px;
				text-align: center;
				font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
			}

			.form-title {
				position:absolute;
				top: 10px;
				left: 120px;
				height: 50px;
				width: 300px;
				padding: 15px;
				padding-top: 5px;
				margin-top: 2%;
				color:white;
				font-weight:bold;
				font-size: 16px;
				background:orange;
				text-align: center;
				font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
			}

			.left-side {
				position:absolute;
				left:0px;
				top: 0px;
				background-color: white;
				height: 100%;
				width: 30%;
				margins: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color: yellow;
			}

			.right-side {
				position:absolute;
				left:30%;
				top: 0px;
				background-color: #262626;
				height: 100%;
				width: 70%;
				margins: 0,0;
				float: center;
				border-style: solid;
				border-width: 2px;
				border-color: yellow;
			}
			
			.right-side1 {
				position:absolute;
				left:30%;
				top: 0px;
				background-color: #262626;
				height: 100%;
				width: 70%;
				margins: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color: yellow;
			}
			
			.signup-button{
				position:relative;
				padding:5px 20px;
				margin: auto;
				border:1px solid rgba(0,0,0,0.4);
				text-shadow:0 -1px 0 rgba(74, 236, 95, 0.4);
				box-shadow:
				inset 0 1px 0 rgba(0, 0, 0, 0.3),
				inset 0 10px 10px rgba(255,255,255,0.1);
				border-radius:0.3em;
				background:#008000;
				margin-left: 27%;
				color:white;
				float:center;
				font-weight:bold;
				cursor:pointer;
				font-size:13px;		
			}
			
			.signup-button2{
				position:relative;
				padding:5px 20px;
				margin: auto;
				border:1px solid rgba(0,0,0,0.4);
				text-shadow:0 -1px 0 rgba(74, 236, 95, 0.4);
				box-shadow:
				inset 0 1px 0 rgba(0, 0, 0, 0.3),
				inset 0 10px 10px rgba(255,255,255,0.1);
				border-radius:0.3em;
				background:#008000;
				margin-left: 5%;
				color:white;
				float:center;
				font-weight:bold;
				cursor:pointer;
				font-size:13px;
				top: 1px;		
			}
			
			.no-firm-found{
				position:relative;
				padding:5px 20px;		
				border:0px solid rgba(0,0,0,0.4);
				text-shadow:0 0px 0 rgba(74, 236, 95, 0.4);
				box-shadow:
				inset 0 0px 0 rgba(0, 0, 0, 0.3),
				inset 0 0px 0px rgba(255,255,255,0.1);
				border-radius:0.3em;
				margin-left: 7%;
				color:darkgrey;
				font-weight:bold;
				cursor:pointer;
				font-size:13px;
				margin-top: 1%;
				top: 25x;
			}

			.intro_video{
				position: absolute;
				color:black;
				font-weight:bold;
				cursor:pointer;
				font-size:18px;
				margin-top: 120px;
				top: 725px;
				margin-left:50px;
				background:white; 
			}	
			
			.Cust_user2 {
				position:absolute;
				margin-left:600px;
				top:200px;
				background-color: black;
				height: 340px;
				width: 700px;
				border-radius: 10px;
				border-style: solid; 
				border-width: 15px;
				border-color: red;
				text-align: center;
			} 	
			
			.div-6 {
				position:absolute;
				left:500px; 
				top:130px;
				background-color: none;
				height: 70%;
				width: 40%;
				border-style: solid;
				border-width: 0;
				border-color: none;
			}

			.div-7 {
				position:absolute;
				margin-left:1%;  
				top:460px;
				background-color: white;
				height: 15%;
				width: 25%;
				border-radius: 10px;
				border-style: solid;
				border-width: 5px;
				border-color: #024c92;
				text-align: center;		
			}		
				
			.div-program_name {
				position:absolute;
				left:2px; 
				top: 320px;
				background-color: white;  
				height: 500px; 
				width: 565px; 
				margins: 0,0; 
				border-style: solid;
				border-width: 2px;
				border-color:  orange;
			}		
				
			.Cust_user {
				position:absolute;
				margin-left:36%;
				top:40%;
				background-color: white;
				height: 240px;
				width: 400px;
				border-radius: 10px;
				border-style: solid;
				border-width: 5px;
				border-color: #024c92;
				text-align: center;
			} 		
				
			.marque {
				position:relative;
				margin-left:35%;
				top: 120px;
				background-color: black;
				height: 30px;
				width: 400px;
				border-radius: 10px;
				border-style: solid;
				border-width: 3px;
				border-color: green;
				text-align: center;
				color:white;
				font-weight:bold;
				font-size:15px;		
			}   
				
			.Cust_user_logo {
				position:relative;
				margin-left:10px;
				top:20px;
				background-color: white;
				height: 100px;
				width: 140px;
				border-radius: 10px;
				border-style: solid;
				border-width: 0px;
				border-color: green;
				text-align: center;		
			}   
				
			.Cust_user_Company_Name {
				position:relative;
				left:160px;
				top:-80px;
				background-color: white;
				height: 40px;
				width: 220px;
				border-radius: 10px;
				border-style: solid;
				border-width: 0px;
				border-color: black;
				text-align: center;
				color:black;
				font-weight:bold;
				font-size:16px;		
			}  
				
			.Cust_user_Company_Name_License {
				position:relative;
				margin-left:160px;;
				top:-68px;
				background-color: white;
				height: 20px;
				width: 220px;
				border-radius: 10px;
				border-style: solid;
				border-width: 1px;
				border-color: green;
				text-align: center;
				color:gray;
				font-weight:bold;
				font-size:14px;		
			} 
				
			.Cust_user_Broker_Name {
				position:relative;
				margin-left:160px;
				top:-52px; 
				background-color: white;
				height: 35px;
				width: 220px;
				border-radius: 10px;
				border-style: solid;
				border-width: 0px;
				border-color: green;
				text-align: center;
				color:black;
				font-weight:bold;
				font-size:18px;		
			} 
				
			.Cust_user_Mesg {
				position:relative;
				margin-left:60px;
				top:-35px;
				background-color: white;
				height: 25px;
				width: 320px;		
				border-color: green;
				text-align: center;
				color:gray;
				font-weight:bold;
				font-size:13px;		
			} 	
				
			.Cust_user_Broker_title {
				position:relative;
				margin-left:160px;
				top:-57px;
				background-color: white;
				height: 20px;
				width: 220px;
				border-radius: 10px;
				border-style: solid;
				border-width: 1px;
				border-color: green;
				text-align: center;
				color:black;
				font-weight:bold;
				font-size:14px;		
			}	
				
			.Cust_user_Phone {
				position:relative;
				margin-left:160px;
				top:-52px;
				background-color: white;
				height: 20px;
				width: 220px;
				border-radius: 10px;
				border-style: solid;
				border-width: 0px;
				border-color: green;
				text-align: center;
				color:red;
				font-weight:bold;
				font-size:18px;		
			} 
			
			.button_only_demo {
				position:relative;
				float: right;
				font-size: 10px;
				font-weight: bold;
				background-color: #B6361B;  /* dark red */
				border-radius: 0px; /* Curve of border corners */
				border-style: solid;
				border-width: 0px;
				border-color: #006600;
				color: white;
				width: 30%;
				height: 10%;
				padding: 5px 25px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				cursor: pointer;
			}	
			
			.row {
				display: flex;
				justify-content: flex-start;
				align-items: center;
				font-size: 18px;
				flex: 1;
				padding: 0 .5em;	  
				font-size:14px;	 
				cursor: pointer;
				margin-left: 6%;
				width: 95%;	
			}

			.row2 {
				width: 50px !important;
				display: flex;
				justify-content: flex-start;
				align-items: center;
				font-size: 18px;
				flex: 1;
				padding: 0 .5em;	
				font-size:18px;
				background: #34495e;
				color:white;
				cursor: pointer;
				margin-left: 6%;
				width: 75%;		
			}
			
			#row2 option{
				width:50px;   
			}
			
			.row2-select {
				-moz-appearance:none; /* Firefox */
				-webkit-appearance:none; /* Safari and Chrome */
				appearance:none;
			}

			#dropdown_data {
				display: none;		
			}

			select2, input {
				width: 180px;
				margin: 10px;
				font-size:16px;
					top: 14px;
				right: 10px
				background-color: red;
			}
			
			select2 {  
				-webkit-appearance: none;
				-moz-appearance: none;
				appearance: none;   
				flex: 1;
				padding: 0 .5em;
				color: black;
				cursor: pointer;
				margin-left: 50px;
				width: 250px;   
			}	
			
			/* Arrow */
			.select2::after {
				content: '\25BC';
				position: absolute;
				top: 0;
				right: 0;
				left 20px;
				padding: 0 1em;
				background: #34495e;
				cursor: pointer; 
				pointer-events: none;
				-webkit-transition: .25s all ease;
				-o-transition: .25s all ease;
				transition: .25s all ease;
				margin-left: 250px;	     
			}
			/* Transition */
			.select:hover::after {
				color: #f39c12;
			}
			
			.button_Login {
				position:absolute;
				left:280px;
				top:180px;
				font-size: 10px;
				font-weight: bold;
				background-color: #2c3e50; 
				border-radius: 30px; /* Curve of border corners */
				border-style: solid;
				border-width: 2px;
				border-color: #006600;
				color: white;
				width: 185px;
				Height: 50px;
				padding: 5px 25px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
			}
			
			.button {
				position:absolute;
				left:280px;
				top:240px;
				font-size: 10px;
				font-weight: bold;
				background-color: #2c3e50; 
				border-radius: 30px; /* Curve of border corners */
				border-style: solid;
				border-width: 2px;
				border-color: #006600;
				color: white;
				width: 185px;
				Height: 50px;
				padding: 5px 25px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
			}
			
			/*the container must be positioned relative:*/
			.custom-select {
				position: relative;
				font-family: Arial;
			}

			.select-selected {
				background-color: DodgerBlue;
			}

			/*style the arrow inside the select element:*/
			.select-selected:after {
				position: absolute;
				content: "";
				top: 14px;
				right: 10px;
				width: 0;
				height: 0;		
				border: 6px solid transparent;
				border-color: #fff transparent transparent transparent;
			}

			/*point the arrow upwards when the select box is open (active):*/
			.select-selected.select-arrow-active:after {
				border-color: transparent transparent #fff transparent;
				top: 7px;	
			}

			/*style the items (options), including the selected item:*/
			.select-items div,.select-selected {
				color: #ffffff;
				padding: 8px 16px;
				border: 1px solid transparent;
				border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
				cursor: pointer;
				user-select: none;	
			}

			/*style items (options):*/
			.select-items {
				position: absolute;
				background-color: DodgerBlue;
				top: 100%;
				left: 0;
				right: 0;
				z-index: 99;	
			}

			/*hide the items when the select box is closed:*/
			.select-hide {
				display: none;
			}

			.select-items div:hover, .same-as-selected {
				background-color: rgba(0, 0, 0, 0.1);	
			}


			select {
				-webkit-appearance: none;
				-moz-appearance: none;
				-ms-appearance: none;
				appearance: none;
				outline: 0;
				box-shadow: none;
				border: 0 !important;
				background: #2c3e50;
				background-image: none;
			}
						
			select::-ms-expand {
				display: none;
			}
						
			.select {
				position:absolute;			
				display: flex;
				width: 18em;
				height: 2em;
				line-height: 3;
				background: #2c3e50;
				overflow: hidden;
				border-radius: .25em;			
			}

			select {  
				flex: 1;
				padding: 0 .5em;
				color: #fff;
				cursor: pointer;
				margin: 6px 8px;
			}
				
			.select::after {
				content: '\25BC';
				position: absolute;
				top: 0;
				right: 0;
				padding: 0 1em;
				background: #34495e;
				cursor: pointer;
				pointer-events: none;
				-webkit-transition: .25s all ease;
				-o-transition: .25s all ease;
				transition: .25s all ease;
				color: yellow;
			}
				
			.select:hover::after {
				color: #f39c12;
			}			
					
			.Input_body {
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
				height: 100vh;
				background: #f39c12;
			}

			h1 {
				margin: 0 0 0.25em;
			}

			select {
				-webkit-appearance: none;
				-moz-appearance: none;
				-ms-appearance: none;
				appearance: none;
				outline: 0;
				box-shadow: none;
				border: 0 !important;
				background: #2c3e50;
				background-image: none;
			}

			select::-ms-expand {
				display: none;
			}

			.select {
				position:absolute;		
				display: flex;
				width: 18em;
				height: 2em;
				line-height: 3;
				background: #2c3e50;
				overflow: hidden;
				border-radius: .25em;		
			}

			select {  
				flex: 1;
				padding: 0 .5em;
				color: #fff;
				cursor: pointer;
				margin: 6px 8px;
			}

			.select::after {
				content: '\25BC';
				position: absolute;
				top: 0;
				right: 0;
				padding: 0 1em;
				background: #34495e;
				cursor: pointer;
				pointer-events: none;
				-webkit-transition: .25s all ease;
				-o-transition: .25s all ease;
				transition: .25s all ease;
			}

			.select:hover::after {
				color: #f39c12;
			}
			
			.select2 {
				position:absolute;		
				display: flex;
				width: 16em;
				height: 2em;
				line-height: 3;
				background: #2c3e50;
				overflow: hidden;
				border-radius: .25em;		
			}
			
			select {  
				flex: 1;
				padding: 0 .5em;
				color: #fff;
				cursor: pointer;
				margin: 6px 8px;
			}

			.select2::after {
				content: '\25BC';
				position: absolute;
				top: 0;
				right: 0;
				padding: 0 1em;
				background: #34495e;
				cursor: pointer;
				pointer-events: none;
				-webkit-transition: .25s all ease;
				-o-transition: .25s all ease;
				transition: .25s all ease;
			}

			.select2:hover::after {
				color: #f39c12;
			}
			
			.select-soft{
				position:absolute;		
				display: flex;
				width: 12em;
				height: 2em;
				line-height: 3;
				background: #2c3e50;
				overflow: hidden;
				border-radius: .25em;		
			}

			.select-soft::after {
				content: '\25BC';
				position: absolute;
				top: 0;
				right: 0;
				padding: 0 1em;
				background: #34495e;
				cursor: pointer;
				pointer-events: none;
				-webkit-transition: .25s all ease;
				-o-transition: .25s all ease;
				transition: .25s all ease;
			}
			
			.select-soft:hover::after {
				color: #f39c12;
			}
			
			.options_text {
				position:absolute;
				font-size: 15px;
				font-weight: bold;
				color: black;
				margin-left: 20px;
				margin-top: 4px;
			}	

			.input_text_right_side {
				position: absolute;
				font-size: 15px;
				width: 280px;
				height: 32px;
				font-style: italic;
				background: #2c3e50;
				overflow: hidden; 
				border-radius: 2px;
				border-color: white;
				padding: 10px;
				color: white;
				cursor: pointer;
			}		
					
			* {
				margin: 0;
				padding: 0;
				font-family: "Poppins", sans-serif;
			}			
					
			.input_textArea_right_side {
				position: absolute;
				font-size: 15px;
				width: 150px;
				height: 32px;
				font-style: italic;
				background: #2c3e50;
				overflow: hidden; 
				border-radius: 2px;
				border-color: white;
				padding: 10px;
				color: white;			
			}

			.div-1-left {
				position:absolute;
				left:1px;
				top: 75px;
				background-color: white;
				height: 800px;
				width: 575px;
				margin: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color: yellow;
			}

			select {                 /* this shuld be the css for the select your cateogry drop down box */
				-webkit-appearance: none;
				-moz-appearance: none;
				-ms-appearance: none;
				appearance: none;
				outline: 0;
				box-shadow: none;
				border: 0 !important;
				background: orange;
				background-image: none;
			}
				
			select::-ms-expand {
				display: none;
			}

			.select {
				position:absolute;		
				display: flex;
				width: 18em;
				height: 3em;
				line-height: 3;
				background: orange;
				overflow: hidden;
				border-radius: .25em;		
			}

			select {  
				flex: 1;
				padding: 0 .5em;
				color: black;
				cursor: pointer;
				margin: 6px 8px;
			}

			.select::after {
				content: '\25BC';
				position: absolute;
				top: 0;
				right: 0;
				padding: 0 1em;
				background: orange;
				cursor: pointer;
				pointer-events: none;
				-webkit-transition: .25s all ease;
				-o-transition: .25s all ease;
				transition: .25s all ease;
			}

			.select:hover::after {
				color: #f39c12;
			}
			
			.select2 {
				position:absolute;		
				display: flex;
				width: 16em;
				height: 2em;
				line-height: 3;
				background: #2c3e50;
				overflow: hidden;
				border-radius: .25em;		
			}
			
			select {  
				flex: 1;
				padding: 0 .5em;
				color: #fff;
				cursor: pointer;
				margin: 6px 8px;
			}

			.select2::after {
				content: '\25BC';
				position: absolute;
				top: 0;
				right: 0;
				padding: 0 1em;
				background: #34495e;
				cursor: pointer;
				pointer-events: none;
				-webkit-transition: .25s all ease;
				-o-transition: .25s all ease;
				transition: .25s all ease;
			}

			.select2:hover::after {
				color: #f39c12;
			}
			
			.select-soft{
				position:absolute;		
				display: flex;
				width: 12em;
				height: 2em;
				line-height: 3;
				background: #2c3e50;
				overflow: hidden;
				border-radius: .25em;		
			}

			.select-soft::after {
				content: '\25BC';
				position: absolute;
				top: 0;
				right: 0;
				padding: 0 1em;
				background: #34495e;
				cursor: pointer;
				pointer-events: none;
				-webkit-transition: .25s all ease;
				-o-transition: .25s all ease;
				transition: .25s all ease;
			}
			
			.select-soft:hover::after {
				color: #f39c12;
			}
		</style>
	
	</head>

	<body>
		<a style="display: none;" id="lender_link" data-link="<?= $LenderLink ?>"></a>
		<a style="display: none;" id="program_link" data-link="<?= $ProgramLink ?>"></a>
		<a style="display: none;" id="free" data-data="<?= $Free ?>"></a>

		<script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>

		<?php
			$Current_domain=$_SERVER['HTTP_HOST'];
			$Current_Page_Address= $_SERVER['REQUEST_URI'];
			$Current_Page_Address=$Current_domain.$Current_Page_Address;
			$_SESSION['LOGIN_PAGE']=$_SERVER['REQUEST_URI'];
			//echo $_SESSION['LOGIN_PAGE'];
			//exit ();

			$Error_string = "error=Invalid_User_Name_OR_Password";
				
			$Error_string2 = "error=Invalid_User_Name";

			$Error_string3 = "error=Invalid_Password";

			$Error_string4 = "error=StatementFailed";

			$Error_string5 = "error=No_active_session";


			$Final_Error=strpos($Current_Page_Address, $Error_string2);


			//echo "Error string:".$Error_string2;
			//echo ">Current Address:".$Current_Page_Address;
			//echo ">Current Error String:".$Final_Error;
			
			//exit (); 
			
			// Test if string contains ?FOR which indicates that the login screen has to be customized 
			if(strpos($Current_Page_Address, $Error_string) !== false)
			{

				$Current_Page_Address= $_SERVER['REQUEST_URI'];  
				$Len_Cur=strlen($Current_Page_Address);

				$Len_Error_string=strlen($Error_string);

				$start_pos=$Len_Cur-$Len_Error_string-1;

				//echo "current Page:".$Current_Page_Address."<br>";
				//echo ">lENGHT OF CURRENT ADDRESS:".$Len_Cur."<br>";
				//echo ">Start pos:".$start_pos."<br>";

				//$Len_Error_string=0-$Len_Error_string;

				//echo ">to cut:".$Len_Error_string."<br>";



				$back_URL=substr($Current_Page_Address, 0, $start_pos);




				//echo "Back url:".$back_URL."<br>";

				//echo "Back url:".$back_URL;
				//exit ();
				//$Current_domain=$_SERVER['HTTP_HOST'];

				//echo $Current_Page_Address;

				//echo "Found:".$Error_string ;

				//exit;

				//echo "Roiginal URL".$Original_URL;
				//exit;
				// $back="location: ../".$_SESSION["original_url"]."?error=InvalidEmail";
				// $back2 =$_SESSION["original_url"];



				//$back3="http://www.buycommercialproperty.ca/mortgage_brokers_login.php";
				//echo $back3;
				//header("Location: $Original_URL");
		
        
				?>

				<div class="Cust_user2"> 		
				
					<div class="Cust_user_Broker_Name2"> You have entered an invalid user or invalid password. Prease try again.</div>
						
					<form>
						<input type="button" class="button" onclick="window.location.href = '<?echo $back_URL?>';" value="GO BACK"/>
					</form>

				</div>

				<?php
					// header($back);
					exit ();
			}
				?>

		<?php		
			
			if(strpos($Current_Page_Address, $Error_string2) !== false)
			{
				//exit ();  
				$Current_Page_Address= $_SERVER['REQUEST_URI'];  
				$Len_Cur=strlen($Current_Page_Address);

				$Len_Error_string=strlen($Error_string2);
				

				$start_pos=$Len_Cur-$Len_Error_string-1;
				
				//echo "current Page:".$Current_Page_Address."<br>";
				//echo ">lENGHT OF CURRENT ADDRESS:".$Len_Cur."<br>";
				//echo ">Start pos:".$start_pos."<br>";
				
				//$Len_Error_string=0-$Len_Error_string;
				
				//echo ">to cut:".$Len_Error_string."<br>";
				$back_URL=substr($Current_Page_Address, 0, $start_pos);

				//echo "Back url:".$back_URL."<br>";
				//exit ();  
				//$Current_domain=$_SERVER['HTTP_HOST'];

				//echo $Current_Page_Address;

				//echo "Found:".$Error_string ;

				//exit;

				//echo "Roiginal URL".$Original_URL;
				//exit;
				// $back="location: ../".$_SESSION["original_url"]."?error=InvalidEmail";
				// $back2 =$_SESSION["original_url"];

				//$back3="http://www.buycommercialproperty.ca/mortgage_brokers_login.php";
				//echo $back3;
				//header("Location: $Original_URL");		
        
				?>

				<div class="Cust_user2"> 		
					
					<div class="Cust_user_Broker_Name2"> You have entered an invalid user  Prease try again.</div>
				
					<form>
						<input type="button" class="button" onclick="window.location.href = '<?echo $back_URL?>';" value="GO BACK"/>
					</form>

				</div>
			
				<?php
					// header($back);
				  	exit ();
			}
				?>

		<?php		  

			if(strpos($Current_Page_Address, $Error_string3) !== false)
			{
				//exit ();  
				$Current_Page_Address= $_SERVER['REQUEST_URI'];  
				$Len_Cur=strlen($Current_Page_Address);

				$Len_Error_string=strlen($Error_string3);


				$start_pos=$Len_Cur-$Len_Error_string-1;

				//echo "current Page:".$Current_Page_Address."<br>";
				//echo ">lENGHT OF CURRENT ADDRESS:".$Len_Cur."<br>";
				//echo ">Start pos:".$start_pos."<br>";

				//$Len_Error_string=0-$Len_Error_string;

				//echo ">to cut:".$Len_Error_string."<br>";



				$back_URL=substr($Current_Page_Address, 0, $start_pos);




				//echo "Back url:".$back_URL."<br>";
				//exit ();  
				//$Current_domain=$_SERVER['HTTP_HOST'];

				//echo $Current_Page_Address;

				//echo "Found:".$Error_string ;

				//exit;

				//echo "Roiginal URL".$Original_URL;
				//exit;
				// $back="location: ../".$_SESSION["original_url"]."?error=InvalidEmail";
				// $back2 =$_SESSION["original_url"];



				//$back3="http://www.buycommercialproperty.ca/mortgage_brokers_login.php";
				//echo $back3;
				//header("Location: $Original_URL");
		
				?>
			
				<div class="Cust_user2"> 			
					
					<div class="Cust_user_Broker_Name2"> You have entered an invalid Password! Prease try again.</div>';
						
					<form>
						<input type="button" class="button" onclick="window.location.href = '<?echo $back_URL?>';" value="GO BACK"/>
					</form>

				</div>
			
				<?php
					// header($back);
					exit ();
			}
				?>
			
		<?php	  
	  
	  		if(strpos($Current_Page_Address, $Error_string4) !== false)
			{
				//exit ();  
				$Current_Page_Address= $_SERVER['REQUEST_URI'];  
				$Len_Cur=strlen($Current_Page_Address);

				$Len_Error_string=strlen($Error_string4);


				$start_pos=$Len_Cur-$Len_Error_string-1;

				//echo "current Page:".$Current_Page_Address."<br>";
				//echo ">lENGHT OF CURRENT ADDRESS:".$Len_Cur."<br>";
				//echo ">Start pos:".$start_pos."<br>";

				//$Len_Error_string=0-$Len_Error_string;

				//echo ">to cut:".$Len_Error_string."<br>";



				$back_URL=substr($Current_Page_Address, 0, $start_pos);




				//echo "Back url:".$back_URL."<br>";
				//exit ();  
				//$Current_domain=$_SERVER['HTTP_HOST'];

				//echo $Current_Page_Address;

				//echo "Found:".$Error_string ;

				//exit;

				//echo "Roiginal URL".$Original_URL;
				//exit;
				// $back="location: ../".$_SESSION["original_url"]."?error=InvalidEmail";
				// $back2 =$_SESSION["original_url"];



				//$back3="http://www.buycommercialproperty.ca/mortgage_brokers_login.php";
				//echo $back3;
				//header("Location: $Original_URL");
		
        
				?>

				<div class="Cust_user2">		
			
					<div class="Cust_user_Broker_Name2"> Something went wrong with the Database Connection! Prease try again.</div>
			 			
					<form>
						<input type="button" class="button" onclick="window.location.href = '<?echo $back_URL?>';" value="GO BACK"/>
					</form>

			  	</div>

				<?php
		  
					// header($back);
					exit ();		   
	  		}
			  	?>
	  
		<?php

			if(strpos($Current_Page_Address, $Error_string5) !== false)
			{
				//exit ();  
				$Current_Page_Address= $_SERVER['REQUEST_URI'];  
				$Len_Cur=strlen($Current_Page_Address);

				$Len_Error_string=strlen($Error_string5);


				$start_pos=$Len_Cur-$Len_Error_string-1;

				//echo "current Page:".$Current_Page_Address."<br>";
				//echo ">lENGHT OF CURRENT ADDRESS:".$Len_Cur."<br>";
				//echo ">Start pos:".$start_pos."<br>";

				//$Len_Error_string=0-$Len_Error_string;

				//echo ">to cut:".$Len_Error_string."<br>";



				$back_URL=substr($Current_Page_Address, 0, $start_pos);




				//echo "Back url:".$back_URL."<br>";
				//exit ();  
				//$Current_domain=$_SERVER['HTTP_HOST'];

				//echo $Current_Page_Address;

				//echo "Found:".$Error_string ;

				//exit;

				//echo "Roiginal URL".$Original_URL;
				//exit;
				// $back="location: ../".$_SESSION["original_url"]."?error=InvalidEmail";
				// $back2 =$_SESSION["original_url"];



				//$back3="http://www.buycommercialproperty.ca/mortgage_brokers_login.php";
				//echo $back3;
				//header("Location: $Original_URL");
		
        
				?>

				<div class="Cust_user2"> 			
			
					<div class="Cust_user_Broker_Name2"> Invalid Login or Your session has Expired!. Please Login Again,</div>';
			 			
					<form>
						<input type="button" class="button" onclick="window.location.href = '<?echo $back_URL?>';" value="GO BACK"/>
					</form>

			  </div>

				<?php		  
					// header($back);
					exit ();		   
	  		}
				?>

		<script> 	
			function OpenVideoWindow() { 
		
				document.getElementById("videoWindow").style.display="block";
				/*document.write("cvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvb"); */ 
				/* alert('Hello\nHow are you?'); */ 
			}


			function CloseVideoWindow() { 
		
				document.getElementById("videoWindow").style.display="none";
				/*document.write("cvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvb"); */ 
				/* alert('Hello\nHow are you?'); */ 
			}
			
			function OpenFirmWindow() { 
		
				document.getElementById("firmNotHereWindow").style.display="block";
				/*document.write("cvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvb"); */ 
				/* alert('Hello\nHow are you?'); */ 
			}


			function CloseFirmWindow() { 
		
				document.getElementById("firmNotHereWindow").style.display="none";
				/*document.write("cvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvbcvb"); */ 
				/* alert('Hello\nHow are you?'); */ 
			}		
			
		</script>		
		
		<?php	  

		// ** CODE TO DERMINE IF THE PAGE NEEDS TO BE CUSTOMIZED AND TO FIND USER NAME FOR WHO TO CUSTOMIZE THE PAGE FOR **  

			$User_name="Test";

			$Current_Page_Address= $_SERVER['REQUEST_URI']; /* Returns The Current PHP File Name */
			// echo  "CURRENT PAGE ADDRESS:".$Current_Page_Address;

			$word = "?FOR";
			$mystring =  $Current_Page_Address;
	
			// Test if string contains ?FOR which indicates that the login screen has to be customized 
			if(strpos($mystring, $word) !== false){
				// echo "Yes found that";
				
				$start_num=strrpos($mystring, $word); /* find when ?FOR start */
				
				// echo "AT WHAT POSITION ?FOR STARTS:".$start_num;
				
				$start_num=$start_num+4;  /* add 4 to complete the lenght of the string that has to be cut from the begging to reamin with the user name  */
				$lenght_of_url=strlen($mystring);
				// echo "lenght of string".$lenght_of_url;  
				
				$char_to_cut=$lenght_of_url-$start_num;
				
				
				// echo "number of charcters to cut from begging of string".$char_to_cut;  
				
				$User_name=substr($mystring, $start_num, $char_to_cut);
				
				
				// echo "USER NAME".$User_name;
				
				} else{
				// echo "Not Found!";
			}
	
	 
			// ** FIND USER UNIQUE USER CODER **  	
		
		
			$stringtocheck = "/"; /* find when ?FOR start */
			$start_num2=strrpos($User_name, $stringtocheck);
			$start_num2=$start_num2+1;  /* add 1 to complete the lenght of the string that has to be cut from the begging to reamin with the Unique ID  */
			$lenght_of_url2=strlen($User_name);
			$char_to_cut2=$lenght_of_url2-$start_num2;  // echo "number of charcters to cut from begging of string"
			$UniqueID=substr($User_name, $start_num2, $char_to_cut2);
			



		//echo "USER ID".$UniqueID; 

		//exit (); 



		// ** ENF OF CODE TO DERMINE IF THE PAGE NEEDS TO BE CUSTOMIZED AND TO FIND USER NAME FOR WHO TO CUSTOMIZE THE PAGE FOR **

	
 
		
		if(empty($User_name))
		{
			//echo 'This line is printed, because the $var1 is empty.';
			$test="TESTTEST";
			
			?>
 
			<div class='right-side' style="display: block;">
			
				<div class='marque' >
					<marquee>The Professional Tool for Mortgage Brokers and Agents - Lead Generator - Over 100 Financing Programs - Find out in minutes which lender can provide the best odds of approval for your client without any personal info  </marquee>
				</div>
			
				<div class="div-title">
						
					<img src="large logo no background.png" width="600" height="50"  alt="The Mortgage Space" >	
					
				</div>					
					
				<div class="bank-logo33">
			
					<img src="Image intro screen for brokers 2 F2.png" width="82%" height="87%" alt="The Mortgage Space" >
			
				</div >				
					
			</div>	

			<div class="div-title-left" >
            	 LOGIN FOR MORTGAGE BROKERS AND AGENTS
			</div> 	

 			<div class="div-1-left" style="display: block;">				
 
				<form  name="form32" action="/mortgage_brokers_NEW_MAIN2.php" method="POST" id="login_form32">
						
					<p class ="options_text" style="position:absolute; margin-left: 240px;
						margin-top: 20px;"> USERNAME</p>				
					
					<input class="input_text_right_side" style="margin-left: 90px; width: 350px; margin-top: 30px;" type="text" name="username" id="username" value=""> 
							
					<p class ="options_text" style="position:absolute; margin-left: 240px; 
								margin-top: 90px;"> PASSWORD</p>							
								
					<input class="input_text_right_side" style="margin-left: 90px; width: 350px; margin-top: 105px;" type="password" name="password" id="password"  value="">

					<input type="hidden" name="clx" id="clx"  value="<?php print "$Current_Page_Address" ?>"> 
										
					<input type="submit"  style="margin-left: 180px; margin-top: 175px;" name="submit22" formaction="/mortgage_brokers_NEW_MAIN2.php" id="go" value="Log in"> 
				
					<p class ="options_text" style="position:absolute; margin-left: 120px;	margin-top: 20px;"> Version: 1.02  &nbsp  PATENT PENDING : 3,118,517 </p>

				</form>				
				
				<form  name="signupForm" formaction="/mortgage_broker_login_submit.php" method="POST" id="login_form_tempSignup">
			
					<div class="div-program_name" id="div-program_name" ">
				
					<p class="form-title"></p>
				
					<p class ="options_text" style="margin-left: 140px;font-size: 18px;
						font-weight: bold; color: white; margin-top: 35px;"> First Time User Register Below</p>
											
					<p class ="options_text" style="position:absolute; margin-left: 215px;
								margin-top: 75px;"> EMAIL ADDRESS</p>
					
					<input class="input_text_right_side" style="margin-left: 100px; width: 350px; margin-top: 85px;" type="text" name="email_address" id="email_address" value=""> 
					
								
					<p class ="options_text" style="position:absolute; margin-left: 225px;
					margin-top: 150px;"> YOUR NAME</p>		
								
					<input class="input_text_right_side" style="margin-left: 100px; width: 350px; margin-top: 155px;" type="text" name="broker_name" id="broker_name"  value="">
							
					<p class ="options_text" style="position:absolute; margin-left: 190px;
					margin-top: 220px;"> SELECT YOUR FIRM</p>			
				
					<div class="row" style="margin-left: 100px; width: 350px; margin-top: 185px;" >
								
						<select  class="row2" name="broker_firm" style="margin-left: 25px; width: 350px; margin-top: 85px;" id="broker_firm"  value=""> 
							<option value="" disabled selected hidden>COMPANY NAME</option>
							<?php
								$sql = "SELECT * FROM `BrokerAgencies` ORDER BY `BrokerageName` ASC;";
								$result = mysqli_query($conn, $sql); 
								$resultCheck = mysqli_num_rows($result);
					
								while($rows = mysqli_fetch_assoc($result)):      
							
							?>
									<option value="<?echo $rows['BrokerageID']?>"><?echo $rows['BrokerageName']?></option>
										
							<?php endwhile; //End loop notation ?>
						
						</select>
			
					</div>				
					
					<!-- </p> -->
						
					<button class="signup-button2" type="submit"  style="width: 150px; margin-left: 105px; margin-top: 65px;" name="submitSignup" formaction="/mortgage_broker_login_submit.php" id="go" >Get Access* </button> 
					
					<button class="no-firm-found" type="button"  name="FirmNotFound"  style="width: 200px; margin-left: 35px; margin-top: 65px;" id="openFirmNotFound" onclick="OpenFirmWindow()" >Your firm is not here? </button>
				
				</form>
			
				<button class="intro_video" type="button"  name="openVideoWindow" style="width: 350px; margin-left: 90px; margin-top: 15px;" id="openVideoWindow" onclick="OpenVideoWindow()"><u>VIDEO DEMO:</u> How The Mortgage Space.com can help you </button>
			
				<P class="TERMS" style="width: 360px; margin-left: 260px; margin-top: 605px;"> 
					<a href="/Terms and Conditions.pdf" style="color: green;"<B>TERMS</B></a>
				</P>
		 
			</div >

			<?php
		}else 
		{
	
			$_SESSION["original_url"]=$_SERVER['REQUEST_URI'];


			// Variables
			$professions = [];
			$company_names = [];	
	
			$user_name = "testclx";
			$pass_word = "Clxclx&3232";
			//$database = "awaketest";
			//$server = "mysql.treesoftware.net";			

			// Create connection
			//$conn = mysqli_connect($servername, $username, $password, $dbname);

			// Check connection
			//if ($conn->connect_error) {
			//  die("Connection failed: " . $conn->connect_error);
			//}			
				

			$sql = "SELECT Profession_ID, Profession_description FROM Professions ORDER BY Profession_description";
				

			$result = $conn->query($sql);    
	 
	 
			if ($result->num_rows > 0) {
			// output data of each row			
				while($row = $result->fetch_assoc()) {
					array_push($professions, $row);				
				}
			} else {
				echo "Professions are 0 results";
			}
			
			$sql = "SELECT Company_Names_ID, Profession_description, Company_Name FROM  professionals_database ORDER BY Company_Name";
			$result = $conn->query($sql);
 
			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					array_push($company_names, $row);
					// print_r($company_names);
				}
			} else {
				echo "Company Names are 0 results";
			}
		
			?>	
			
			<div class="div-title-left1" >

            	 <B>LOGIN FOR REALTORS, ARCHITECTS AND OTHER PROFESSIONALS </b>
			 
			</div> 	
		
			<div class='right-side1' style="display: block;">	
		
				<div class='marque' >
					<marquee>The Professional Tool for Mortgages - Over 100 Lenders - Find out all your financing and mortgage options in few minutes without giving any personal info</marquee>
				</div>		
		
				<div class="div-title">			
				
					<img src="http://www.treesoftware.net/large logo no background.png" width="600" height="50"  alt="The Mortgage Space" >	
		
				</div> 			
			
				<div class="bank-logo33">			
	
					<img src="http://www.treesoftware.net/Image intro screen for brokers 2 F2.png" width="82%" height="87%"  alt="The Mortgage Space" >
	
				</div >
	
			 
				<?php /* GET BROKER ID FROM REGISTRED NAME  */
			 
					$sql = "SELECT * from Users WHERE User_Agent_ID='$UniqueID';";
					//echo $UniqueID;
					// exit (); 

					$result = mysqli_query($conn, $sql);  
					
					
					if (mysqli_num_rows($result) != 0)
					{
						
						$row = mysqli_fetch_assoc($result);
						
						$brokerid= $row["UserBrokerageId"];
						
						$Agent_full_Name = $row["User_Combined_Name"];				 
				 
						/* GET BROKER FULL NAME - LICENSE NUMBER - PHONE NUMBER - ADDRESS - FROM BROKERS TABLE - LOGO  */	 
				 				  
						$sql = "SELECT * from  BrokerAgencies WHERE BrokerageID='$brokerid';";
						$result = mysqli_query($conn, $sql);
						 if (mysqli_num_rows($result) != 0)
						 {
				 
							$row = mysqli_fetch_assoc($result);

							$brokerName= $row["BrokerageName"];
							$brokerLicense= $row["Broker_License"];
							$brokerPhone= $row["BrokerPhoneNumber"];
							$brokerAddress1= $row["BrokerAddress1"];
							$brokerAddress2= $row["BrokerAddress2"];
							$brokerCity= $row["BrokerCity"]; 
							$brokerLogo= $row["BrokerLogo"];
							$test="http://buycommercialproperty.ca/Logos/BrokerLogos/".$brokerLogo;
							$brokerRegName= $row["BrokerContactName"];
							$brokerRegEmail= $row["BrokerEmail"];
							
							
							$_SESSION["broker_email_address"]=$brokerRegEmail;
							$_SESSION["email_address"]=$brokerRegEmail; 
							$_SESSION["broker_name"]=$brokerRegName;
							
							$_SESSION["brokerage_name"]=$brokerName;
							
							$_SESSION["Broker_ID"]=$brokerid;
							$_SESSION["UniqueID"]=$UniqueID;
							$_SESSION["BrokerageID"]=$brokerid;
							
							//echo   $brokerRegEmail;
							//exit (); 
				   
						}
				  
							// echo " **********************************************************************************************************************************************************************************************************************************************************************************RECORD FOUND"; 
							// echo " ********************************************************************************************************************************************************************************************************************************************************************************broker id:".$brokerid."/".$brokerName ."/".$brokerLicense."/".$brokerPhone."/".$brokerAddress1."/".$brokerAddress2."/".$brokerCity."/".$brokerLogo;
			
					}		
			
				?>
			
				<!-- <! THIS IS THE DIV THAT CREATE A BOX TO CUSTOMIZE THE LOGIN SCREEN AND WHERE THE BROKER NAME IS DISPLAYED >  -->
				<div class="Cust_user">		
			
					<div class="Cust_user_logo"> 
			
						<?php echo '<img src="'.$test.'"'.'width="140" height="100">';  ?>
			
					</div> 
			
					<div class="Cust_user_Company_Name"> 
						<?php echo $brokerName; ?>
					</div>
					
					<div class="Cust_user_Company_Name_License"> 
						Lic.# <?php echo $brokerLicense; ?> 
					</div>
					
					<div class="Cust_user_Broker_Name"> 
						<?php echo  $Agent_full_Name; ?>   
					</div>
					
					<div class="Cust_user_Broker_title"> 
						Agent
					</div>			
			
					<div class="Cust_user_Phone">  
						<?php echo $brokerPhone; ?> 
					</div> 

					<div class="Cust_user_Mesg"> 
						<?php echo "To edit the above information please log in"; ?>  
					</div>

				</div>			
			
			</div >	
		
			<div class="div-1-left" style="display: block;">		

				<form  name="form32" action="/mortgage_brokers_NEW_MAIN2.php" method="POST" id="SubmitForm" enctype="multipart/form-data">
				
					<p class ="options_text" style="position:absolute; margin-left: 230px;
								margin-top: 15px;"> USERNAME</p>
					
					
					<input class="input_text_right_side" style="margin-left: 100px; width: 350px; margin-top: 30px;" type="text" name="username" id="username" value=""> 
				
				
					<p class ="options_text" style="position:absolute; margin-left: 230px;
								margin-top: 90px;"> PASSWORD</p>
								
								
					<input class="input_text_right_side" style="margin-left: 100px; width: 350px; margin-top: 105px;" type="password" name="password" id="password"  value="">
							
					
					<input type="hidden" name="clx" id="clx"  value="<?php print "$Current_Page_Address" ?>"> 
				
							
					<input type="submit"  style="margin-left: 180px; margin-top: 165px;" name="submit22" formaction="/mortgage_brokers_NEW_MAIN2.php" id="go" value="Log in"> 
			
				
					<p class ="options_text" style="position:absolute; margin-left: 120px;	margin-top: 30px;"> Version: 1.02  &nbsp  PATENT PENDING : 3,118,517 </p>

				</form>			 
			
        		<form  name="signupForm" formaction="/mortgage_broker_login_submit_for_professionals.php" method = "POST" id="SubmitForm" enctype="multipart/form-data">
						
					<div class="div-program_name" id="div-program_name">
			
						<p class="form-title"></p>
						
						<p class ="options_text" style="margin-left: 140px;font-size: 18px;
							font-weight: bold; color: white; margin-top: 35px;"> First Time User Register Below</p>
														
						<p class ="options_text" style="position:absolute; margin-left: 215px;
									margin-top: 75px;"> EMAIL ADDRESS</p>
						
						<input class="input_text_right_side" style="margin-left: 100px; width: 350px; margin-top: 85px;" type="text" name="email_address" id="email_address" value=""> 
						
									
						<p class ="options_text" style="position:absolute; margin-left: 225px;
							margin-top: 150px;"> YOUR NAME</p>		
									
						<input class="input_text_right_side" style="margin-left: 100px; width: 350px; margin-top: 155px;" type="text" name="broker_name" id="broker_name"  value="">
									
						<p class ="options_text" style="position:absolute; margin-left: 185px;
							margin-top: 220px;"> SELECT YOUR CATEGORY</p>	
					
						<div class="select" style ="left:105px; top:245px; width: 330px;"> 												
							
							<select name="ProfessionSelect" id="ProfessionSelect" onchange="ProfessionChange(this.value)">
								<option selected disabled></option>
							<?php
								$Professions = readTable($conn, "Professions", "Profession_description", "");
								$num = count($Professions);
								for($i=0; $i<$num; $i++)
								{
							?>
									<option value="<?=$Professions[$i]?>" ><?=$Professions[$i]?></option>
							<?php
								}						
							?>					
							</select> 

						</div>
				
						<p class ="options_text" style="position:absolute; margin-left: 95px;
								margin-top: 290px;"> ENTER OR SELECT YOUR COMPANY NAME:</p>	
															
						<div style ="left:75px; top:300px; width: 500px;">  
							<select name="ProfessionalsSelect" id="ProfessionalsSelect" size="10" onchange="ProfessionalsChange(this.value)"
								style="display:none; width:450px;"> 
											
							</select>
						</div>		

						<input class="input_text_right_side2" style="width: 400px; margin-left: 70px; margin-top: 305px;" type="text"
							id="ProfessionalsName" name="ProfessionalsName"	autocomplete="off" oninput="ProfessionalsNameChange(this.value)"> </input>
						
						<button class="no-firm-found" type="button" style="width: 200px; margin-left: 35px; margin-top: 365px;" name="FirmNotFound" id="openFirmNotFound" onclick="OpenFirmWindow()" >Your firm is not here? </button>	
				
						<button class="signup-button2" type="submit"  style="width: 150px; margin-left: 105px; margin-top: 365px;" name="submitSignup" formaction="/mortgage_broker_login_submit_for_professionals.php" id="go" >Get Access* </button> 
											
					</div>			
		
				</form>
			  
			<input class="dropButton" style="width:50px; height:33px;margin-left:442px; margin-top:627px; font-size:20px;"
				type="button" id="DropButton" name="DropButton" value ="&#9660" onclick="DropButtonClick()"> 
								
			<?php
				customAlertWindow($inputParam);
				customAlertWindow1($inputParam1);
			?> 
	
			<?php		
		}
			?>		
				 
		<button class="intro_video" type="button"  name="openVideoWindow" style="width: 350px; margin-left: 90px; margin-top: 15px;" id="openVideoWindow" onclick="OpenVideoWindow()"><u>VIDEO DEMO:</u> How The Mortgage Space.com can help you </button>
		
			<P class="TERMS" style="width: 360px; margin-left: 260px; margin-top: 605px;"> 
				<a href="/Terms and Conditions.pdf" style="color: green;"<B>TERMS</B></a>
			</P>
				
		<div class="div-6" id="videoWindow" style="display:none;">  
			<button class="button_only_demo" onclick="CloseVideoWindow()" 
				type="submit"  name="submit"  id="go" >X</button>

			<video controls width="800">

				<source src="VIDEO Initial Presentation Video.mp4"
						type="video/webm">

				<source src="/VIDEO Initial Presentation Video.mp4"
						type="video/mp4">
				Sorry, your browser doesn't support embedded videos.
			</video>
		 	
		</div>  

			
		<div class="div-7" id="firmNotHereWindow" style="display:none;">  
			<button class="button_only_demo" onclick="CloseFirmWindow()" 
			type="button"  style="height:30%; width:10%; border-radius:10px; padding-left: 2px; padding-top: 5; padding-right: 6px;font-size:14px; ">X</button>
			<p style="color:black; position: relative; float: center; margin-left:2%; margin-right: 2%; margin-top: 5%; font-size:14px;" >Please contact us at info@awakening.software to add your firm so that you can register to use The Mortgage Space.com! </p>
		</div>

		<script type="text/javascript">
			var professions = [],
				company_names = [],
				selectedProfession = null,
				selectedCompanies = null;

			// get profession data
			var professionsTmp = document.querySelectorAll('#dropdown_1 option');
			for (var i = 0; i <= professionsTmp.length - 1; i++) {
				professions.push(professionsTmp[i].innerHTML);
			}

			// get company names data
			var companyTmp = document.querySelectorAll('#dropdown_data option');
			for (var i = 0; i <= companyTmp.length - 1; i++) {
				company_names.push({
					profession: companyTmp[i].value,
					companyName: companyTmp[i].innerHTML
				});
			}

			// profession select
			function changeDropdown1() {
				selectedProfession = document.getElementById("dropdown_1").value;
				selectedCompanies = company_names.filter(data => data.profession === selectedProfession);

				var dropdown2 = document.getElementById("dropdown_2");
				var company = document.getElementById("company");
				dropdown2.innerHTML = "";
				company.innerText = "";
				// 	var company = document.getElementById("company");

				selectedCompanies.map(data => {
					var opt = document.createElement('option');
				opt.value = data.companyName;
				dropdown2.appendChild(opt);
				});
			}
		</script>

		<script>

			let CompanyNames;
			let ProfessionalsChange_flag = 0;
			//Custom Alert Window                        
			function OnClickOKBtn() {
				document.getElementById("customModalAlert").style.display = "none";
			}

			
			function ProfessionChange(ProfessionName) 
			{
				ProfessionalsChange_flag = 0;
				let ProfessionalsList = document.getElementById("ProfessionalsSelect");
				ProfessionalsList.innerHTML = "";
				document.getElementById("ProfessionalsName").value = "";		
				$.ajax({
					url: 'Lender_Profession_ProfessionChange.php',
					type: "POST",
					dataType: 'JSON',
					data: {'ProfessionName': ProfessionName},
					success: function (response) {
						if(response.length>0) {
							ProfessionalsList.style.display="block";
						}else{
							ProfessionalsList.style.display="none";
						}
						CompanyNames = response;						
						let len = response.length;
						if(len>0){
							let option = document.createElement("option");
							option.value = "";
							option.text = "";
							ProfessionalsList.appendChild(option);
						}			
						for(let i=0; i<len; i++){
							let id = response[i].id;
							let name = response[i].name;
							let option = document.createElement("option");
							option.value = name;
							option.text = name;
							ProfessionalsList.appendChild(option);
						}
						if(len+1>20){
							$("#ProfessionalsSelect").attr("size", 20);
						}else{
							$("#ProfessionalsSelect").attr("size", len+1);
						}
						
					},
					error: function () {
						alert("database connection error!");
					}
				});
			} 
			
			function ProfessionalsChange(ProfessionalsName) 
			{
				let ProfessionalsList = document.getElementById("ProfessionalsSelect");
				ProfessionalsList.style.display="none";
				document.getElementById("ProfessionalsName").value = ProfessionalsName;				
			} 		

			function DropButtonClick()
			{
				let ProfessionalsList = document.getElementById("ProfessionalsSelect");
				n = CompanyNames.length;
				if(n==0){
					ProfessionalsList.style.display="none";
					return;
				}
				if(ProfessionalsChange_flag){
					ProfessionalsList.innerHTML = "";					
					let option = document.createElement("option");
					option.value = "";
					option.text = "";
					ProfessionalsList.appendChild(option);
					for(let i=0; i<n; i++)
					{					
						let option = document.createElement("option");
						option.value =CompanyNames[i].name;
						option.text = CompanyNames[i].name;
						ProfessionalsList.appendChild(option);
					}				
					if(n+1>20){
						$("#ProfessionalsSelect").attr("size", 20);
					}else{
						$("#ProfessionalsSelect").attr("size", n+1);
					}
					ProfessionalsChange_flag = 0;
				}				
				ProfessionalsList.style.display="block";				
			}

			function ProfessionalsNameChange(ProfessionalsName)
			{
				ProfessionalsChange_flag = 1;
				let ProfessionalsList = document.getElementById("ProfessionalsSelect");
				ProfessionalsList.innerHTML = "";				
				if(CompanyNames.length<1) 
				{
					ProfessionalsList.style.display="none";
					return;
				}
				if(ProfessionalsName==""){
					ProfessionalsList.style.display="none";
					return;
				}	
				
				let n=0;
				for(let i=0; i<CompanyNames.length; i++)
				{
					let name = CompanyNames[i].name;
					if(!name || name=="") continue;
					let len = ProfessionalsName.length;
					if(name.length<len) continue;
					let cmpName = name.substr(0, len);					
					if(cmpName.toUpperCase()==ProfessionalsName.toUpperCase()){
						if(n==0){
							let option = document.createElement("option");
							option.value = "";
							option.text = "";
							ProfessionalsList.appendChild(option);
						}
						let option = document.createElement("option");
						option.value = name;
						option.text = name;
						ProfessionalsList.appendChild(option);
						n++;
					}
				}
				
				if(n>0) {					
					ProfessionalsList.style.display="block";
					if(n+1>20){
						$("#ProfessionalsSelect").attr("size", 20);
					}else{
						$("#ProfessionalsSelect").attr("size", n+1);
					}
				}else{
					ProfessionalsList.style.display="none";
				}
			}

			function SubmitForSave()
			{
				let form = document.getElementById("SubmitForm");
				form.submit();			
			}
			
			
		</script>

	</body>
</html>

  
