<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes</title>
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
#row-2,#row-3{
  background-color:#ffffff;
}
#class-icon{
  width:30px;
}
#filter{
  margin-top: 2%;
  padding:10px;
}

#select,#class{
  border:1px solid #e11d48;
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
  </head>
  <body> 

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
      <div id="filter" class="d-flex justify-content-center">

            <div class="type">
              <div class="d-flex">
                <label for="class"> <img id="class-icon" src="images/class.png" alt=""> </label>
                  <select id="class" class="form-control" name="">
                      <option selected disabled>শ্রেনি নির্বাচন করুন</option>
                      <option value="" >hsc</option>
                      <option value="" >psc</option>
                      <option value="" >gk</option>
                      <option value="" >bcs</option>
                  </select>
              </div>
            </div>

            <span style="margin:1%;padding:5px;"> <img id="class-icon" src="images/directional-arrow.png" alt=""> </span>

            <div class="subject">
              <div class="d-flex">

                <select class="form-control" name="" id="select">
                    <option  selected disabled>বিষয় নির্বাচন করুন</option>
                    <option value="" >National</option>
                    <option value="" >math</option>
                    <option value="" >science</option>
                </select>
                  <label for="select" style="padding:5px;"> <img id="class-icon" src="images/books.png" alt=""> </label>
              </div>
            </div>
      </div>
  </div>
  <div class="row" id="row-3">
      <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-4 d-flex justify-content-around">
<?php
    include 'files/config.php';
    $sql = "SELECT * FROM notes ORDER BY id DESC";
    $res  = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if (mysqli_num_rows($res)>0) {
      while ($row = mysqli_fetch_assoc($res)) {


 ?>
        <div class="card" style="width: 18rem;">
            <img src="uploaded_images/<?php echo $row['img_name']; ?>" class="card-img-top" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div class="">
                  <h5 class="card-title" style="font-weight:bold;"><?php echo $row['topic']; ?></h5>
                </div>
                <div class="date">
                    <?php echo $row['date']; ?>
                </div>
              </div>
              <p class="card-text"><?php echo $row['title']; ?></p>
              <a role="button" href="uploaded_files/<?php echo $row['file_name']; ?>" class="btn btn-danger" download>Download <img src="images/download.png" width="30px" alt=""> </a>
            </div>
          </div>
<?php
}
}else{
  echo "No data Found";
}mysqli_close($conn);
 ?>


      </div>
      <br>
      <br>
  </div>

<?php include 'footer.php'; ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

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
