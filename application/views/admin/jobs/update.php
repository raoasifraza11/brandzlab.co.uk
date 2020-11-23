<?php
            $this->load->view('admin/view_header');

if(!$this->session->userdata('id')) {

	redirect(base_url().'admin/login');

}


?>



<section class="content-header">

	<div class="content-header-left">

		<h1>Update Jobs</h1>
		
	</div>

	<div class="content-header-right">

		<a href="<?php echo base_url(); ?>admin/job/viewjobs" class="btn btn-primary btn-sm">View All</a>

	</div>

</section>





<section class="content">



	<div class="row">

		<div class="col-md-12">

			<?php echo form_open_multipart(base_url().'admin/job/update',array('class' => 'form-horizontal')); ?>

				<div class="box box-info">

					<div class="box-body">

						

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Title *</label>

							<div class="col-sm-6">

								<input type="text" autocomplete="off" class="form-control" name="title" value=" <?php echo $r1->title; ?> "/>

							</div>

						</div>

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Responsibilities  *</label>

							<div class="col-sm-8">

								<textarea class="form-control" name="responsibilities" style="height:140px;" ><?php echo $r1->responsibilities ;?> </textarea>

							</div>

						</div>

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Skills *</label>

							<div class="col-sm-8">

								<textarea class="form-control" name="skills" id="editor1"   > <?php echo $r1->skills;?> </textarea>

							</div>

						</div>
						
						
						
						
						
						<h3 class="seo-info">SEO Information</h3>

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Meta Title</label>

							<div class="col-sm-6">

								<input type="text" autocomplete="off" class="form-control" name="meta_title" value=" <?php echo $r1->meta_title ; ?> ">

							</div>

						</div>
						
						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Meta Keyword</label>

							<div class="col-sm-8">

								<textarea class="form-control" name="meta_keyword" style="height:100px;"></textarea>

							</div>

						</div>

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Meta Description</label>

							<div class="col-sm-8">

								<textarea class="form-control" name="meta_description" style="height:100px;"></textarea>

							</div>

						</div>
						
						
						
				

						<div class="form-group">

							<label for="" class="col-sm-2 control-label"></label>

							<div class="col-sm-6">

								<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>

							</div>

						</div>



					</div>

				</div>

			<?php echo form_close(); ?>

		</div>

	</div>



</section>

         <?php   $this->load->view('admin/view_footer'); ?>