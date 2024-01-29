<style media="screen">
#m-icon{
  width:70px;
}
#icon-notes{
  width:30px;
}
.nav-item a{
  font-size: 20px;
  font-weight: bold;
}
</style>
<nav class="navbar navbar-expand-lg " style="background-color:#22c55e;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img id="m-icon" src="images/student.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="notes.php"><img id="icon-notes" src="images/sticky-notes.png" alt="">নোটস্‌‌</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#"><img id="icon-notes" src="images/test.png" alt=""> এমসিকিউ</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="online-exam.php"><img id="icon-notes" src="images/online-test.png" alt=""> অনলাইন-পরিক্ষা</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="sscexamroutine.php"><img id="icon-notes" src="images/routine.png" alt="">এসএসসি-পরিক্ষা-২৪</a>
        </li>
<?php
        session_start();
        session_regenerate_id();
        if(!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['name'])){

        }else{

?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="images/myself.png" id="icon-notes" alt=""> প্রোফাইল
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#" style="color:#16a34a;"><img id="icon-notes" src="images/upcoming.png" alt=""> নিকতবর্তী-পরিক্ষাসমূহ</a></li>
            <li><a class="dropdown-item" href="result.php" style="color:#16a34a;"><img id="icon-notes" src="images/results.png" alt=""> সকল-পরিক্ষার-ফলাফল</a></li>
            <li><a class="dropdown-item" href="files/logout.php" style="color:red;"><img id="icon-notes" src="images/logout.png" alt=""> লগআউট</a></li>
          </ul>
        </li>
<?php } ?>
      </ul>
    </div>
  </div>
</nav>
