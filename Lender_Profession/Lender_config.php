<?php

	// $servername = "mysql.buycommercialproperty.ca";
	// $username = "test22user";
	// $password = "2022_Test_2";
	// $dbname = "test_database22";

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test_database22";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$User_Mtg_Amount="250000"; // Define the variables and set the default.
    $User_MinimumPropertySize = "300";
    $Currency = "CDN";
    $User_BankruptcyAllowed = "YES";
    $Max_Lenders_Horizontally = 12;
    $Max_Lenders_Vertically = 7;
    $Total_Lenders_Per_Page = $Max_Lenders_Horizontally * $Max_Lenders_Vertically;
    $Max_Financial_Programs_Horintally = 4;
    $Max_Financial_Programs_Vertically = 2;
    $Background_Color="#024b30";
    $Lender_Color_On ="white";
	$Lender_Color_Off ="gray";
    $Box_on = "#71F40F";
	$Top_Brokerage_Num = 5;

?>