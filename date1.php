<?php
echo "Date Function";
echo "<br>";
echo date('d/m/Y');
echo "<br>";
echo date('d');
echo "<br>";
echo date('m');
echo "<br>";
echo date('Y');
echo "<br>";
echo date('Y/m/d');
echo "<br>";
echo date('l');
echo "<br>";
echo "09/06/2019";
echo "<br>";
echo "<br>";
echo "Time through Date Function";
echo "<br>";
date_default_timezone_set('Asia/Kolkata');
echo date('h');
echo "<br>";
echo date('i');
echo "<br>";
echo date('s');
echo "<br>";
echo date('h:i:s a');
echo "<br>";
$var=mktime(12,24,36,6,12,2019);
echo date('h:i:s a',$var);
echo "<br>";
echo date('d/m/Y',$var);
?>