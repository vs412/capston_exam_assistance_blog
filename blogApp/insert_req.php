<?php
$topic = $_POST['topic'];
$content = $_POST['content'];

$con = mysqli_connect('localhost', 'root', '8962726', 'blog');
$query = "INSERT INTO `request_blog`(`topic`, `content`) VALUES ('$topic', '$content')";

$run = mysqli_query($con, $query);
if ($run == TRUE){
	echo "you have successfully requested for blog <a href='index.php'>&nbspclick here for more blogs</a>";
}
else{
echo "oops Error";
}
?>
