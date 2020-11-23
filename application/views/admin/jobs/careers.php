
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Responsibilities</th>
      <th scope="col">Skills</th>
	  <th scope="col">Action</th>
	  
	  
    </tr>
  </thead>
  <tbody>
    
	<?php foreach ($service as $row) { ?>
	
	<tr>
      <th scope="row"><?php echo $row['id']; ?> </th>
	  <td> <?php echo $row['title']; ?></td>
      <td> <?php echo $row['responsibilities']; ?></td>
	  <td> <?php echo $row['skills']; ?></td>
	  <td><a href="<?php echo base_url('jobs/details/'.$row['id']); ?> "> Details</a></td>  
	
	  
    </tr>
	
    <?php }?>  
  </tbody>
</table>
	
 
			


