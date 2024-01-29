<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
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
  .box{
    margin-top:5%;
  }
  .register a{
    padding:20px;
    width:200px;
    font-size:20px;
  }
  .login a{
    padding:20px;
    width:200px;
    font-size:20px;
  }
  body{
    font-family: sans-serif,kalpurush;
    background:#0d9488;
  }

  #gif-book {
    width:70%;
}
#manager{
  width:50px;
}
#pc{
  width:40%;
}
#rl{
  width:30px;
}
#row-2{
  background-color:#ffffff;
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

</style>
  </head>
  <body>
<div class="loader-container">
      <div class="loader">
          <!img src="images/loader.gif" width="200px" height="200px">
      </div>
    </div>
<div class="container" id="page-content">
    
  <div class="row">
    <!-----------------------------------Navbar-------------------------------->
      <?php include 'navbar.php'; ?>
    <!-----------------------------------End--Navbar-------------------------------->
  </div>
  <div class="row" id="row-2">
<marquee style="color:red;">**এসএসসি পরিক্ষা অনুষ্ঠিত হবে ১৫ই ফেব্রুয়ারি ২০২৪ (শিক্ষা অধিদপ্তর)**</marquee>
<div class="col-sm-6">
      <div class="box">
        <center> <img id="pc" src="images/world-book-day.png" alt=""> </center>
        <br>
      <?php
      if(!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['name'])){
       ?>
        <div class="d-flex justify-content-center" id="join">
            <div class="register">
                <a href="register.php" role="button" class="btn btn-danger"><img id="rl" src="images/add-user.png" alt=""> রেজিস্টার</a>
            </div>
            <span style="margin-left:3px;"></span>
            <div class="login">
                <a href="login.php" role="button" class="btn btn-primary"><img id="rl" src="images/profile.png" alt=""> লগইন</a>
            </div>
        </div>
<?php }else{ ?>
          <h3 style="text-align:center;color:#6d28d9;font-weight:bolder;">স্বাগতম- <?php echo $_SESSION['name']; ?></h3>
<?php } ?>
      </div>
      <br><br>
</div>
<div class="col-sm-6">
    <center>
      <div class="gif-book">
          <img id="gif-book" src="images/students.gif" alt="">
      </div>
        <h1>সবার জন্য শিক্ষা হোক উন্মুক্ত ও সহজ</h1>
    </center>
    <br><br>
</div>
  </div>
  
  <?php include 'footer.php'; ?>
  </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script type="text/javascript">
       const loadContainer = document.querySelector('.loader-container');
       const pagecontent = document.querySelector('#page-content');

       window.addEventListener('load',()=>{
        loadContainer.classList.add('hidden');
        pagecontent.classList.add('visible');
       });
    </script>
  </body>
</html>
