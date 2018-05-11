<?php
include("../config.php");
if(isset($_REQUEST))
  $search = $_REQUEST['search';
  $sql = "SELECT * FROM tbl_ordinance";
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
