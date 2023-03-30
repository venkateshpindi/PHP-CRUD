<?php
  session_start();
   require'db.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP-CRUD </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">

  </head>
  <body>
    <div class="container mt-5">
      <?php include('message.php'); ?>
        <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Student Details
                     <a href="student-create.php" class="btn btn-primary float-end">Add Students</a>
                  </div>

                  <div class="card-body">
                   <table  id="datatableid" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</td>
                          <th>Student Name</td>
                          <th>Email</td>
                          <th>Phone</td>
                          <th>Course</td>
                          <th>Action</td>
                        </tr>
                      </thead>
                      <tbody>
                         <?php  
                            $query = "SELECT * FROM phpcrud";
                            $query_run=mysqli_query($conn,$query);

                            if(mysqli_num_rows($query_run)>0)
                          {
                              foreach ($query_run as $student) 
                            {
                              ?>
                               <tr>
                                 <td><?php echo $student['id']; ?></td>
                                 <td><?php echo $student['name']; ?></td>
                                 <td><?php echo $student['email']; ?></td>
                                 <td><?php echo $student['phone']; ?></td>
                                 <td><?php echo $student['course']; ?></td>
                                 <td>
                                  <a href="student-view.php?id=<?= $student['id'];?>" class="btn btn-info btn-sm">View</a>
                                  <a href="student-edit.php?id=<?= $student['id'];?>" class="btn btn-success btn-sm">Edit</a>
                                  <form action="code.php" method="POST" class="d-inline">
                                   <button type="submit" name="delete" value="<?= $student['id'];?>"  class="btn btn-danger btn-sm">Delete</a>
                                  </form>
                                </tr>
                              <?php
                            }
                        }
                        else
                        {
                          echo "<h5> No record found </h5>";
                        }
                        ?>
                         </tbody>
                    </table>
                  </div>  
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"><script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"><script>

    <script>
      $(document).ready(function () {
        $('#datatableid').DataTable();
});
</script>

    
  </body>
</html>