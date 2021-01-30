<div id="pagination">
<?php 
if($current_page > 3){
	$first_page = 1;?>
	<a  class = "page-item" href="?per_page = 6 & page=<? $first_page ?>">First</a>
<?php } ?>

<?php for ($num = 1; $num <=$totalPages; $num++) { ?>
	<?php if($num != $current_page) { ?>
		<?php if($num > $current_page - 3 && $num < $current_page + 3) { ?>
		<a class="page_item" href="?per_page = 6 & page=<? = $num?>"><? = $num?></a>
		<?php } ?>
	<?php } else{ ?>
		<strong class="current_page page_item"><? = $num?></strong>

	<?php } ?>
<?php } ?>
<?php 
	if($current_page >$totalPages - 3) {
		$end_page = $totalPages ;?>
		<a  class = "page-item" href="?per_page = 6 &page=<? $end_page ?>">Last</a>
<?php } ?>
</div>