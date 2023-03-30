<?php
session_start();
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
       <?php include('message.php'); ?>
           <div class="row">
              <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                       <h4>Add Student
                       
                         <a href="index.php" class='btn btn-danger float-end'>BACK</a>
                        </h4> 
                     </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name"  id="name" class="form-control" />
                                 
                            </div>                                   
                      

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" id="email"  class="form-control" />
                                 
                            </div>

                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone"  id="phone" class="form-control" />
                               
                            </div>

                            <div class="mb-3">
                                <label>Course</label>
                                <input type="text" name="course" id="course"  class="form-control" /><br>
                                 
                            </div>

                            <div class='mb-3'>
                                <button type='submit' name="submit" class="btn btn-primary" >submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>




    
  </body>
</html>

