<?php
function convertResultToArray($DBResult){
    //convert DB Result object to array
    $resultArray = array();
    while($row = $DBResult->fetch_assoc()){
        $resultArray[] = $row;
    }
    //print_r($resultArray);
return $resultArray;
}