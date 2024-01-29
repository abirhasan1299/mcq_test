<!doctype html>
<?php
            if (isset($_POST['submit'])) {
                include 'files/config.php';
                $name = mysqli_real_escape_string($conn,$_POST["username"]);
                $email = mysqli_real_escape_string($conn,$_POST['email']);
                $phone = mysqli_real_escape_string($conn,$_POST['phone']);
                $password = mysqli_real_escape_string($conn,$_POST['password']);
                $password1 = mysqli_real_escape_string($conn,$_POST['password1']);
                $date = mysqli_real_escape_string($conn,$_POST['date']);

                $sql = "INSERT INTO registration(name,email,phone,password,date) VALUES ('{$name}','{$email}','{$phone}','{$password}','{$date}')";
                $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                mysqli_close($conn);
                header("location:login.php");

            }

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
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
  #gif-book {
    width:70%;
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
  width:15%;
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

      <form class="form-control" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
        <center><img id="form-icon" src="images/add-friend.png" alt="">
          <h3 style="color:#44403c;font-weight:bold;">রেজিস্ট্রেশন</h3>
        </center>

          <input class="form-control" id="username" type="text" name="username" placeholder="সম্পূর্ন নাম" required><br>
          <input type="hidden" name="date" value="<?php echo date('d-M-Y'); ?>">
          <input class="form-control" id="email" type="email" name="email" placeholder="ই-মেইল" required><br>
          <input class="form-control" id="phone" type="number" name="phone" placeholder="মোবাইল নাম্বার" required>
          <strong style="margin-left:3%;" id="phone-output"></strong>
          <input class="form-control" id="pass" type="password" name="password" placeholder="পাসওয়ার্ড সেট করুন" required>
          <strong style="margin-left:3%;" id="output"></strong>
          <input class="form-control" id="pass1" type="password" name="password1" placeholder="পুনরায় পাসওয়ার্ডটি টাইপ করুন" required>
          <strong style="margin-left:3%;" id="confirm"></strong>
          <br>
          <button  type="submit" id="submit" name="submit" class="form-control btn btn-danger">Done</button>

          <br>

          <br>
      </form>
      <br><br>
    </div>
  </div>

</div>
<?php include 'footer.php'; ?>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript">

  $("#pass1").on('keyup',function() {
      var p1 = $("#pass").val();
      var p2 = $(this).val();
      if (p1 != p2) {
        $("#confirm").html("<b style='color:red;'> **পাসওয়ার্ডটি ভিন্ন** </b>");
        $('#submit').prop("disabled",true);
      } else{
        $("#confirm").html(" ");
        $('#submit').removeAttr("disabled",true);
      }
  });

  $('#pass').on('keyup',function () {

     var p  = $(this).val();
     if (p.length<8){
       $("#output").html("<b style='color:red;'>**সর্বনিম্ন ৮টি অক্ষর** </b>");
       $('#submit').prop("disabled",true);

     }else{
       $("#output").html(" ");
       $('#submit').removeAttr("disabled");
     }

  });

  $('#phone').on('keyup',function(){
    let validity = false;
    var phone = $(this).val().toString();
    const phone_code = ['019','018','016','013','014','015','017'];
    var provided_code = phone.substring(0,3);
    console.log(provided_code);
    for (let i=0;i<7;i++){
      if (phone_code[i]==provided_code){
        validity = true;
      }
    }

    if (phone.length!=11 || validity==false){
        $("#phone-output").html("<b style='color:red;'>**অযোগ্য নাম্বার** </b>");
        $('#submit').prop('disabled',true);
        $('#pass').prop("disabled",true);
        $('#pass1').prop("disabled",true);
    }else{
      $("#phone-output").html(" ");
      $('#submit').removeAttr("disabled");
      $('#pass').removeAttr("disabled");
      $('#pass1').removeAttr("disabled");
    }
  });

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
