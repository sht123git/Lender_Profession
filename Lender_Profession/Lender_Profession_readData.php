<?php
    include "Lender_config.php";

    function readTable($conn, $tbname, $fieldName, $orderbyName)
	{
		$sql = "SELECT " . $fieldName . " FROM ". $tbname;
        if($orderbyName!=""){
            $sql = $sql . "  ORDER BY ". $orderbyName;
        }
		$result = $conn->query($sql);
		$items = array();
		if($result){
			if ($result->num_rows > 0) {
				while($row = $result->fetch_array()) {
					if($fieldName=="*"){
						$records = array();
						for($i=0; $i<$result->field_count; $i++){
							array_push($records, $row[$i]);
						}
						array_push($items, $records);
					}else{
						array_push($items, $row[0]);
					}					
				}
			}
		}
		return $items;
	}

?>