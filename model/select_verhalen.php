<?php
//NR_ITEMS_PER_PAGE
//echo $page_nr;
$offset = ($page_nr-3) * NR_ITEMS_PER_PAGE;
$sql = "SELECT * FROM Verhalen LIMIT 20";

$result2 = $mysqli->query($sql);


$result2 = convertResultToArray($result2);
    ?>