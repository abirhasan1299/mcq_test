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
      <div class="col-sm-6">
          <div class="table">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">বিষয়</th>
                    <th scope="col">মোট পরিক্ষার্থী</th>
                    <th scope="col">উত্তরপত্র দেখুন</th>
                  </tr>
                </thead>
                <tbody>
        <?php
            include '../files/config.php';
            $sql = "SELECT id,subject,category,unique_id FROM mcqdata ORDER BY id DESC";
            $q = mysqli_query($conn,$sql) or die(mysqli_error($conn));

            if (mysqli_num_rows($q)) {
              while ($row = mysqli_fetch_assoc($q)) {

         ?>
                  <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['category']."-".$row['subject']; ?></td>
                    <td>
                      <?php
                          $x = "SELECT id,ref FROM attendence WHERE ref='{$row['unique_id']}'";
                          $y =  mysqli_query($conn,$x) or die(mysqli_error($conn));
                          $count =0;
                          if (mysqli_num_rows($y)) {
                              while ($t = mysqli_fetch_assoc($y)) {
                                  $count +=1;
                              }
                          }
                          echo $count;
                       ?>
                    </td>
                    <td> <a href="check.php?key=<?php echo $row['unique_id']; ?>" role="button" class="btn btn-outline-danger">Check</a> </td>
                  </tr>
        <?php
      }
    }
          ?>
                </tbody>
                </table>
          </div>
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