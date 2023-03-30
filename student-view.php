<?php
require 'db.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <body>
    
  <div class="container mt-5">
    
           <div class="row">
              <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                       <h4> Student view Details
                         <a href="index.php" class='btn btn-danger float-end'>BACK</a>
                        </h4> 
                     </div>
                    <div class="card-body">

                        <?php
                         if(isset($_GET['id']))
                         {
                            $student_id = $_GET['id'];
                            $query = "SELECT * FROM phpcrud WHERE id='$student_id'";
                            $query_run = mysqli_query($conn,$query);

                            if(mysqli_num_rows($query_run)>0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                 ?>
                        
                

                                          <div class="mb-3">
                                             <label>Name</label>
                                                <p class="form-control">
                                                  <?php echo $student['name']; ?>
                                                </p>
                                          </div>                                   
                      

                                   <div class="mb-3">
                                     <label>Email</label>
                                        <p class="form-control">
                                         <?php echo $student['email']; ?>
                                        </p>
                                  </div>

                                  <div class="mb-3">
                                      <label>Phone</label>
                                          <p class="form-control">
                                            <?php echo $student['phone']; ?>
                                          </p>
                                  </div>

                                  <div class="mb-3">
                                    <label>Course</label>
                                        <p class="form-control">
                                         <?php echo $student['course']; ?>
                                        </p><br>
                                  </div>

                               
                  

                            <?php
                            }
                            else
                            {
                                echo "<h4>No such Id Found</h4>";
                            }
                         }


                         ?>

                    
                    </div>
                </div>
            </div>
        </div>
        </div>




    
  </body>
</html>