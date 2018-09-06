<?php
$a = $_GET['value'];
if ($a=='getsmoke24882')
{
$command = 'sudo /home/pi/prkotel/getsmoke.py';
$output = shell_exec($command);
echo $output;
}
else
echo "no";
?>
