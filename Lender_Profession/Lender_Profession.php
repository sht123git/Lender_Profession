<?php

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

<html>
	<head>
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="Expires" content="-1">
		<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<title>Read and Display Profession Data</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<style>
			
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

			.div-btn {
				position:absolute;
				left:0px;
				top: 63px;
				background-color: #2B2B2B; 
				height: 255px;
				width: 1912px; 
				margins: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color: white;
			}	

			.div-General_Info {			
				left:1px;
				top: 124px;
				background-color: #2B2B2B; 
				height: 774px; 
				width: 1670px; 
				margins: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color:  #39FF14;
			}	
			
			.Documents {			
				left:1px;
				top: 124px;
				background-color: #2B2B2B; 
				height: 774px; 
				width: 1670px; 
				margins: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color:  #39FF14;
			}
			
			.Interest {			
				left:1px;
				top: 124px;
				background-color: #2B2B2B; 
				height: 774px; 
				width: 1670px; 
				margins: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color:  #39FF14;
			}
			
			.Marketing {			
				left:1px;
				top: 124px;
				background-color: #2B2B2B; 
				height: 774px; 
				width: 1670px; 
				margins: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color:  #39FF14;
			}
			
			.retangle {			 
				height: 100px; 
				width: 650px; 
				margins: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color:  gray;
			}

			.retangle2 {			 
				height: 100px; 
				width: 150px; 
				margins: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color:  #39FF14;
			}
			
			.retangle3 {			 
				height: 200px; 
				width: 250px; 
				margins: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color:  gray;
			}	
			
			.AddRequirements {			
				left:1px;
				top: 124px;
				background-color: #2B2B2B;  
				height: 774px; 
				width: 1670px; 
				margins: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color:  #39FF14;
			}

			.Requirements {			
				left:1px;
				top: 124px;
				background-color: #2B2B2B;  
				height: 774px; 
				width: 1670px; 
				margins: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color:  #39FF14;
			}	
			
			.div-program_name {
				position:absolute;
				left:2px; 
				top: 63px;
				background-color: #2B2B2B; 
				height: 60px; 
				width: 1667px; 
				margins: 0,0; 
				border-style: solid;
				border-width: 2px;
				border-color:  #39FF14;
			}
			
			.div-2 {
				position:absolute;
				left:5px;
				top:65px;
				background-color:  #262626;
				height: 250;
				width: 1260;
				border-style: solid;
				border-width: 2px;
				border-color: white;
			}	
			
			input.largerCheckbox {
				width: 18px;
				height: 18px;
			}

			.save2 {
				position:absolute;		
				font-size: 10px;
				font-weight: bold;
				background-color: #2c3e50;
				border-radius: 30px; /* Curve of border corners */
				border-style: solid;
				border-width: 3px;
				border-color:  #39FF14;
				color: white;		
				padding: 5px 25px;
				text-align: center;
				text-decoration: none;		
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
			}		
			
			.dropButton {
				position: absolute;
				/* flex: 1; */
				background-color:#34495e;
				color: black;
				cursor: pointer;
				border-block: none;
				border-radius: .3em;	
			}

			.dropButton:hover {				
				color: #f39c12;
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
			
			.button_additional_details {
				position:absolute;
				left:1300px;
				top:10px;
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
			
			.button_refinance {
				position:absolute;
				left:1300px;
				top:70px;
				font-size: 10px;
				font-weight: bold;
				background-color:  #2c3e50; 
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
			
			.button_equity {
				position:absolute;
				left:1300px;
				top:130px;
				font-size: 10px;
				font-weight: bold;
				background-color:  #2c3e50; 
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
			
			.options_text {
				position:absolute;
				font-size: 15px;
				font-weight: bold;
				color: white;
				margin-left: 20px;
				margin-top: 4px;
			}	

			.input_text_right_side {
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

			.L_tooltip {
				position: relative;
				display: inline-block;
				border-bottom: 1px dotted black;
			}

			.L_tooltip .L_tooltiptext {
				visibility: hidden;
				width: 180px;
				Height: 60px;
				background-color:  #666666;
				color: #fff;
				text-align: ;
				border-radius: 6px;
				padding: 5px 0;
				/* Position the tooltip  */
				position: absolute;
				z-index: 1;
			}

			.L_tooltip:hover .L_tooltiptext {
				visibility: visible;
			}

			.L_ToolTipTitle {
				font-size: 16px;
				font-weight: bold;
				color: #33ff33;
				margin-left: 3px;
				margin-top: 4px;
			}
				
			.L_ToolTipHeading1 {
				font-size: 10px;
				font-weight: normal;
				color: #33ff33;
				margin-left: 3px;
				margin-top: 4px;
			}			

			/**
			* Tooltip Styles
			*/

			/* Add this attribute to the element that needs a tooltip */
			[data-tooltip] {
				position: relative;
				z-index: 2;
				cursor: pointer;
			}

			/* Hide the tooltip content by default */
			[data-tooltip]:before,
			[data-tooltip]:after {
				visibility: hidden;
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
				filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
				opacity: 0;
				pointer-events: none;
			}

			/* Position tooltip above the element */
			[data-tooltip]:before {
				position: absolute;
				bottom: 150%;
				left: 50%;
				margin-bottom: 5px;
				margin-left: -80px;
				padding: 7px;
				width: 160px;
				-webkit-border-radius: 3px;
				-moz-border-radius: 3px;
				border-radius: 3px;
				background-color: #000;
				background-color: #2c3e50;
				color: white;
				content: attr(data-tooltip);
				text-align: center;
				font-size: 14px;
				line-height: 1.2;
			}

			/* Triangle hack to make tooltip look like a speech bubble */
			[data-tooltip]:after {
				position: absolute;
				bottom: 150%;
				left: 50%;
				margin-left: -5px;
				width: 0;
				border-top: 5px solid #000;
				border-top: 5px solid hsla(0, 0%, 20%, 0.9);
				border-right: 5px solid transparent;
				border-left: 5px solid transparent;
				content: " ";
				font-size: 0;
				line-height: 0;
			}

			/* Show tooltip content on hover */
			[data-tooltip]:hover:before,
			[data-tooltip]:hover:after {
				visibility: visible;
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
				filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=100);
				opacity: 1;
			}
			.Cust_user_full {		
				margin-left:1658px;
				top:68px;
				background-color: #2c3e50;
				height: 785px; 
				width: 220px;
				border-radius: 10px;
				border-style: solid;
				border-width: 5px;
				border-color: #39FF14;
				text-align: center;
			}


			.Suggest_Lenders_Heading {
				position:absolute;
				left:8px;
				top:5px;
				background-color: #ffa333;
				height: 40;
				width: 200;   
				border-radius: 10px; /* Curve of border corners */
				border-style: solid;
				border-width: 4px;
				border-color: yellow;
				text-align: center;
				vertical-align: middle;
				text-decoration: none;
				display: inline-block;
				font-weight: bold;
				font-size: 18px; 
				color: black;
			}	

			.div-Menu {
				position:absolute;
				left:0px;
				top: 0px;
				background-color:#2c3e50; 
				height: 60px;
				width: 1908px; 
				margin: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color: white;
			}
				
			.div-Headline {
				position:absolute;
				left:0px;
				top: 68px;
				background-color: #2c3e50; 
				height: 110px;
				width: 1908px; 
				margin: 0,0;
				border-style: solid;
				border-width: 2px;
				border-color: white;
			}

			.DISPLAY_DETAILS {
				position:absolute;
				left:785px;
				top: 67px;
				background-color: #2B2B2B;
				height: 827px;
				width: 460px; 
				margin: 0,0;
				border-style: solid;
				border-width: 1px;
				border-color: gray;
			}      
			
			.div-1-support {
				position:absolute;
				left:643px;
				top: 512px;
				background-color: #262626;
				height: 388px;
				width: 630px;   
				margin: 0,0;
				border-style: solid;
				border-width: 1px;
				border-color: gray;
			}	
			
			.div-1-Estimated_time {
				position:absolute;
				left:2px;
				top: 770px;
				background-color: #262626;
				height: 120px;
				width: 730px;   
				margin: 0,0;
				border-style: solid;
				border-width: 1px;
				border-color: gray;
			}
				
			.div-LEADS { 
				position:absolute;
				left:2px;
				top: 68px;
				background-color: #2c3e50;;
				height: 825px;
				width: 780px;   
				margin: 0,0;
				border-style: solid;
				border-width: 1px;
				border-color: gray;
			}	

			.dot {
				height: 10px;
				width: 10px;
				background-color: #bbb;
				border-radius: 50%;
				display: inline-block;
				background-color:gray;
			}

			.container {
				position:absolute;
				width: 100%;
				height: 20%;
				background-color: #ddd;
				left:10px;
				top: 20px;
			}
			
			.div-1-ERRORS {
				position:absolute;
				left:80px;
				top: 10px; 
				background-color:#2c3e50  ;
				color:white;
				height: 20px;
				width: 400px;
				border-style: solid;
				border-width: 2px;
				border-color: RED ;
				font-size: 16px;  
			}

			.div-1-Lenders-box-title {
				position:absolute;
				left:80px;
				top: 10px; 
				background-color:#2c3e50  ;
				color:white;
				height: 20px;
				width: 200px;
				border-style: solid;
				border-width: 2px;
				border-color: white ;
				font-size: 16px;  
			}	

			.div-1-Title-text {
				position:absolute;
				background-color: #262626;
				left:290px;
				top: 15px;
				font-size: 20px;
				font-weight: bold;
				color: white;
				margin-left: 3px;
				margin-top: 4px;
			}

			.div-2 {
				position:absolute;
				left:0px;
				top:0px;
				background-color: #262626;
				border-style: solid;
				border-width: 1px;
				border-color: yellow;
				height: 100px;
				width: 1530;
				margin: 0,0; 
			}

			.div-4 {
				position:absolute;
				left:1095px;
				top:180px;
				background-color: black;
				height: 150;
				width: 280;
				border-style: solid;
				border-width: 2px;
				border-color: gray;
			}

			.button_save_draft {
				position:absolute;
				font-size: 10px;
				font-weight: bold;
				background-color: #2c3e50;
				border-radius: 30px; /* Curve of border corners */
				border-style: solid;
				border-width: 3px;
				border-color:  #39FF14;
				color: white;
				width: 175px;
				Height: 50px;
				padding: 5px 25px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
			}

			.button_search {
				position:absolute;
				font-size: 9px;
				font-weight: bold;
				background-color: #2c3e50;
				border-radius: 30px; /* Curve of border corners */
				border-style: solid;
				border-width: 3px;
				border-color:  #39FF14;
				color: white;
				width: 85px;
				Height: 30px;
				padding: 1px 5px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
			}

			.button_Export {
				position:absolute; 
				font-size: 10px;
				font-weight: bold;
				background-color: #2c3e50;
				border-radius: 30px; /* Curve of border corners */
				border-style: solid;
				border-width: 3px;
				border-color:  #39FF14;
				color: white;
				width: 125px;
				Height: 50px;
				padding: 5px 25px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
			}

			.button_Submit {
				position:absolute; 
				font-size: 10px;
				font-weight: bold;
				background-color: #ff8c00;
				border-radius: 30px; /* Curve of border corners */
				border-style: solid;
				border-width: 3px;
				border-color:  white;
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

			.Ok_button {
				position:absolute;
				left:110px;
				top:90px;
				font-size: 10px;
				font-weight: bold;
				background-color: #008000; /* dark Green */
				border-radius: 30px; /* Curve of border corners */
				border-style: solid;
				border-width: 0px;
				border-color: #006600;
				color: white;
				width: 45px;
				Height: 30px;
				padding: 3px 5px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
			}

			.button_admin {
				position:absolute;
				left:20px;
				top:10px;
				font-size: 18px; 
				font-weight: bold;
				background-color: gray; 
				border-radius: 20px; /* Curve of border corners */
				border-style: solid;  
				border-width: 0px;
				border-color: #006600;
				color: white;
				width: 90px;
				Height: 30px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				margin: 4px 2px;
				cursor: pointer;
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

			/* Reset Select */
			select {
				-webkit-appearance: none;
				-moz-appearance: none;
				-ms-appearance: none;
				appearance: none;
				outline: 0;
				box-shadow: none;
				border: 0 !important;
				background: #2B2B2B ;
				background-image: none;
			}

			/* Remove IE arrow */
			select::-ms-expand {
				display: none;
			}

			/* Custom Select */
			.select {
				position:absolute;
				display: flex;
				width: 280px;
				height:40px;
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

			/* Arrow */
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

			/* Transition */
			.select:hover::after {
				color: #f39c12;
			}

			.options_text {
				position:absolute;
				font-size: 15px;
				font-weight: bold;
				color: white;
				margin-left: 20px;
				margin-top: 4px;
			}

			.display_records {
				position:absolute;
				font-size: 15px;
				font-weight: bold;
				color: yellow;
				margin-left: 20px;
				margin-top: 4px;
			}

			.options_text-headline {
				position:absolute;
				font-size: 32px;
				font-weight: bold;
				color: yellow;  
			}
			
			.options_text-headline_Lender {
				position:absolute;
				font-size: 25px;
				font-weight: bold;
				color: white;  
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

			div {
				position: absolute;
				left:20px;
				top: 370px;
			}

			.circle {
				width: 250px;
				height: 50px;
				-webkit-border-radius: 125px;
				-moz-border-radius: 125px;
				border-radius: 125px;
				background: white;
				left:10px;
				top: 0px;
			}

			table#lender_list {
				margin-top: 60px;
				position: absolute;
			}

			#lender_list_result a {
				text-decoration: none;
			}

			.lender_link_btn {
				font-size: 18px;
				font-weight: bold;
				color: yellow;
				background: #2c3e50;
				cursor: pointer;
			}

			.program_link_btn {
				font-size: 18px;
				font-weight: bold;
				color: cyan;
				background: #2c3e50;
				cursor: pointer;
			}



			.results_text {
				position:absolute;
				font-size: 15px;
				font-weight: bold;
				color: white;  
			}

			.results_text_lender_link {
				position:absolute;
				font-size: 18px;
				font-weight: bold;
				color: yellow;
				margin-left: 20px;
				margin-top: 4px;
				background: black;
				cursor: pointer;
			}

			.results_text_lender {
				position:absolute;
				font-size: 18px;
				font-weight: bold;
				color: yellow;
				margin-left: 20px;
				margin-top: 4px;
			} 


			.results_text_lender_link_B {
				position:absolute;
				font-size: 18px;
				font-weight: bold;
				color: cyan;
				margin-left: 20px;
				margin-top: 4px;
				background: #2c3e50;
				cursor: pointer;
			}	

			.results_text_lender_B {
				position:absolute;
				font-size: 18px;
				font-weight: bold;
				color: cyan;
				margin-left: 20px;
				margin-top: 4px;
			}

			.display_record {
				position:absolute; 
				margin-left: 25px;
				margin-top: 50px;
			}

			.display_record thead tr th:hover {
				cursor: pointer;
			}

			table tr th {
				color: yellow;
				font-weight: bold;
				font-size: 15px;
				text-decoration: underline;
				padding: 10px;
			}

			table tr td {
				color: white;
				font-weight: bold;
				font-size: 15px;
				text-align: center;
				padding: 10px;
			}

			table tr td:first-child {
				text-align: left;
				margin-left : 10px;	
			}

			table tr th:first-child {
				text-align: left;
				padding-left: 10px;
			}

			table tr td a {
				cursor: pointer;
			}

			.display {
				color: white;
				position: absolute;
				margin-left: 10px;
				margin-top: 260px;
				display: flex;
			}

			.modal {
				display: none;
				position: fixed;
				z-index: 1;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: rgb(0,0,0);
				background-color: rgba(0,0,0,0.4);
			}

			.modal-content {
				background-color: #fefefe;
				left: 50%;
				transform: translateX(-50%);
				padding: 20px;
				border: 1px solid #888;
				width: 40%;
			}

			.modal-content input {
				margin-top: 12px;
				font-size: 18px;
				border-radius: 5px;
				padding: 5px 12px;
				width: 100%;
			}

			.modal-content textarea {
				width: 100%;
				border-radius: 5px;
				padding: 5px 12px;
				min-height: 200px;
			}

			#send {
				background-color: green;
				font-weight: bold;
				border-radius: 30px;
				border-style: solid;
				border-width: 3px;
				border-color: #39FF14;
				color: white;
				/* width: 85px;
				Height: 30px; */
				padding: 6px 12px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				cursor: pointer;
			}

			#attachment {
				display: none;
			}

			.custom-attachment {
				border: 3px solid #39FF14;
				background-color: green;
				display: inline-block;
				padding: 6px 12px;
				cursor: pointer;
				border-radius: 30px;
				color: #fff;
				font-size: 16px;
				font-weight: bold;
				margin-top: 1rem;
			}

			.button_suggest_lenders {
				position:absolute;			
				font-size: 10px;
				font-weight: bold;
				background-color: #2c3e50;
				border-radius: 30px; /* Curve of border corners */
				border-style: solid;
				border-width: 3px;
				border-color:  #39FF14;
				color: white;			
				padding: 5px 25px;
				text-align: center;
				text-decoration: none;			
				font-size: 16px;
				margin: 4px 2px;
				cursor: pointer;
			}
				
			.div-1-fields {
				position:absolute;
				left:5px;
				top: 70px;
				background-color: black;
				height: 380px;
				width: 405px; 
				margins: 0,0;
				border-style: solid;
				border-width: 1px;
				border-color: gray;
			}

			.div-1-checkbox {
				position:absolute;
				left:2px;
				top: 70px;
				background-color: black;
				height: 250px;
				width: 390px; 
				margins: 0,0;
				border-style: solid;
				border-width: 1px;
				border-color: gray;
			}
					
			.div-1-AI {
				position:absolute;
				left:5px;
				top: 70px;
				background-color: black;
				height: 380px;
				width: 805px; 
				margins: 0,0;
				border-style: solid;
				border-width: 1px;
				border-color: gray;
			}	

			.documents_det {
				position:absolute;
				left:5px;
				top: 70px;
				background-color: black;
				height: 760px;
				width: 1238px; 
				margins: 0,0;
				border-style: solid;
				border-width: 1px;
				border-color: gray;
			}

			.div-1-fields-title {
				position:absolute;
				left:60px;
				top: 10px;
				background-color: #2c3e50;
				height: 20px;
				width: 270px; 
				border-style: solid;
				border-width: 1px;
				border-color: gray;
				color: #fff;
				font-size: 16px;
				font-weight: bold;
				text-align: center;			
			}	

			.check_boxes {
				position: absolute;
				font-size: 15px;
				width: 20px;
				height: 20px;  
				font-style: italic; 
				overflow: hidden; 
				border-radius: 2px;
				border-color: white;
				padding: 10px;
				color: white;
				cursor: pointer;
			}	
				
			.options_text {
				position:absolute;
				font-size: 15px;
				font-weight: bold;
				color: white;
				margin-left: 20px;
				margin-top: 4px;
			}

			.rangeBANK  {
				width: 300px;
				height: 15px;
				-webkit-appearance: none;
				background: #111;
				outline: none;
				border-radius: 15px;
				overflow: hidden;
				box-shadow: inset 0 0 5px rgba(0, 0, 0, 1);		
			} 

			.rangeBANK::-webkit-slider-thumb {
				-webkit-appearance: none;
				width: 15px;
				height: 15px;
				border-radius: 50%;
				background: #00fd0a;
				cursor: pointer;
				border: 4px solid #333;
				box-shadow: -407px 0 0 400px #00fd0a;		
			}

			.rangeDOCUMENT  {
				width: 210px;
				height: 15px;
				-webkit-appearance: none;
				background: #111;
				outline: none;
				border-radius: 15px;
				overflow: hidden;
				box-shadow: inset 0 0 5px rgba(0, 0, 0, 1);		
			}  

			.rangeDOCUMENT::-webkit-slider-thumb {
				-webkit-appearance: none;
				width: 15px;
				height: 15px;
				border-radius: 50%;
				background: #00fd0a;
				cursor: pointer;
				border: 4px solid #333;
				box-shadow: -407px 0 0 400px #00fd0a;		
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

			.custom_slider {
				position: absolute;
				display: block;
				text-align: center;
				font-size: 1em;
				color: #00FE06;
				font-weight: 100;
				left:320px;
				top: 0px;
			}

			.range {
				width: 300px;
				height: 15px;
				-webkit-appearance: none;
				background: #111;
				outline: none;
				border-radius: 15px;
				overflow: hidden;
				box-shadow: inset 0 0 5px rgba(0, 0, 0, 1);		
			} 

			.range::-webkit-slider-thumb {
				-webkit-appearance: none;
				width: 15px;
				height: 15px;
				border-radius: 50%;
				background: #00fd0a;
				cursor: pointer;
				border: 4px solid #333;
				box-shadow: -407px 0 0 400px #00fd0a;		
			}

			.range2 {
				width: 300px;
				height: 15px;
				-webkit-appearance: none;
				background: #111;
				outline: none;
				border-radius: 15px;
				overflow: hidden;
				box-shadow: inset 0 0 5px rgba(0, 0, 0, 1);		
			} 

			.range2::-webkit-slider-thumb {
				-webkit-appearance: none;
				width: 15px;
				height: 15px;
				border-radius: 50%;
				background: #00fd0a;
				cursor: pointer;
				border: 4px solid #333;
				box-shadow: -407px 0 0 400px #00fd0a;		
			}

			.tooltip {
				position: relative;
				display: inline-block;
				border-bottom: 1px dotted black;
			}

			.tooltip .tooltiptext {
				visibility: hidden;
				width: 120px;
				background-color: #555;
				color: #fff;
				text-align: center;
				border-radius: 6px;
				padding: 5px 0;
				position: absolute;
				z-index: 1;
				bottom: 125%;
				left: 50%;
				margin-left: -60px;
				opacity: 0;
				transition: opacity 0.3s;
			}

			.tooltip .tooltiptext::after {
				content: "";
				position: absolute;
				top: 100%;
				left: 50%;
				margin-left: -5px;
				border-width: 5px;
				border-style: solid;
				border-color: #555 transparent transparent transparent;
			}

			.tooltip:hover .tooltiptext {
				visibility: visible;
				opacity: 1;
			}

			.lenderLogo {
				position: absolute;
				font-size: 15px;
				background: #2c3e50;
				width: 220px;
				height: 25px;
				font-style: italic;
				background: #2c3e50;
				overflow: hidden;
				border-radius: 2px;
				border-color: white;
				padding: 0px;
				color: white;
				border-radius: 2px;
				border-color: white;
				cursor: pointer;
			}
			
		</style>
	
	</head>

	<body>
		<a style="display: none;" id="lender_link" data-link="<?= $LenderLink ?>"></a>
		<a style="display: none;" id="program_link" data-link="<?= $ProgramLink ?>"></a>
		<a style="display: none;" id="free" data-data="<?= $Free ?>"></a>

		<script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>	
			
		<div class="div-1" style="height:840px;">

			<div class="Cust_user_full" id="Cust_user_full" style="margin-top:-60px; height: 820px;">  

				<button class="button_suggest_lenders" type="submit" name="SaveBtn" id="SaveBtn" onclick="SubmitForSave()"
					style="position:absolute; margin-left: -60px; margin-top: 630px; background-color:green; width: 140px; Height: 45px;">SAVE</button>	
										
			</div>

			<form action="Lender_Profession_display.php" method = "POST" id="SubmitForm" enctype="multipart/form-data">

				<div class="div-program_name" id="div-program_name" style="margin-top: -60px;">
					
					<p class ="options_text" style="position:absolute; margin-left:60px; margin-top: 20px;"> 
						Profession </p>					

					<div class="select" style ="left:180px; top:15px; width: 300px;"> 												
						
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
				
					<p class ="options_text" style="position:absolute; margin-left:600px; margin-top: 20px;"> 
						Company name </p>
					
					<div style ="left:715px; top:40px; width: 500px;"> 
						<select name="ProfessionalsSelect" id="ProfessionalsSelect" size="10" onchange="ProfessionalsChange(this.value)"
							style="display:none; width:450px;"> 
										
						</select>
					</div>				
					
					<input class="input_text_right_side" style="width: 400px; margin-left: 720px; margin-top: 15px;" type="text"
						id="ProfessionalsName" name="ProfessionalsName"	oninput="ProfessionalsNameChange(this.value)"> </input>				

				</div>			
		
			</form>

			<input class="dropButton" style="width:50px; height:33px;margin-left:1122px; margin-top:20px; font-size:20px;"
				type="button" id="DropButton" name="DropButton" value ="&#9660" onclick="DropButtonClick()">
			
		</div>		
		
		<?php
			customAlertWindow($inputParam);
			customAlertWindow1($inputParam1);
		?>

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
				alert(ProfessionName)	
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
					if(name.substr(0, len)==ProfessionalsName){
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

<?php
	$conn->close();
?>