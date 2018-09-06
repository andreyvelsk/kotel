<?php
$command = 'sudo /home/pi/prkotel/pump/pon.sh';
$output = shell_exec($command);
echo $output;
?>
