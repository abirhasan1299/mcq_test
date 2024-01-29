<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Routine</title>
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
.filter2{
  margin-left: 1%;
}
#subject,#category{
  border: 1px solid purple;
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
    <div class="col-sm-7">
        <p style="color:#475569;font-weight:bold;font-size:5rem;text-align:center;margin-top:7%;"> অনলাইন পরিক্ষা পর্ব </p>
    </div>
    <div class="col-sm-5">
    <center>  <img src="images/interrogation-room.gif" width="50%" alt=""></center>
    </div>
</div>

<div class="row" id="row-3">
  <div class="d-flex justify-content-start">
    <div class="icon">
        <img width="30px" src="images/selective.png" alt="">
    </div>
      <div class="filter">
            <form  action="#" method="post">
                <select id="category" class="form-control" name="category">
                    <option selected disabled>ক্যাটেগরি নির্বাচন করুন</option>
                    <option value="1">bcs</option>
                    <option value="2">ssc</option>
                    <option value="3">hsc</option>
                    <option value="4">medical</option>
                </select>
            </form>
      </div>
      <span style="margin-left:1%;"></span>
      <div class="arrow">
          <img src="images/arrow-right.png" width="30px" alt="">
      </div>
      <div class="filter2">
            <form  action="#" method="post">
                <select id="subject" class="form-control" name="subject">
                    <option selected disabled>বিষয় নির্বাচন করুন</option>
                    <option value="1">math</option>
                    <option value="2">eng</option>
                    <option value="3">bangla</option>
                    <option value="4">higher math</option>
                </select>
            </form>
      </div>
  </div>
  <br>
  <div class="d-flex justify-content-center">
        <div class="table">
          <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"><img src='images/books (1).png' width='30px'> বিষয়</th>
                  <th scope="col"><img src='images/deadline (1).png' width='30px'> সময় বাকি</th>
                  <th scope="col">যুক্ত হোন</th>
                </tr>
              </thead>
              <tbody id="dataload">

              </tbody>
              </table>
        </div>
  </div>
</div>
<?php include 'footer.php'; ?>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    function loadTable() {
        $.ajax({
          url:"ajax/loadallmcq.php",
          type:"POST",
          data:{},
          success:function (data) {
              $("#dataload").html(data);
          }
        });
    }
    loadTable();
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
