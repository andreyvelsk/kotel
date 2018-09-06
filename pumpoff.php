<?php
$command = 'sudo /home/pi/prkotel/pump/poff.sh';
$output = shell_exec($command);
echo $output;
?>
