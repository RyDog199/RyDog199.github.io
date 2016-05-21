<?php
$opts = ""; /* variable that will later contain all the checkbox options */

if (isset($_POST["moonjump"])) /* condition that checks if a checkbox was checked in the HTML form. */
    $opts .= "moonjump/"; /* this appends the option to the option string */

if (isset($_POST["teleport"])) /* we do the same thing for every other option */
    $opts .= "teleport/";

if (isset($_POST["dupe"])) /* we do the same thing for every other option */
    $opts .= "dupe/";

if (isset($_POST["speed"])) /* we do the same thing for every other option */
    $opts .= "speed/";	

if ($opts == "")
    die("You didn't specify a cheat! "); /* error handling if user didn't select any options at all */

header("Location: ~mazzn6gd/downloads/" . $opts . "cheat.plg"); /* redirects user, using options string as part of a file path */
?>