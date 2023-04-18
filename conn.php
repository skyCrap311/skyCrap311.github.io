<?php 
    $conn = new mysqli("localhost", "root", "", "ue_database");
    
    if($conn->connect_error){
        die("Connection Failed: ". $conn->connect_error);
    }
    
    $sql = "SELECT `position_title`, `rank`, `department`, `hiring_start`, `deadline` FROM `job_posting`";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    $new_arr = "";
    $array = array();
    
    while($row = mysqli_fetch_assoc($result)){
      $array[] = $row;
    }

    for($count = 0; $count < $num; $count++){
      $new_arr .= implode(" ", $array[$count])."array";
    }
    echo json_encode($new_arr);
?>