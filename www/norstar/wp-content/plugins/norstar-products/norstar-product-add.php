<style>
	.norstar_thumbnail {max-width: 100%;max-height: 100%;}
	.div_thumbnail {
		width: 88px;
	  	-webkit-box-shadow:rgba(0, 0, 0, 0.054902) 0 1px 3px;
	  	-webkit-transition:all 0.2s ease-in-out;
	  	border:1px solid #DDDDDD;
	  	border-bottom-left-radius:4px;
	  	border-bottom-right-radius:4px;
	  	border-top-left-radius:4px;
	  	border-top-right-radius:4px;
	  	box-shadow:rgba(0, 0, 0, 0.054902) 0 1px 3px;
	  	display:block;
	  	line-height:20px;
	  	padding:4px;
	  	transition:all 0.2s ease-in-out;
	}
	.btn {
	  background:#D6D9E0;
	  border:none;
	  padding: 5px;
	  border-bottom-left-radius:2px;
	  border-bottom-right-radius:2px;
	  border-top-left-radius:2px;
	  border-top-right-radius:2px;
	  text-shadow:none;
	}

	.btn-primary {
  		background:#36A9E1;
  		color:#FFFFFF;
	}
</style>

<div class="tablenav top">
	<div class="alignleft"><a class="button-secondary" href="?page=products">< Products</a></div>
</div>

<?php
	$norstar_errors = array();
	$id = "";
	$title = "";
	$description = "";
	$thumbnail = "";
	
	if(isset($_POST['product'])) {
		if(isset($_POST['product']['id'])) 
			$id = trim($_POST['product']['id']);
		
		$title = trim($_POST['product']['title']);
		$description = trim($_POST['product']['description']);
		$thumbnail = trim($_POST['product']['thumbnail']);
		
		if (strlen($title) == 0) {
			$norstar_errors[] = "Title of Product can not be empty";
		}
		if (strlen($thumbnail) == 0) {
			$norstar_errors[] = "Thumbnail of Product can not be empty";
		}
	} else if (isset($_GET['id'])) {
		$id = trim($_GET['id']);
		global $wpdb;
		$products = $wpdb->get_results("SELECT * FROM norstar_products WHERE id = $id");
		if (count($products) > 0) {
			$product = $products[0];
			$id = $product->id;
			$title = $product->title;
			$description = $product->description;
			$thumbnail = $product->thumbnail;
		}
	}
?>
<?php 
	if(count($norstar_errors) > 0) {
		echo "<div style=\"margin-top:20px;color:red;\">";
		foreach ($norstar_errors as $err) {
			echo "<span>".$err."</span><br/>";
		}
		echo "</div>";
	}
?>
<script type='text/javascript' src='/wp-includes/js/jquery/jquery.js'></script>
<script type="text/javascript" src="/ckfinder/ckfinder.js">></script>
<form method="POST" action="?page=products&action=edit">
	<div style="margin-top:20px;">
		<div style="padding-top:5px;padding-bottom:5px;">
			<label>Product name</label>
		</div>
		<div style="padding-top:5px;padding-bottom:5px;">
			<input type="text" name="product[title]" size="40" value="<?php echo $title;?>" id="title" autocomplete="off">
		</div>

		<div style="padding-top:5px;padding-bottom:5px;">
			<label>Description</label>
		</div>
		<div style="padding-top:5px;padding-bottom:5px;">
			<textarea name="product[description]" cols="40" id="description"><?php echo $description;?></textarea>
		</div>

		<div style="padding-top:5px;padding-bottom:5px;">
			<label>Thumbnail</label>
		</div>
		<div style="padding-top:5px;padding-bottom:5px;">
			<div class="div_thumbnail">
				<img class="norstar_thumbnail" id="product_thumbnail" src="<?php if(strlen($thumbnail) > 0) echo $thumbnail; else echo "/img/placeholder.jpg";?>" onclick="browseServer('product_thumbnail')" onerror="if (this.src != '/img/placeholder.jpg') this.src = '/img/placeholder.jpg';">
			</div>

			<div style="margin-top: 15px;">
				<span class="btn" onclick="browseServer('norstar_thumbnail');">Select image</span>
			</div>

		</div>
		<script type="text/javascript">
			function browseServer(elementId){
				var finder = new CKFinder();
				finder.selectActionFunction = function(fileUrl){
					document.getElementById(elementId + "_hide").value = fileUrl;
			        document.getElementById(elementId).src = fileUrl; ////img/placeholder.jpg
				};
				finder.popup();
			}
		</script>
		<input id="product_thumbnail_hide" name="product[thumbnail]" type="hidden" 
		value="<?php echo $thumbnail;?>"/>  
		<input name="product[id]" type="hidden" 
		value="<?php echo $id;?>"/>  
		<br/>
		<br/>
		<div style="padding-top:5px;padding-bottom:5px;">
			<button type="submit" class="btn btn-primary">Save</button>
		</div>
	</div>	
</form>
