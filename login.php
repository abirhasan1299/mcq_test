<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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

#pc{
  width:40%;
}
#rl{
  width:30px;
}
#row-2{
  background-color:#bbf7d0;
}
.form{
  margin-top:5%;
}
#form-icon{
  width:20%;
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
  <div class="row">
    <!-----------------------------------Navbar-------------------------------->
      <?php include 'navbar.php'; ?>
    <!-----------------------------------End--Navbar-------------------------------->

  </div>
  <div class="row" id="row-2">
      <div class="d-flex justify-content-center">
            <div class="form">
              <div class="message">

              </div>
                <form class="form-control" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
                  <center><img id="form-icon" src="images/key.png" alt="">
                    <h3 style="color:#44403c;font-weight:bold;">লগইন</h3>
                  </center>
                      <input class="form-control" type="email" name="email" placeholder="ই-মেইল" required><br>
                      <input class="form-control" type="password" name="password" placeholder="পাসওয়ার্ড লিখুন" required><br>
                      <input class="form-control btn btn-primary" type="submit" name="submit" value="Login"><br>
                      <br>
                        <center> <a style="color:red;" href="register.php"> Not yet <b>Registered</b> ? </a> </center>
                      <br>

                </form>
                <br>
<?php
    include 'files/config.php';
    if (isset($_POST['submit'])) {

        $email = mysqli_real_escape_string($conn,$_POST["email"]) ;
        $password = mysqli_real_escape_string($conn,$_POST["password"]) ;

        $sql = "SELECT * FROM registration WHERE email='$email' && password='$password'";
        $result = mysqli_query($conn,$sql) or die("Query Failed: ".mysqli_error($conn));

    if(mysqli_num_rows($result)>0){

        while($row = mysqli_fetch_assoc($result)) {

              session_start();
              session_regenerate_id();
              $_SESSION['email'] = $row['email'];
              $_SESSION['password'] = $row['password'];
              $_SESSION['name'] = $row['name'];
              $_SESSION['id'] = $row['id'];

              header("location:http://classtest.rf.gd/index.php");

            }
        }else{
          echo '<div id="alert" class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong><i class="bi bi-exclamation-triangle-fill" style="color:red;"></i>  ভুল পাসওয়ার্ড অথবা ই-মেইল</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
}
?>
                <br>
                
            </div>
      </div>
  </div>
<?php include 'footer.php'; ?>
  </div>

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
