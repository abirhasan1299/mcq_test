<style media="screen">
  #main-icon{
    width:40px;
  }
  #logout-link{
    font-size: 20px;
    font-weight: bolder;
    color:#1e293b;
    text-decoration: none;
  }
  #logout{
    width:30px;
  }
  #tools,#test-mcq,#notebook{
    width:30px;
  }
</style>
<nav class="navbar navbar-expand-lg" style="background:#0891b2;" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img id="main-icon" src="../images/admin.png" alt=""> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><img id="test-mcq" src="../images/test (1).png" alt=""> MCQ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../images/settings.png" alt="" id="tools"> Tools
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="mcq-exam.php"><img id="test-mcq" src="../images/test (1).png" alt=""> Take MCQ Exam</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="upload-notes.php"><img id="notebook" src="../images/notebook.png" alt=""> Upload Notes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" >Others</a>
        </li>
      </ul>
      <form class="d-flex">
        <a href="#" id="logout-link" class="btn btn-outline-danger"> <img src="" alt=""><img id="logout" src="../images/logout.png" alt=""> লগআউট</a>
      </form>
    </div>
  </div>
</nav>
