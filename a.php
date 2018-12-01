<?php
$file="demo.xls";
$test="<table  ><tr><th>ht</th><th>ht3</th></tr><tr><td>Cell 1</td><td>Cell 2</td></tr></table>";
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$file");
echo $test;
?>