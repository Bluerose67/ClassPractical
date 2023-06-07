<?php
include "connect.php";

$SN = $_GET['SN'];
var_dump($SN);
if (isset($_GET['SN'])) {


    $sql1 = "Delete * from class_practical where SN='$SN' ";
    $result = mysqli_query($conn, $sql1);
    if ($result) {
        echo "Record Deleted Successfully";
    }
}
// else {
//     // echo "invalid Request";
// }
?>