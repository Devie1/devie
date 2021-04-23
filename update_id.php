<?php 
include('conn_id.php');
 if(isset($_POST["submit"]))

   
      $id=$_GET['id'];

$image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $contact=$_POST['contact'];
        $issued=$_POST['issued'];
        $until=$_POST['until'];
        $birthday=$_POST['birthday'];

  move_uploaded_file($image_tmp,"images/$image");


session_start();
    include_once 'idconn.php';

         mysqli_query($conn,"update `brgyid` set image='$image',name='$name',address='$address',contact='$contact',issued='$issued',until='$until',birthday='$birthday' where id='$id'");


header('location:record_id.php');

 
?>
