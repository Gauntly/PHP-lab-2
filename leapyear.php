<?php require 'leapyearfunction.php';
/**
 * Created by PhpStorm.
 * User: Gauntly
 * Date: 19-Mar-17
 * Time: 2:06 PM
 */

$candidate = $_POST["leapyearcandidate"];
echo $candidate;
echo isLeapYear($candidate);