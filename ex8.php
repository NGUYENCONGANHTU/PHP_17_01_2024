<?php
$temp = "the date is";
echo $temp . longdate(time());
function longdate($timestamp){
    return date("l F js Y",$timestamp);
}
?>