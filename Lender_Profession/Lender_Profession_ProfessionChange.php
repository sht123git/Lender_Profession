<?php

    include "Lender_config.php";
    $ProfessionName = $_POST['ProfessionName'];
    $return_arr = array();
    
    $sql = "SELECT Company_Names_ID, Company_Name FROM professionals_database WHERE Profession_description='". $ProfessionName."' ORDER BY Company_Name";
    $result = $conn->query($sql);

    while($row = $result->fetch_array()){
        $id = $row['Company_Names_ID'];
        $name = $row['Company_Name'];
        if($name=="") continue;
        $return_arr[] = array("id" => $id, "name" => $name);
    }
    echo json_encode($return_arr);
?>