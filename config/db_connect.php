$conn = mysqli_connect('localhost', 'jay','jaymag', 'personal_blog');

if (!$conn){
    echo 'There was an error connecting to the database'.mysqli_connect_error();
}