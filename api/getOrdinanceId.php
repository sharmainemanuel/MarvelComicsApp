<?php
include("../config.php");
$id = $_REQUEST['id'];
if(isset($_REQUEST))
  $sql = "SELECT * FROM tbl_ordinance where id = '$id'";
  $result=mysqli_query($conn,$sql);
    if (!$result) {
      die("Error: Data not found..");
    }
    $array =array();
    if(mysqli_num_rows($result) > 0){
      while($rows = mysqli_fetch_assoc($result)){
        array_push($array, $rows);
      }
    }
    echo json_encode($array); 

  mysqli_close($conn);
  

?>
