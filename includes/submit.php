<?php
include('includes\db.php');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
if ($_POST[title] != null && $_POST[content] != null && $_POST[source] !=null)
{
$sql="INSERT INTO post (title, content, source)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[source]')";
$mysqliquery($sql)
header('Location: index.php?story='mysqli_insert_id());
}
else
{
echo "Incomplete information. Please complete all fields.";
}
?> 