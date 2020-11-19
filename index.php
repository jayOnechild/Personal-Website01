<?php 

$conn = mysqli_connect('localhost', 'jay','jaymag', 'jackson');

if (!$conn){
    echo 'There was an error connecting to the database'.mysqli_connect_error();
}
$sql = 'SELECT fullnames, comment, id FROM jacks_blog';

$result = mysqli_query($conn, $sql);

$details = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($details);

//MICROSOFT CERTIFICATES GENERATOR
//https://mspcert.azurewebsites.net/
//https://mspglobal.azurewebsites.net/certificates/

?>




<!DOCTYPE html>
<html lang="en">

<?php include ("templates/header.php"); ?>

    <style>
    
  h1, .home-heading
 {
    color: darkgreen;
    font-size: 50px;
    font-family: monospace;
    padding: 15% !important;
    text-align: center; 
  }
        
   </style>
 
    
<div class="index-div"><h1 class="home-heading">Welcome to Jackson Mwanaumo's official Blog Site</h1></div>
    
<?php include ("templates/footer.php"); ?>
</html> 