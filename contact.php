
<?php include ("templates/header.php") ?>
  <?php
    
    $conn = mysqli_connect('localhost', 'jay','jaymag', 'personal_blog');

 if (!$conn){
    echo 'There was an error connecting to the database'.mysqli_connect_error();
 }
    
     $email= $fullname=$comment='';

     $errors = array('email'=>'', 'fullname'=>'', 'comment'=>'');

   

      if (isset($_POST['submit']))
      {
            //email validation
            if (empty($_POST['email']))
            {
                $errors['email'] = "An email is required<br />";
            }
          else{
              
              $email = $_POST['email'];
              
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                 $errors['email'] = "Please, ensure the email format is correct<br />"; 
              }
            
              }
          
          //Fullname Validation
            if (empty($_POST['fullname'])){
                
                     $errors['fullname'] = "Your fullname is required<br />";
                }
          
            else{
              
              $fullname = $_POST['fullname'];
              
              if (!preg_match('/^[a-zA-Z\s]+$/', $fullname)){
            $errors["fullname"] = "Please, ensure you use only letters and spaces for your fullname<br />"; 
              }
            }
          
            //Comment validation
            if (empty($_POST['comment'])){
                
                    $errors['comment'] = "Your comment is required<br />";}
              else{
                   
                $comment = $_POST['comment'];
                
                if (!preg_match('/^[a-zA-Z\s]+$/',   $comment)){
                  $errors["comment"] = "Please, ensure your comment does not have special characters<br />"; 
              }
              }
          
     //Redirecting 
    if(array_filter($errors))
      {
        echo "Errors";
      }else{
         $email = mysqli_escape_string($conn, $_POST['email']);
         $fullname = mysqli_escape_string($conn,$_POST['fullname']);
         $comment= mysqli_escape_string($conn, $_POST['comment']);
         
        
       $sql = "INSERT INTO jacks_blog (comment,fullnames,email) VALUES('$comment', '$fullname', '$email')";
        
        if (mysqli_query($conn, $sql)){
             //redirecting to the homepage
             header('Location:blogs.php');  
        }
        else{
            echo 'Query error: '.mysqli_error($conn);
        }
   
      }
               
      }//end of validation of the form

                 

  ?>

<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
    <style type="text/css">
        form{
            background-size: cover !important;
            background-color: gray;
            max-width: 460px;
            margin: 20px auto;
            padding: 50px;
            padding-bottom: 270px;
        }
        label{
            color: darkgreen;
            font-size: 30px;
        }
        h2{
            padding-left: 35%;
            background-color: gray;
        }
        .error-color{
            color: red;
        }
        
    </style>
</head>
<body>
  <section class="form-sec">
      <h2>GIVE US YOUR FEEDBACK</h2>
      <form method="post" action="contact.php">
        <label for="email">Your Email</label><br/>
        <input type="text" name="email" value="<?php echo "$email"?>"><br/>
        <div class="error-color"><?php echo $errors["email"]; ?></div>  
        <label for="fullname">Full Name</label><br/>
        <input type="text" name="fullname" value="<?php echo "$fullname"?>"><br/>
        <div class="error-color"><?php echo $errors["fullname"]; ?></div>  
        <label for="comment">Leave a comment</label><br/>
        <textarea name="comment" id="" cols="30" rows="12">  <?php echo "$comment"?>    </textarea>  
        <div class="error-color"><?php echo $errors["comment"]; ?></div>  
        <div class="submit-btn"><input type="submit" name="submit"></div>    
      </form> 
 </section>  
 </textarea>
</body>
</html>


<?php include ("templates/footer.php") ?>


    