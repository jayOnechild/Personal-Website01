
<?php include ("templates/header.php") ?>
  <?php
    
     $email="";
     $fullname="";
     $comment="";

     $errors = array("email"=>" ", "fullname"=>" ", "comment"=>" ");

   

      if (isset($_POST["submit"]))
      {
            //email validation
            if (empty($_POST["email"]))
            {
                $errors["email"] = "An email is required<br />";
            }
          else{
              
              $email = $_POST["email"];
              
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                 $errors["email"] = "Please, ensure the email format is correct<br />"; 
              }
            
              }
          
          //Fullname Validation
            if (empty($_POST["fullname"])){
                
                     $errors["fullname"] = "Your fullname is required<br />";
                }
          
            else{
              
              $fullname = $_POST["fullname"];
              
              if (!preg_match('/^[a-zA-Z\s]+$/', $fullname)){
            $errors["fullname"] = "Please, ensure you use only letters and spaces for your fullname<br />"; 
              }
            }
          
            //Comment validation
            if (empty($_POST["comment"])){
                
                    $errors["comment"] = "Your comment is required<br />";}
              else{
                   
                $comment = $_POST["comment"];
                
                if (!preg_match('/^[a-zA-Z\s]+$/',   $comment)){
                  $errors["comment"] = "Please, ensure your comment does not have special characters<br />"; 
              }
              }
          //Redirecting
   if(array_filter($errors))
      {
        echo "Errors";
      }else{
    
      //redirecting to the homepage
      header('Location:index.php');
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
        <label>Your Email</label><br/>
        <input type="text" name="email" value="<?php echo "$email"?>"><br/>
        <div class="error-color"><?php echo $errors["email"]; ?></div>  
        <label>Full Name</label><br/>
        <input type="text" name="fullname" value="<?php echo "$fullname"?>"><br/>
        <div class="error-color"><?php echo $errors["fullname"]; ?></div>  
        <label>Leave a comment</label><br/>
<!--        <input type="text" name="comment" value="<?php echo "$comment"?>"><br/>-->
        <textarea name="comment"  >  <?php echo "$comment"?>    </textarea>  
        <div class="error-color"><?php echo $errors["comment"]; ?></div>  
        <div class="submit-btn"><input type="submit" name="submit"></div>    
      </form> 
 </section>  
</body>
</html>


<?php include ("templates/footer.php") ?>


    