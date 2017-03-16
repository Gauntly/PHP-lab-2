<title>WebDev Lab 2</title>
<h1>Lab 2</h1>
<h3>Task 2</h3>
<?php
/**
 * Created by PhpStorm.
 * User: Gauntly
 * Date: 17-Mar-17
 * Time: 11:06 AM
 */

/**The aim of this Task is to use a conditional operator to determine two things:
 *   One - Is the value an integer?
 *  Two - If it is an integer is it odd or even?
 *
 */
$number = 15;
if(is_int($number)){
if ($number % 2 == 0) {
    echo "The number is: $number and it is even! ";

} else {
    echo "The number is: $number and it is odd! ";
}
}
else{
    //As a side note is inputted correct? I'm not sure...
    echo"The value inputted was \"$number\" but it is not an integer!";
}

?>