<?php 
$con = mysqli_connect("localhost","root","bhuminaksh","nakshatra");
if($con)
{
$query = "SELECT name FROM school";
$result = mysqli_query($con,$query);

while($row = mysqli_fetch_array($result,MYSQLI_NUM))
{
echo '<p class="listlink"><a class="SchoolList" href="SchoolDetails.php?name='?><?php echo $row[0]; echo '">&#187; '?><?php echo $row[0];echo '</a></p>';

}


} 










?>
