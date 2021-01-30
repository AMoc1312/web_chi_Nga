
<?php
$noi_dung = mysqli_query($ket_noi, $sql);
// 4. Hiển thị dữ liệu mong muốn
 $rowarray = mysqli_fetch_row($noi_dung);
	$rows = $rowarray[0];
	$item_per_page = !empty($_GET['per_page']);
	$current_page = 1;
	$offset = ($current_page -1) * $item_per_page;
	$review = mysqli_query($ket_noi,"SELECT * FROM `review` ORDER BY `id`desc Limit".$item_per_page." offset".$offset."");
	$totalRecords = mysqli_query($ket_noi,"SELECT * FROM `review`");
	$totalRecords = $totalRecords-> num_rows;
	$totalPages = ceil($totalRecords/$item_per_page);


	?>
	<?php
	include'./pn.php';
	?>

