<?php
$temp = "The date is ";
echo longdate(time());
function longdate($timestamp){
    global $temp;
    return $temp . date("l F js Y", $timestamp);
}
?>