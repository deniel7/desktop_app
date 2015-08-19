<!doctype html>
<html>
<head>
<title>PHP Countdown Timer</title>
<style>
.green{color:green;}
 
h1{
font-size:3em;
font-weight:bold;
font-family:Arial, Helvetica, sans-serif;
}
 
</style>
</head>
<body>
<?php
$date = strtotime("May 6, 2015 5:00 PM");
$remaining = $date - time();
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);

?>
 
<h1>There are <span class="green"> <?php echo $days_remaining?></span> days and <span class="green"> <?php echo $hours_remaining?></span> hours left</h1>


<?php
$now = new DateTime();
$future_date = new DateTime('2015-05-11 12:00:00');

$interval = $future_date->diff($now);

echo $interval->format("%d days, %h hours, %i minutes, %s seconds");
?>

</body>
</html>