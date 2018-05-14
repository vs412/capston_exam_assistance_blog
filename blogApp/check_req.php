<?php
$con = mysqli_connect('localhost', 'root', '8962726', 'blog');
global $con;
$query = "SELECT * FROM `request_blog`";
$run = mysqli_query($con, $query);
if ($run == TRUE){
?>
<table border="1" width="80%">

<tr>
<td>Blog ID</td><td>Topic</td><td>Content</td>
</tr>
<?php
while($data = mysqli_fetch_assoc($run)){
?>
<tr>
<td><?php echo $data['id'];?></td><td><?php echo $data['topic'];?></td><td><?php echo $data['content'];?></td>
<?php echo $data['date'];?></td>
</tr>
<?php
}
?></table><?php
}
?>
