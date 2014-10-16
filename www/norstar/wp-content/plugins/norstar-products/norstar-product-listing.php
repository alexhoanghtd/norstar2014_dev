<style>
	.norstar_thumbnail {width: 80px; height: auto;}
</style>

<div class="tablenav top">
	<div class="alignleft"><a class="button-secondary" href="?page=products&action=edit">Add new Product</a></div>
</div>
<?php 
	$page = 1;
	if (isset($_GET['p'])) {
		$page = (int)trim($_GET['p']);
	}
	global $wpdb;

	$total = $wpdb->get_var('SELECT count(id) as total FROM norstar_products');
	$total = ceil($total/10);
	if ($page > $total) {
		$page = 1;
	}
	if ($page < 1) {
		$page = 1;
	}
	$start = ($page-1)*10;
	$products = $wpdb->get_results("SELECT * FROM norstar_products ORDER BY created DESC LIMIT $start,10");
?>
<table class="wp-list-table widefat fixed posts">
	<thead>
	<tr>
		<th scope="col" class='manage-column column-title sortable desc'  style="padding:5px;text-align:center;"><span>Product ID</span></th>
		<th scope="col" class='manage-column column-title sortable desc'  style="padding:5px;"><span>Thumbnail</span></th>
		<th scope="col" class='manage-column column-title sortable desc'  style="padding:5px;"><span>Production name</span></th>
		<th scope="col" class='manage-column column-title sortable desc'  style="padding:5px;"><span>Description</span></th>
		<th scope="col" class='manage-column column-title sortable desc'  style="padding:5px;"><span>Actions</span></th>
  	</tr>
	</thead>

	<tbody id="the-list">
		<?php $row_count = 0; foreach($products as $product): ?>
		<tr bgcolor="<?php if ($row_count % 2 == 0) echo "#f9f9f9"; else echo "#ffffff"; ?>">
			<td style="text-align:center;vertical-align:middle">
				<?php echo $product->id;?>
			</td>
			<td  style="vertical-align:middle">
				<img class="norstar_thumbnail" src="<?php echo $product->thumbnail;?>"/>
			</td>
			<td  style="vertical-align:middle">
				<span><?php echo $product->title;?></span>
			</td>
			<td  style="vertical-align:middle">
				<span><?php echo $product->description;?></span>
			</td>
			<td  style="vertical-align:middle">
				<a href="?page=products&action=edit&id=<?php echo $product->id;?>">Edit</a> | <a href="?page=products&action=delete&id=<?php echo $product->id;?>">Delete</a> 
			</td>
		</tr>
		<?php $row_count += 1; endforeach; ?>
	</tbody>
</table>
<div class="tablenav top">
	<?php for($i = 1; $i <= $total; $i ++): ?>
		<div class="alignleft"><a class="button-secondary" href="?page=products&p=<?php echo $i?>"><?php echo $i;?></a></div>
	<?php endfor; ?>
</div>