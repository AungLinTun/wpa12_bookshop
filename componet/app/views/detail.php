<?php get_layout('layout/header'); ?>
 		<div id="content" class="row">
 		<div class="span12">
 		<?php if($students != null) : ?>
 			<table class="table table-striped">
 				<tr>
 					<td>ID#</td>
 				<td><?php echo $students['id']; ?></td>
 				</tr>
 				<tr>
 					<td>Name</td>
 					<td><?php echo $students['name']; ?></td>
 				</tr>
 				<tr>
 					<td>Address</td>
 					<td><?php echo $students['address']; ?></td>
 				</tr>
 				<tr>
 					<td>Class</td>
 					<td><?php echo $students['class_name']; ?></td>
 				</tr>
 				<tr>
 					<td>Interest - Script</td>
 					<td>
 						<?php foreach($scripts as $script) : ?>
 							<?php echo $script['name'] . ', '; ?>
 						<?php endforeach; ?>
 					</td>
 					</tr>
 					<tr>
 						<td>Interest - Language</td>
 						<td>
 							<?php foreach($languages as $language) : ?>
 							<?php echo $language['name'] . ', '; ?>
 						<?php endforeach; ?>
 						</td>
 						</tr>
 					</table>
 					<h3>Experience</h3>
 						
 					<?php $b=0; ?>
 					<table class="table table-striped">
 					<tr>
 							<th>No</th>
 							<th>Company</th>
 							<th>Duration</th>
 						</tr>
 						<?php foreach($experiences as $experience): ?>
 						<tr>
 							<td><?php echo $b+=1; ?></td>
 							<td>
							<?php echo $experience['place']; ?>
							</td>
							<td>
							From <?php echo $experience['start']; ?> To <?php echo $experience['end']; ?>
							</td>
 						</tr>
						<?php endforeach; ?>
	
 					</table>
 					<h3>Occupation</h3>
 					<table class="table table-striped">
 						<tr>
 							<th>No</th>
 							<th>Degree</th>
 							<th>Place</th>
 							<th>Year</th>
 						</tr>
 						<?php $a=0; ?>
 						<?php foreach($occupations as $occupation): ?>
	
 						<tr>
 							<td><?php echo $a+=1; ?></td>
 							<td><?php echo $occupation['degree']; ?></td>
 							<td><?php echo $occupation['place']; ?></td>
 							<td><?php echo $occupation['year']; ?></td>
 						</tr>
						<?php endforeach; ?>
 					</table>
 				<?php else : ?>
 					<h1>Not found</h1>
 				<?php endif; ?>
 				</div>
 			</div> <!-- end of content -->
<?php get_layout('layout/footer'); ?>