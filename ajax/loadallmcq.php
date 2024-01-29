<?php

  include '../files/config.php';
  include '../files/functions.php';

  $sql = "SELECT * FROM mcqdata ORDER BY id DESC";
  $query = mysqli_query($conn,$sql) or die("Load Query Failed".mysqli_error($conn));
  $str = "";

  if (mysqli_num_rows($query)>0){
    while ($row = mysqli_fetch_assoc($query)) {

        $time = timeRemain("{$row['end_date']} {$row['end_time']}");

        $str .= "<tr>
          <th scope='row'>{$row['id']}</th>
          <td> {$row['subject']}</td>
          <td>{$time}</td>
          <td> <a href='live-exam.php?ref={$row['unique_id']}' role='button' class='btn btn-info'>Start <img src='images/chain.png' width='25px' ></a> </td>
        </tr>";
    }
    echo $str;
  }else{
    echo "<h2 style='color:red;text-align:center;'>কোনো লাইভ এক্সাম নেই !</h2>";
  }



 ?>
