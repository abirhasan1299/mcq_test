<!doctype html>
<?php
  if (isset($_POST['submit'])) {

      include '../files/config.php';
      $author_id =  mysqli_real_escape_string($conn,$_POST['author-id']);
      $category = mysqli_real_escape_string($conn,$_POST['category']);
      $subject = mysqli_real_escape_string($conn,$_POST['subject']);
      $topic = mysqli_real_escape_string($conn,$_POST['topic']);
      $title = mysqli_real_escape_string($conn,$_POST['title']);
      $date = mysqli_real_escape_string($conn,$_POST['date']);
      $author_name = mysqli_real_escape_string($conn,$_POST['author-name']);
      $image_name = $_FILES['image']['name'];
      $file_name = $_FILES['pdf']['name'];

      $target_dir_img = "../uploaded_images/";
      $target_file_img = $target_dir_img.basename($_FILES["image"]["name"]);

      $target_dir_file = "../uploaded_files/";
      $target_file_file = $target_dir_file.basename($_FILES["pdf"]["name"]);


      $sql = "INSERT INTO notes(author_id,author_name,category,subject,topic,title,date,img_name,file_name) VALUES('{$author_id}','{$author_name}','{$category}','{$subject}','{$topic}','{$title}','{$date}','{$image_name}','{$file_name}') ";
      $res = mysqli_query($conn,$sql) or die('Query Failed: '.mysqli_error($conn));

      move_uploaded_file($_FILES["image"]["tmp_name"], $target_file_img);
      move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file_file);

      header("location:home.php");

  }
?>
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
      #row-2{
        background:#22c55e ;
      }
      form{
        padding:10px;
      }
      .form{
        margin-top: 5%;
        background: #ffffff;
        width:50%;
        padding: 10px;
        border-radius: 10px;
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
  <div class="row" id="row-2">
      <div class="d-flex justify-content-center">
          <div class="form">

              <form class="form-control" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">

                <center> <img style="width:70px;margin-top:3%;" src="../images/add.png" alt=""> </center>

                  <select class="form-control" name="category" id="category" required>
                      <option value="" selected disabled>ক্যাটেগরি নির্বাচন করুন</option>
                      <option value="hsc">hsc</option>
                      <option value="ssc">ssc</option>
                      <option value="psc">psc</option>
                      <option value="bcs">bcs</option>
                      <option value="job">job</option>
                  </select>
                  <br>
                  <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                  <br>
                  <input class="form-control" type="text" name="topic" placeholder="টপিকের নাম" required>
                  <label for="cover-image" style="color:red;margin-left:2%;font-size:15px;">*Cover Photo of Topic: </label>
                  <input class="form-control" type="file" id="cover-image" name="image" required><br>
                  <textarea class="form-control" name="title" rows="8" cols="80" placeholder="নির্দেশনা লিখুন" required></textarea>
                  <label for="file" style="color:red;margin-left:2%;font-size:15px;">*File (.pdf): </label>
                  <input class="form-control" id="file" type="file" name="pdf" required> <br>
                  <input type="hidden" name="author-name" value="Abir Hasan">
                  <input type="hidden" name="author-id" value="5">
                  <input type="hidden" name="date" value="<?php echo date("d-M-Y"); ?>">
                  <input type="submit" id="submit" class="form-control btn btn-success" name="submit" value="Upload">
              </form>
          </div>
      </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script type="text/javascript">

//---------------For Cover Image-------------------------------
$("#cover-image").change(function () {

  let check = true;
  const fsize = this.files[0].size;

  var validExtensions = ["jpg","jpeg","png","tmp"];
  var file = $(this).val().split('.').pop();
  if (validExtensions.indexOf(file) == -1) {
      alert("ছবির এই ফরমেট গ্রহনযোগ্য : "+validExtensions.join(', '));
      check = false;
  }

  if (fsize > (1024*1024)) {
      alert("ছবিটি ১ মেগাবাইট থেকে ছোট হতে হবে");
      check = false;
  }

  if (check ==false) {
      $("#submit").prop("disabled",true);
  }else{
      $("#submit").removeAttr("disabled",true);
  }

});
//---------------For PDF File-------------------------------
$("#file").change(function () {

  var validExtensions = ["pdf"];
  var file = $(this).val().split('.').pop();
  if (validExtensions.indexOf(file) == -1) {
      alert("শুধুমাত্র পিডিএফ (.pdf) গ্রহনযোগ্য");
      $("#submit").prop('disabled',true);
  }else{
      $("#submit").removeAttr('disabled',true);
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
