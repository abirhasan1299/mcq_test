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
        src: url('../font/kalpurush.ttf') format("truetype");
      }
      body{
        font-family: sans-serif,kalpurush;
      }
      #x{
        margin-top: 2%;
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
      <?php include 'navbar.php'; ?>
  </div>
  <div class="row">
      <div id="x" class="d-flex justify-content-between">

          <div class="">
              <h5 style="color:red;">**নিম্নে উত্তরপত্র দেওয়া হলো**</h5>
          </div>
          <div class="submit">
            <?php
                include '../files/config.php';
                $ui = mysqli_query($conn,"SELECT ref,user_id FROM resultsheet WHERE user_id={$_GET['cheker']} AND ref = '{$_GET['ref']}'") or die(mysqli_error($conn));
                if (mysqli_num_rows($ui)>0) {
                    echo "<b style='color:purple;'>Already Checked !</b>";
                }else{
             ?>
              <form  action="<?php $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
                  <input class="btn btn-success" type="submit" name="submit" value="Submit Result?">
              </form>
  <?php } ?>
          </div>
      </div>
      <div class="bank">
        <?php
            include '../files/mcqConfig.php';
            $count = 0;
            $r = mysqli_query($conn2, "SELECT * FROM {$_GET['ref']}") or die(mysqli_error($conn));
            if (mysqli_num_rows($r)>0) {
                while ($row = mysqli_fetch_assoc($r)) {

                  include '../files/answer.php';

                  $v = "SELECT * FROM {$_GET['ref']} WHERE ques_no={$row['id']} AND user_id={$_GET['cheker']}";
                  $z = mysqli_query($conn3,$v) or die(mysqli_error($conn));
                  if (mysqli_num_rows($z)>0) {
                      while ($answer = mysqli_fetch_assoc($z)) {
                        if ($row['answer']==$answer['answer']) {
                            $count +=1;
                        }
         ?>
          <div class="mcq">
              <div class="question">
                <img src="../mcq_images/<?php echo $row['image_name']; ?>" width="200px" alt="">
                <p><?php echo $row['id'].". ".$row['question'] ?></p>
              </div>
              <div id="choices" class="">
                  <div class="1">
                    <?php
                    if ($answer['answer']=='a') {
                          echo "<p style='background:#fb7185;font-weight:bolder;'>a.".$row['a']."</p>";
                    }else{
                      echo "<p>a.".$row['a']."</p>";
                    }
                    ?>
                  </div>
                  <div class="2">
                    <?php
                    if ($answer['answer']=='b') {
                          echo "<p style='background:#fb7185;font-weight:bolder;'>b.".$row['b']."</p>";
                    }else{
                      echo "<p>b.".$row['b']."</p>";
                    }
                    ?>
                  </div>
                  <div class="3">
                    <?php
                    if ($answer['answer']=='c') {
                          echo "<p style='background:#fb7185;font-weight:bolder;'>c.".$row['c']."</p>";
                    }else{
                      echo "<p>c.".$row['c']."</p>";
                    }
                    ?>
                  </div>
                  <div class="4">
                  <?php
                      if ($answer['answer']=='d') {
                            echo "<p style='background:#fb7185;font-weight:bolder;'>d.".$row['d']."</p>";
                      }else{
                        echo "<p>d.".$row['d']."</p>";
                      }
                      ?>
                  </div>
                  <div class="right">
                      <p style="color:green;">উত্তরঃ <?php echo $row['answer']; ?></p>
                  </div>
              </div>
              <div class="explain">
                  <p style="font-weight:bold;">Ex. <?php echo $row['explanation']; ?></p>
              </div>
          </div>

          <?php
        }
    }
        }
    }else {
      echo "Your Answer-Script is NULL";
      echo "Contact with Your Teacher";
    }
?>
<?php
if (isset($_POST['submit'])){

    $rx = "INSERT INTO resultsheet(ref,user_id,total_marks) VALUES('{$_GET['ref']}','{$_GET['cheker']}','{$count}')";
    mysqli_query($conn,$rx) or die(mysqli_error($conn));
    echo '<script type="text/javascript">
      window.location.replace("http://classtest.rf.gd/admin/home.php");
    </script>';
}
 ?>

<h2><center style="color:red; font-weight:bolder;">প্রাপ্ত নম্বর - <?php echo $count; ?></center></h2>
<br><br><br><br>
      </div>
  </div>
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
