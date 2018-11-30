<?php
 include ('../admin/classes/class_db.php'); 
$sql="select * from registered_stu";
$result=mysqli_query($db,$sql);
//echo $result['name'];
$xls_filename = 'export_'.date('dd-MM-yyyy').'.xls'; // Define Excel (.xls) file name
// Header info settings
  header("Content-Type: application/xls");
  header("Content-Disposition: attachment; filename=$xls_filename");
  header("Pragma: no-cache");
  header("Expires: 0");

$flag = false;
while ($row = mysqli_fetch_assoc($result)) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
}
?>