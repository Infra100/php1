<html>
<body>
<form>
    <input type="text" name="txt" />
    <input type="submit" name="insert" value="insert" />
</form>
</body>
</html>

<?php
print_r($_POST);die;
$con=mysqli_connect("localhost","root","kodc@1234","demodpt");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT first_name,last_name from user_details";

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s (%s)\n",$row[0],$row[1]);
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);

?>


