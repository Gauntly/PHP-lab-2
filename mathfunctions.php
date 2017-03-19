<title>WebDev Lab 2</title>
<h1>Lab 2</h1>
<h3>Task 3</h3>
<?php
/**
 * Created by PhpStorm.
 * User: Gauntly
 * Date: 17-Mar-17
 * Time: 11:20 AM
 */
function factorial($positiveInt){
    $result = 1;
    $factor = $positiveInt;
    while($factor > 1){
        $result = $result * $factor;
        $factor--;
    }
    return $result;
}
?>