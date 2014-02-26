<?php get_layout('layout/header'); ?>
<div id="content" class="row">
	<div class="span12">
		<h1>Search Not Found!</h1>
		<h4>Search again!</h4>
		<form class="form-search" method="get" action="<?php echo base_url(); ?>/index.php">
		      <input type="text" class="input search-query" placeholder="Search" name="q">
		      <button type="submit" class="btn">Search</button>
		</form>
	</div>
</div>

<?php get_layout('layout/footer'); ?>