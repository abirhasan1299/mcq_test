<?php
  include '../files/session.php';

  echo "<h2 style='color:red;font-weight:bold;text-align:center;margin-top:5%;'>". $_SESSION['name']." , অপেক্ষা করুন ! </h2>";

 ?>
 <div>
     <h3 style='text-align:center;'>Redirected to home: <span id="time" style="color:green;"> </span></h3>
 </div>
 <script type="text/javascript">

 var time = 15;
 setInterval(function () {
    time--;
    document.getElementById("time").innerHTML = time+"s";
    if(time<=0){
      window.location.replace('http://classtest.rf.gd');
    }

 },1000);
 </script>
