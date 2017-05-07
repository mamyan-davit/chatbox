<?php
require_once 'database.php';
$q = "SELECT * FROM `shouts` ORDER BY `id` DESC";
$results = mysqli_query($connection, $q);

while($row = mysqli_fetch_assoc($results)) : ?>
	<li class="shout" id="results"><span> <?php echo $row['time'] ?> </span> <strong> <?php echo $row['user'] ?> </strong> - <?php echo $row['message'] ?></li>
<?php endwhile ?>