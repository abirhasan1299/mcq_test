<?php
function generateID($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length);
}

if (isset($_POST['upload'])) {
  include '../files/config.php';

  $marks = mysqli_real_escape_string($conn,$_POST['marks']);
  $author_id = mysqli_real_escape_string($conn,$_POST['author-id']);
  $unique_id = mysqli_real_escape_string($conn,$_POST['unique_id']);
  $subject = mysqli_real_escape_string($conn,$_POST['subject']);
  $category = mysqli_real_escape_string($conn,$_POST['category']);
  $passcode = mysqli_real_escape_string($conn,$_POST['passcode']);
  $start_date = mysqli_real_escape_string($conn,$_POST['start-date']);
  $start_time = mysqli_real_escape_string($conn,$_POST['start-time']);
  $end_date = mysqli_real_escape_string($conn,$_POST['end-date']);
  $end_time = mysqli_real_escape_string($conn,$_POST['end-time']);
  $indication = mysqli_real_escape_string($conn,$_POST['indication']);
  $negative_mark = mysqli_real_escape_string($conn,$_POST['negative-mark']);
  $exam_time = mysqli_real_escape_string($conn,$_POST['exam-time']);

  $s = "INSERT INTO mcqdata (marks,author_id,unique_id,subject,category,passcode,start_date,start_time,end_date,end_time,indication,negative_mark,exam_time) VALUES ('{$marks}','{$author_id}','{$unique_id}','{$subject}','{$category}','{$passcode}','{$start_date}','{$start_time}','{$end_date}','{$end_time}','{$indication}','{$negative_mark}','{$exam_time}')";

  $r = mysqli_query($conn,$s) or die("Query Failed:".mysqli_error($conn));

  mysqli_close($conn);

  include '../files/mcqConfig.php';

  $sql = "CREATE TABLE {$unique_id}(
    id int(255),
    question varchar(4000),
    a varchar(255),
    b varchar(255),
    c varchar(255),
    d varchar(255),
    answer varchar(255),
    explanation varchar(3000),
    image_name varchar(2000)
  )";


  $res  = mysqli_query($conn2,$sql) or die("Table Create Failed".mysqli_error($conn2));

  include '../files/answer.php';
  $asd = "CREATE TABLE {$unique_id}(
    id int(255),
    ques_no int(255),
    answer text(255),
    user_id int(255)
  )";

  $rx  = mysqli_query($conn3,$asd) or die("Table Create Failed".mysqli_error($conn3));

  for ($i=1; $i <=$marks ; $i++) {

      $id = $i;
      $question = mysqli_real_escape_string($conn2,$_POST["question{$i}"]);
      $image_name = $_FILES["image{$i}"]['name'];
      $a = mysqli_real_escape_string($conn2,$_POST["a{$i}"]);
      $b = mysqli_real_escape_string($conn2,$_POST["b{$i}"]);
      $c = mysqli_real_escape_string($conn2,$_POST["c{$i}"]);
      $d = mysqli_real_escape_string($conn2,$_POST["d{$i}"]);
      $answer = mysqli_real_escape_string($conn2,$_POST["answer{$i}"]);
      $explain = mysqli_real_escape_string($conn2,$_POST["explanation{$i}"]);

      $target_dir_img = "../mcq_images/";
      $target_file_img = $target_dir_img.basename($_FILES["image{$i}"]["name"]);

      $cmd = "INSERT INTO {$unique_id}(id,question,a,b,c,d,answer,explanation,image_name) VALUES('{$id}','{$question}','{$a}','{$b}','{$c}','{$d}','{$answer}','{$explain}','{$image_name}')";

      $run = mysqli_query($conn2,$cmd) or die("MCQ INSERT ERROR".mysqli_error($conn2));
      move_uploaded_file($_FILES["image{$i}"]["tmp_name"], $target_file_img);


  }
  mysqli_close($conn2);
  mysqli_close($conn3);
  header("location:home.php");

}

 ?>
