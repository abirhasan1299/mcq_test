<!doctype html>
<?php include 'mcq-compilation.php'; ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mcq</title>
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
      #row-2{
        background:#22c55e ;
      }
      .required-data{
        margin-top: 2%;
        padding: 5px;
      }
      .mcq-form{
        padding:2px;
      }
      #form{
        padding: 10px;
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
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off" enctype="multipart/form-data">
  <div class="row" id="row-2">
      <div class="col-sm-4">
          <div class="required-data">

                      <div class="d-flex justify-content-start">

                          <input class="form-control" type="number" id="marks" name="marks" placeholder="মোট MCQ সংখ্যা">
                          <span style="margin-left:2%;"></span>
                          <input class="form-control btn btn-info" type="button" id="generate-mcq" value="Generate" onclick="generate_mcq()">

                      </div>

                        <br>

                        <input type="hidden" name="author-id" value="5">
                        <input type="hidden" name="date" value="<?php echo date('d-M-Y'); ?>">
                        <input type="hidden" name="unique_id" value="<?php echo generateID(); ?>">
                      <div class="d-flex justify-content-start">

                          <input class="form-control" type="text" name="subject" placeholder="Subject">

                          <span style="margin-left:2%;"></span>

                          <input class="form-control" type="text" name="category" placeholder="Category">


                      </div>
                      <br>
                      <div class="d-flex justify-content-start">

                          <input class="form-control" type="number" name="exam-time" placeholder="পরিক্ষার সময় (মিনিট)">

                          <span style="margin-left:2%;"></span>

                          <input class="form-control" type="text" name="passcode" placeholder="Set Passcode">
                      </div>

                      <br>

                      <div class="d-flex justify-content-between">
                          <div class="date">
                            <label for="start-date" style="color:red;"> <img src="../images/schedule.png" style="width:25px;" alt=""> পরীক্ষার তারিখ</label>
                            <input class="form-control" id="start-date" type="date" name="start-date" >
                          </div>

                          <span style="margin-left:2%;"></span>

                          <div class="time">
                            <label for="start-time" style="color:red;"> <img src="../images/clock.png" style="width:25px;" alt=""> শুরু হবেঃ </label>
                            <input  class="form-control" id="start-time" type="time" name="start-time" >
                          </div>
                      </div>
                      <br>
                      <input class="form-control" type="number" name="negative-mark" placeholder="Negative Mark (প্রতি প্রশ্নের জন্য) **ঐচ্ছিক**">
                      <!---End time of exam---------------------------->

                      <div class="d-flex justify-content-between">
                          <div class="end-date">
                            <label for="end-date" style="color:red;"> <img src="../images/schedule.png" style="width:25px;" alt="">  শেষ তারিখ</label>
                            <input class="form-control" id="end-date" type="date" name="end-date" >
                          </div>

                          <span style="margin-left:2%;"></span>

                          <div class="end-time">
                            <label for="end-time" style="color:red;"> <img src="../images/clock.png" style="width:25px;" alt=""> শেষ হবেঃ </label>
                            <input class="form-control" id="end-time" type="time" name="end-time" >
                          </div>

                      </div>
                      <br>
                      <textarea name="indication" rows="8" cols="80" class="form-control" placeholder="পরিক্ষার্থীদের জন্য নির্দেশনা"></textarea>
                      <br>
                      <input type="submit" name="upload" value="Upload Question" class="btn btn-danger">
                      <br><br>

      </div>
  </div>
  <div class="col-sm-8" id="output">

  </div>

</div>
</form>
<script type="text/javascript">
  function generate_mcq() {
      let x = document.getElementById('marks').value;
      let n = parseInt(x);
      for (let i = 1; i <=n; i++) {
            document.getElementById('output').innerHTML +='<div class="mcq-form"><div class="form-control"><div class="d-flex justify-content-start"><span style="color:steelblue;font-size:25px;">'+i+'</span><input class="form-control" type="text" name="question'+i+'" placeholder="প্রশ্ন টাইপ করুন"></div><br><label for="img" style="color:purple;"><img src="../images/gallery.png" width="25px" alt=""> ছবি-ভিত্তিক প্রশ্ন (ঐচ্ছিক):</label><input id="img" type="file" name="image'+i+'" class="form-control"><br><div class="">a:<input class="form-control" type="text" name="a'+i+'" placeholder="অপশন-১">b:<input class="form-control" type="text" name="b'+i+'" placeholder="অপশন-২">c:<input class="form-control" type="text" name="c'+i+'" placeholder="অপশন-৩">d:<input class="form-control" type="text" name="d'+i+'" placeholder="অপশন-৪"></div><br><div class="d-flex justify-content-between"><select class="form-control" name="answer'+i+'"><option selected disabled >সঠিক উত্তর</option><option value="a">a</option><option value="b">b</option><option value="c">c</option><option value="d">d</option></select><input class="form-control" type="text" name="explanation'+i+'" placeholder="উত্তরের ব্যাখ্যা (ঐচ্ছিক)"></div></div></div>';
        }

      document.getElementById('marks').style.display = "none";
      document.getElementById('generate-mcq').style.display = "none";
  }

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
