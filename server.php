<?php
$fp = fopen('test.txt', 'w');
fwrite($fp, 'Cats chase mice');
fclose($fp);
?>
