<?php 

    if(isset($_POST['submit']))
    {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $subject = $_POST['subject'];
       $message = $_POST['message'];

       if(empty($name) || empty($email) || empty($subject) || empty($message))
       {
           header('location:index.html?error');
       }
       else
       {
           $to = "ecroome@hotmail.com";

           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index.html?success");
           }
       }
    }
    else
    {
        header("location:index.html");
    }
?>