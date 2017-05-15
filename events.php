
<?php
$conn = new mysqli('localhost', 'root', 'Aissel@123', 'event');
$stmt = $conn->prepare("SELECT * FROM events");
$stmt->execute();
$result = $stmt->get_result();

$row = $result->fetch_assoc();

$img = $row['e_banner'];

print_r($img);

?>
<html>
	<img src="<?php echo $row['e_banner'];?>" width="500" height="400" />
</html>