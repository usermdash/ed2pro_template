<?php
  session_start();

  if (!isset($_SESSION['a_id'])) {

      header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ed2pro Admin Area</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.php" class="navbar-brand">Ed2pro</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="index.php" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="questions.php" class="nav-link">Questions</a>
          </li>
          <li class="nav-item px-2">
            <a href="categories.php" class="nav-link">Categories</a>
          </li>
          <li class="nav-item px-2">
            <a href="users.php" class="nav-link">Users</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i> Welcome
              <span id="user">Admin</span>
            </a>
            <div class="dropdown-menu">
              <a href="profile.php" class="dropdown-item">
                <i class="fa fa-user-circle"></i> Profile
              </a>
              <a href="settings.php" class="dropdown-item">
                <i class="fa fa-gear"></i> Settings
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="fa fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1> Question</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mr-auto">
          <a href="index.php" class="btn btn-light btn-block">
            <i class="fa fa-arrow-left"></i> Back To Dashboard
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-success btn-block" id="save">
            <i class="fa fa-check"></i> Save Changes
          </a>
        </div>
        <div class="col-md-3">
          <a href="#" class="btn btn-danger btn-block" id="delete">
            <i class="fa fa-remove"></i> Delete Question
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Edit Question</h4>
            </div>

            <?php
              include './includes/db.inc.php';
              $questionID = $_REQUEST['questionID'];

              // $q1 = "SELECT * FROM `question` WHERE `que_id` = $questionID";
              $q1 = "SELECT * FROM `question`,`subject` WHERE `question`.`que_id` = $questionID AND `question`.`sub_id` = `subject`.`sub_id`";
              $result = mysqli_query($conn, $q1);
              $row = mysqli_fetch_assoc($result);

              $subjectID = $row['sub_id'];
              
            ?>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="title">Question Title</label>
                  <input type="text" class="form-control" value="<?php echo $row['que_title'];?>">
                </div>
                <div class="form-group">
                  <label for="title">Change Category</label>
                  <select class="form-control" name="subject">
                    <?php 
                      echo "<option value=". $row['sub_id']." selected >". $row['sub_name'] . "</option>";
                    ?>
                    
                  </select>
                </div>
                <div class="form-group">
                  <label for="title">Option 1</label>
                  <input type="text" class="form-control" value="<?php echo $row['option_one'];?>">
                </div>
                <div class="form-group">
                  <label for="title">Option 2</label>
                  <input type="text" class="form-control" value="<?php echo $row['option_two'];?>">
                </div>
                <div class="form-group">
                  <label for="title">Option 3</label>
                  <input type="text" class="form-control" value="<?php echo $row['option_three'];?>">
                </div>
                <div class="form-group">
                  <label for="title">Option 4</label>
                  <input type="text" class="form-control" value="<?php echo $row['option_four'];?>">
                </div>
                <div class="form-group">
                  <label for="title">Correct Answer</label>
                  <input type="text" class="form-control" value="<?php echo $row['answer'];?>">
                </div>
                <div class="form-group">
                  <label for="body">Answer Desc</label>
                  <textarea name="answerdesc" class="form-control" rows="10">
                  <?php echo $row['answer_desc'];?>
                  </textarea>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="main-footer" class="bg-dark text-white mt-5 p-3">
    <div class="conatiner">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Copyright &copy; 2018 Ed2pro</p>
        </div>
      </div>
    </div>
  </footer>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <script>
  
  var questionID = "<?php echo $questionID; ?>";
  var subjectID = "<?php echo $subjectID; ?>";
  function updateQuestion(e){
    
  }
    $(document).ready(function(){
      $('#save').on('click', updateQuestion);
      // $('#deleteQuestion').on('click', deleteQuestion);
    });

    console.log(questionID + ' ' + subjectID );
  </script>
</body>

</html>