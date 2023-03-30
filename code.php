<?php
session_start();
$conn=mysqli_connect("localhost","venkateshp","kspl@12345","crud");

if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $course=$_POST['course'];


    if(empty($name)|| empty($email)|| empty($phone)|| empty($course))
      {
        $_SESSION['message'] = "All Fields are Required!";
         header("Location:student-create.php");
      }
      else{

     $query="INSERT INTO phpcrud(name,email,phone,course) VALUES ('$name','$email','$phone','$course')";
     $query_run=mysqli_query($conn,$query);

       if($query_run)
        {
          $_SESSION['message']="Student created successfully";
          header("Location:student-create.php");
          exit();
        }
        else
        {
           $_SESSION['message']="Student Not saved";
           header("Location:student-create.php");
           exit();
        }
    }

}


    /*Update the Students Deatils*/
    if(isset($_POST['update']))
{
  $student_id=$_POST['student_id'];
  $na=$_POST['name'];
  $ema=$_POST['email'];
  $pho=$_POST['phone'];
  $cour=$_POST['course'];
  


  $query ="UPDATE phpcrud SET name='$na',email='$ema',phone='$pho',course='$cour' WHERE id='$student_id'";
  $query_run = mysqli_query($conn,$query);

  if($query_run)
  {
    $_SESSION['message']="Student updated successfully";
    header("Location:index.php");
    exit();
  }
  else
  {
           $_SESSION['message']="Student Not updated";
           header("Location:index.php");
           exit();
  }
}

/*Delete Student Record*/

if(isset($_POST['delete']))
{
  $student_id = $_POST['delete'];
  $query = "DELETE  FROM phpcrud  WHERE id='$student_id'";
  $query_run = mysqli_query($conn,$query);
  
  if($query_run)
  {
    $_SESSION['message']="Student Deleted successfully";
    header("Location:index.php");
    exit();
  }
  else
  {
    
    $_SESSION['message']="Student Not Deleted";
    header("Location:index.php");
    exit();
  }
}


?>
