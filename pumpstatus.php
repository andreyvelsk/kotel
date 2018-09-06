<?php
$command = 'cat /home/pi/prkotel/pump/status';
$output = shell_exec($command);
echo $output;
?>
