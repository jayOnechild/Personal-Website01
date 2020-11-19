<?php include ("templates/header.php"); ?>
<?php $conn = mysqli_connect('localhost', 'jay','jaymag', 'personal_blog');

if (!$conn){
    echo 'There was an error connecting to the database'.mysqli_connect_error();
}
$sql = 'SELECT fullnames, comment, email, id FROM jacks_blog';

$result = mysqli_query($conn, $sql);

$details = mysqli_fetch_all($result, MYSQLI_ASSOC);

//print_r($details);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blogs</title>
    <style>
    .info{
            text-align: center;
        }
    </style>    
</head>
<body>
    <h1>Blogs</h1> 
    <?php foreach($details as $detail) {?>
      
       <h3 class="info"><?php echo htmlspecialchars($detail['email']); ?></h3> 
       <h3 class="info"><?php echo htmlspecialchars($detail['fullnames']);?></h3> 
       <h3 class="info"><?php echo htmlspecialchars($detail['comment']); ?></h3> <br>
     
    <?php }?>
</body>
</html>


    
<?php include ("templates/footer.php"); ?>