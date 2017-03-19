<title>WebDev Lab 2</title>
<h1>Lab 2</h1>
<h3>Task 4</h3>
<?php

/**
 * Created by PhpStorm.
 * User: Gauntly
 * Date: 19-Mar-17
 * Time: 2:10 PM
 */
function isLeapYear ($leapyearcandidate){
    if ((($leapyearcandidate) % 4 == 0) && (($leapyearcandidate % 100) != 0)
        || (($leapyearcandidate % 400) == 0)) {
        return " Is a leap year.";
    } else {
        return " Is not a leap year.";
    }
}
    ?>