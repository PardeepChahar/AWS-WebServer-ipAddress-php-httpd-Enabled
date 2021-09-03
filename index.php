<!DOCTYPE html>
<html>
<body>

<?php
echo 'Hi from PK CHAHAR';
echo "</br>";
echo "IP of your system is:";
echo"</br>";
$output = shell_exec('ifconfig');

echo "<pre>$output</pre>";
?>


</body>
</html>
