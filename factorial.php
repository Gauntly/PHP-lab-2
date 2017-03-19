<title>WebDev Lab 2</title>
<?php require 'mathfunctions.php';
/**
 * Created by PhpStorm.
 * User: Gauntly
 * Date: 17-Mar-17
 * Time: 11:29 AM
 */
$number = $_POST["inNum"];
echo("The number inputted was: $number and the factorial is: ");
echo factorial($number);
?>

