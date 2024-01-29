<!doctype html>
<?php
include 'files/session.php';
include "files/mcqConfig.php";
include 'files/config.php';
include 'files/answer.php';


$q = mysqli_query($conn,"SELECT ref,user FROM attendence WHERE ref='{$_GET['ref']}' AND user='{$_SESSION['id']}'") or die(mysqli_error($conn));

if ((mysqli_num_rows($q)>0) && isset($_SESSION['password']) && isset($_SESSION['email'])) {

    header('location:error/error1.php');

}elseif(isset($_SESSION['password']) && isset($_SESSION['email'])){
    mysqli_query($conn,"INSERT INTO attendence(ref,user) VALUES('{$_GET['ref']}','{$_SESSION['id']}')") or die(mysqli_error($conn));
}else{
  header("location:login.php");
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Exam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style media="screen">
  *{
    margin: 0px;
    padding: 0px;
  }
  @font-face {
    font-family: kalpurush;
    src: url("font/kalpurush.ttf") format("truetype");
  }
  body{
    font-family: sans-serif,kalpurush;
    background:#0d9488;
}
#row-2{
  background-color:#ffffff;
}
.mcqbox{
  width:60%;
  font-size: 20px;
}
.mcqbox p{
  font-weight: bold;
}
.mcq{
    margin:5px;
}
#mcq{
  padding-bottom: 5px;
}
.marks,.exam-time p{
    font-size:18px;
    font-weight: bold;
}
#timer{
  color:red;
  font-weight: bold;
}
</style>
</head>
  <body>
<style>

.loader-container{
	position: fixed;
	inset: 0;
	z-index: 999;
	background-color: ghostwhite;
	display: grid;
	place-content: center;
}
.loader{
	border:.7rem solid teal;
	border-left-color: transparent;
	border-right-color: transparent;
	border-radius:50%;
	animation: .8s ease infinite alternate spinner;	
	width:300px;
	height:300px;
}
@keyframes spinner{
	from {
		transform: rotate(0deg) scale(1.0);
	}
	to {
		transform: rotate(1turn) scale(1.2);
	}
}
.loader-container.hidden{
	opacity: 0;
	visibility: hidden;
}
#page-content{
	opacity: 0;
	transform: translate3d(0, -1rem, 0);
}
#page-content.visible{
	opacity: 1;
	transform: translate3d(0, 0, 0);
}

</style> 

<div class="loader-container">
      <div class="loader">
         
      </div>
</div>
        
<div class="container" id="page-content">
<form id="myform" class="form-control" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
<div class="row" id="row-2">
  <p style="color:red;text-align:center;font-size:18px;">**Don't Refresh the page and do not leave before Finished the exam**</p>
  <p style="color:red;text-align:center;font-size:15px;">**এই পৃষ্ঠা রিফ্রেশ করলে কিংবা ছেড়ে চলে গেলে পরিক্ষা বাতিল বলে গন্য হবে**</p>

  <?php

        $s = "SELECT * FROM mcqdata WHERE unique_id='{$_GET['ref']}'";
        $r = mysqli_query($conn,$s) or die("FETCHING FAILED".mysqli_error($conn));
        if (mysqli_num_rows($r)>0) {
          while ($data = mysqli_fetch_assoc($r)) {
  ?>
    <div class="d-flex justify-content-center">
        <div class="sub&cat">
            <h3> <?php echo $data['subject']; ?> - <?php echo $data['category']; ?> </h3>
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <div class="marks">
            <p>মোট নম্বরঃ <?php $mks =$data['marks'];  echo $data['marks']; ?></p>
        </div>
        <div id="timer">
            <input type="hidden" id="time" value="<?php echo $data['exam_time']; ?>">
        </div>
        <div class="exam-time">
            <button type="submit" name="submit" id="submit" class="form-control btn btn-success">Finish Exam</button>
        </div>
    </div>
<?php }} ?>
</div>
  <div class="row" id="row-2">

          <div class="mcqbox">
<?php

  $sql = "SELECT * FROM {$_GET['ref']}";
  $query = mysqli_query($conn2,$sql) or die("MCQ FETCHING Failed".mysqli_error($conn2));
  if (mysqli_num_rows($query)>0) {
    while ($row = mysqli_fetch_assoc($query)) {

 ?>
                <img src="mcq_images/<?php echo $row['image_name']; ?>" width="200px" alt="">
                <p><?php echo $row['id']; ?>. <?php echo $row['question']; ?></p>
                <div class="" id="mcq">
                      <div class="mcq">
                          <input type="radio" name="ans<?php echo $row['id']; ?>" value="a"> <?php echo $row['a']; ?>
                      </div>
                      <div class="mcq">
                          <input type="radio" name="ans<?php echo $row['id']; ?>" value="b"> <?php echo $row['b']; ?>
                      </div>
                      <div class="mcq">
                          <input type="radio" name="ans<?php echo $row['id']; ?>" value="c"> <?php echo $row['c']; ?>
                      </div>
                      <div class="mcq">
                          <input type="radio" name="ans<?php echo $row['id']; ?>" value="d"> <?php echo $row['d']; ?>
                      </div>
                </div>
<?php }}  ?>
          </div>
          <br><br>
          <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
      </form>
<?php
if (isset($_POST['submit'])) {

    for ($i=1; $i <=$mks ; $i++) {

      $quesNo =$i;
      $ans = mysqli_real_escape_string($conn3,$_POST["ans{$i}"]);
      $user_id = mysqli_real_escape_string($conn3,$_POST["user_id"]);

      $l = "INSERT INTO {$_GET['ref']}(ques_no,answer,user_id) VALUES('{$quesNo}','{$ans}','{$user_id}')";

      $q = mysqli_query($conn3,$l) or die(mysqli_error($conn3));

    }

    echo '<script type="text/javascript">window.location.replace("http://classtest.rf.gd/online-exam.php");</script>';
}
?>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $('#submit').click(function () {
          $(this).hide();
    });
});

function startTimer(duration, display) {

          var timer = duration, minutes, seconds;
          setInterval(function () {

              minutes = parseInt(timer / 60, 10);
              seconds = parseInt(timer % 60, 10);

              minutes = minutes < 10 ? "0" + minutes : minutes;
              seconds = seconds < 10 ? "0" + seconds : seconds;

              display.textContent = minutes + ":" + seconds;

              if (--timer < 0) {
                  document.getElementById('timer').innerHTML = "<h3 style='color:red;'>EXPIRED</h3>";

                  document.getElementById('submit').click();


              }
          }, 1000);
}

        window.onload = function () {
            var y = document.getElementById('time').value;
            var Minutes = 60 * y,
                display = document.querySelector('#timer');
            startTimer(Minutes, display);
        }


</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script type="text/javascript">
       const loadContainer = document.querySelector('.loader-container')
       const pagecontent = document.querySelector('#page-content')

       window.addEventListener('load',()=>{
        loadContainer.classList.add('hidden')
        pagecontent.classList.add('visible')
       })
    </script>
  </body>
</html>

