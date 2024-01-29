
<html lang="en">
<?php
  $tm =0;
 ?>
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
#row-2{
background-color:#bbf7d0;
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
  <table class="table table-hover">
      <tbody>
        <tr>
          <th>SL</th>
          <th>নাম</th>
          <th>মোট নম্বর</th>
          <th>সঠিক</th>
          <th>ভুল</th>
          <th>প্রাপ্ত নম্বর</th>
          <th></th>
        </tr>
  <?php
        include 'files/config.php';
        $s = "SELECT * FROM attendence WHERE ref='{$_GET['key']}'";
        $q = mysqli_query($conn,$s) or die(mysqli_error($conn));

        if (mysqli_num_rows($q)>0) {
            while ($r = mysqli_fetch_assoc($q)) {

   ?>
        <tr>
          <th><?php echo $r['id']; ?></th>
          <td>
            <?php
                $x = "SELECT id,name FROM registration WHERE id={$r['user']}";
                $y = mysqli_query($conn,$x) or die(mysqli_error($conn));
                if (mysqli_num_rows($y)>0) {
                    while ($v = mysqli_fetch_assoc($y)) {
                      echo $v['name'];
                    }}
             ?>
          </td>
          <td>
            <?php
                $x = "SELECT marks,unique_id FROM mcqdata WHERE unique_id='{$_GET['key']}'";
                $y = mysqli_query($conn,$x) or die(mysqli_error($conn));
                if (mysqli_num_rows($y)>0) {
                    while ($v = mysqli_fetch_assoc($y)) {
                      $marks = $v['marks'];
                      echo $v['marks'];
                    }}
             ?>

          </td>
          <td>
            <?php
              $x = "SELECT * FROM resultsheet WHERE user_id={$r['user']} AND ref='{$r['ref']}'";
              $y = mysqli_query($conn,$x) or die(mysqli_error($conn));
              if (mysqli_num_rows($y)>0) {
                  while ($rai = mysqli_fetch_assoc($y)) {
                    $tm =$rai['total_marks'];
                    echo $rai['total_marks'];
                  }

                }else{
                  echo "<span style='color:red'>অপেক্ষা করুন !</span>";
                }
             ?>
          </td>
          <td>
            <?php

                echo abs($marks-$tm) ;


              ?>
          </td>
          <td><?php

                echo $tm;

           ?></td>
          <td>
              <?php
                  if ($_SESSION['id']==$r['user']) {


               ?>
               <a href="mysheet.php?ref=<?php echo $_GET['key']; ?>&cheker=<?php echo $r['user']; ?>" role="button" class="btn btn-danger">নিজ খাতা দেখুন</a>
             <?php }else{ ?>
                  <img src="images/lock.png" width="30px" alt="">
             <?php } ?>
          </td>
        </tr>

  <?php     }
  } ?>
      </tbody>
  </table>
</div>
<?php include 'footer.php'; ?>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript">
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
