<title>WebDev Lab 2</title>
<h1>Lab 2</h1>
<h3>Task 1</h3>
<?php
/**
 * Created by PhpStorm.
 * User: Gauntly
 * Date: 17-Mar-17
 * Time: 9:59 AM
 */

// We simply define the array "days" and in the array argument we put our strings inside.
$days = array(
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday");
// We next use a foreach loop where we iterate through all the days array and print each of them.
echo "The Days of the week in English are: </br>";
foreach ($days as $day) {
    echo "$day, ";
}
?>
<br>
<?php
/** We are creating an associative array where we assign a value to a key.
 *   In this case our key would be Sunday and the value of sunday would be Dimanche.
 *   We then use another foreach loop and iterate through it but instead of just doing the same foreach loop above
 *  we use x => x_value which points to the value from the key.
 *  Then all we do is print that nicely within the foreach loop.
 */
$daysInFrench = array(
    "Sunday" => "Dimanche",
    "Monday" => "Lundi",
    "Tuesday" => "Mardi",
    "Wednesday" => "Mercredi",
    "Thursday" => "Jeudi",
    "Friday" => "Vendredi",
    "Saturday" => "Samedi");

echo "<br> The Days of the week in French are: </br>";
foreach ($daysInFrench as $x => $x_value) {
    echo "$x_value, ";
}
?>

