<?php
//Test
//$month = "January";
//$month = "February";
//$month = "March";
//$month = "April";
//$month = "May";
//$month = "June";
//$month = "July";
//$month = "August";
//$month = "September";
//$month = "October";
//$month = "November";
//$month = "December";
//$month = "null";

$month = date("F");
$date = date("j");
$day = date("l");
$year = date("Y");

if ($month == "January") {
  echo "Today is $day, $month $date, $year.";
} elseif ($month == "February") {
  echo "Today is $day, $month $date, $year.";
} elseif ($month == "March") {
  echo "Today is $day, $month $date, $year.";
} elseif ($month == "April") {
  echo "Today is $day, $month $date, $year.";
} elseif ($month == "May") {
  echo "Today is $day, $month $date, $year.";
} elseif ($month == "June") {
  echo "Today is $day, $month $date, $year.";
} elseif ($month == "July") {
  echo "Today is $day, $month $date, $year.";
} elseif ($month == "August") {
  echo "Today is $day, $month $date, $year.";
} elseif ($month == "September") {
  echo "Today is $day, $month $date, $year.";
} elseif ($month == "October") {
  echo "Today is $day, $month $date, $year.";
} elseif ($month == "November") {
  echo "Today is $day, $month $date, $year.";
} elseif ($month == "December") {
  echo "Today is $day, $month $date, $year.";
} else {
  echo "Sorry, Can't remember the date.😔";
}

?> 