<?php require "../layout/header.php";  ?>
<?php require "../layout/slidebar.php";  ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header">All Books</h3>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- Content Start -->
	<div class="row">			
		<div class="col-md-12">
			<div class="row"  style="margin:0 0 10px 0;">
				<div class="pull-right">
					<button class="btn btn-warning btn-sm" type="button">Edit</button> 
					<button class="btn btn-danger btn-sm" type="button">Delete</button>
				</div>
			</div>								
			<div class="row">
				<div class="col-md-12">
												
					<table class="table table-striped table-bordered table-hover table-striped tablesorter" >
							<thead>
								<tr role="row">
									<th class="col-lg-1" style="text-align: center;" >
										<input type="checkbox">
									</th>
									<th>IBSN</th>
									<th>Book Title</th>
									<th>Author</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>									
								<tr>
									<td class="col-lg-1" style="text-align: center;">
										<input type="checkbox">
									</td>
									<td>9780007485871</td>
									<td>The Romney Family Table (Hardcover)</td>
									<td>Ann Romney</td>
									<td>$20.09</td>
								</tr>
								<tr>
									<td class="col-lg-1" style="text-align: center;">
										<input type="checkbox">
									</td>
									<td>9780007847421</td>
									<td>A Year With Symfony</td>
									<td>Matthias Noback</td>
									<td>$22.12</td>
								</tr>
								<tr>
									<td class="col-lg-1" style="text-align: center;">
										<input type="checkbox">
									</td>
									<td>3</td>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								</tr>
							</tbody>
						</table>	
				</div>
			</div>	
		</div>			
	</div>   
	<!-- Content End -->
</div>
<!-- /#wrapper -->
<?php require "../layout/footer.php";  ?>
