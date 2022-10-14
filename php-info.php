<?php
$timestamp_now = time();
echo "Timestamp for now: {$timestamp_now}";

$timestamp_tomorrow = $timestamp_now + (60 * 60 * 24);
echo "Timestamp for tomorrow: {$timestamp_tomorrow}";

$timestamp_tomorrow = strtotime('+1 day');
echo "Timestamp for tomorrow: {$timestamp_tomorrow}";

$timestamp_newyear = strtotime('first day of January 2020');
echo "Timestamp for new year: {$timestamp_newyear}";

$timestamp_newyear2 = mktime(0, 0, 0, 1,);
echo "Timestamp for new year: {$timestamp_newyear2}";

echo "Today is " . date('g:i:s a \o\n l, F j, Y');
echo "Tomorrow is " . date('g:i:s a \o\n l, F j, Y', $timestamp_tomorrow);

$year = 2022;

if (checkdate(2, 29, $year)) {
  echo "{$year} is a leap year";
} else {
  echo "{$year} is not a leap year";
}
