<?php

if(!$this->session->userdata('id')) {

	redirect(base_url().'admin/login');

}

?>

<section class="content-header">

	<div class="content-header-left">

		<h1>View Jobs</h1>

	</div>

	<div class="content-header-right">

		<a href="<?php echo base_url(); ?>admin/job/add" class="btn btn-primary btn-sm">Add New</a>

	</div>

</section>



<section class="content">

	<div class="row">

		<div class="col-md-12">

			<div class="box box-info">

				<div class="box-body table-responsive">

					<table id="example1" class="table table-bordered table-striped">

						<thead>

							<tr>

								<th>SL</th>

								<th>Title</th>

								<th>Skills</th>
								<th>Responsibilities</th>

								

								<th width="140">Action</th>

							</tr>

						</thead>

						<tbody>

							<?php

							$i=0;							

							foreach ($service as $row) {

								$i++;

								?>

								<tr>

									<td style="width:100px;"><?php echo $i; ?></td>
                                      <td><?php echo $row['title']; ?></td>
			                          <td><?php echo $row['skills']; ?></td>
									  <td><?php echo $row['responsibilities']; ?></td>

									<td>										

										<a href="<?php echo base_url();?>admin/job/edit/<?php echo $row['id'];?>" class="btn btn-primary btn-xs">Edit</a>
                                        
   										<a href="#" class="btn btn-danger btn-xs" data-href="<?php echo base_url();?>admin/job/delete/<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
                                        
										<a href="<?php echo base_url();?>admin/job/showmodel/<?php echo $row['id'];?>" class="btn btn-danger btn-xs" data-href="" data-toggle="modal" data-target="#confirm-show">Show</a>										

										
									</td>

								</tr>

								<?php

							}

							?>							

						</tbody>

					</table>

				</div>

			</div>

		</div>

	</div>

</section>




<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>

            </div>

            <div class="modal-body">

                <p>Are you sure want to delete this item?</p>

            </div>

            <div class="modal-footer">

                <button type="button"  class="btn btn-default" data-dismiss="modal">Cancel</button>

                <a class="btn btn-danger btn-ok">Delete</a>

            </div>

        </div>

    </div>

</div>

<!-- For View Model -->





<div class="modal fade" id="confirm-show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>

            </div>

            <div class="modal-body">

                <p>Are you sure want to delete this item?</p>
				
				
            </div>

            <div class="modal-footer">

                <button type="button"  class="btn btn-default" data-dismiss="modal">Cancel</button>

                <a class="btn btn-danger btn-ok">Delete</a>

            </div>

        </div>

    </div>

</div>





<?php   $this->load->view('admin/view_footer'); ?>