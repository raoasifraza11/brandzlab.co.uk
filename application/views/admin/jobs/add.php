<?php
            $this->load->view('admin/view_header');

if(!$this->session->userdata('id')) {

	redirect(base_url().'admin/login');

}


?>



<section class="content-header">

	<div class="content-header-left">

		<h1>Add Jobs</h1>

	</div>

	<div class="content-header-right">

		<a href="<?php echo base_url(); ?>admin/job/viewjobs" class="btn btn-primary btn-sm">View All</a>

	</div>

</section>





<section class="content">



	<div class="row">

		<div class="col-md-12">



		
		<?php $msg=$this->uri->segment(4);if($msg=="success"){ ?>

			<div class="callout callout-success">

				<p><?php echo "data has been inserted"; ?></p>

			</div>

			<?php } ?>
			
			
			<?php $msg=$this->uri->segment(4);if($msg=="error"){ ?>

			<div class="callout callout-success">

				<p><?php echo "data has not been inserted"; ?></p>

			</div>

			<?php } ?>
			

			

			



			



			<?php echo form_open_multipart(base_url().'admin/job/add',array('class' => 'form-horizontal')); ?>

				<div class="box box-info">

					<div class="box-body">

						

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Title *</label>

							<div class="col-sm-8">

								<input type="text" autocomplete="off" class="form-control" name="title"/>

							</div>

						</div>

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Responsibilities  *</label>

							<div class="col-sm-8">

								<textarea class="form-control" name="responsibilities" style="height:140px;"></textarea>

							</div>

						</div>

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Skills *</label>

							<div class="col-sm-8">

								<textarea class="form-control" name="skills" id="editor1"> </textarea>

							</div>

						</div>
						
						
						
						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Qualification *</label>

							<div class="col-sm-8">
						
								<select class="form-control" id="sel1" name="qualification">
									<option value="Undergraduate">Undergraduate</option>
									<option value="Graduate">Graduate</option>
									<option value="Masters">Masters</option>
									<option value="Diploma">Diploma Holder</option>
								 </select>
							</div>

						</div>
						
						
						
						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Experience *</label>

							<div class="col-sm-8">
						
								<select class="form-control" id="sel1" name="experience">
									<option value="Fresh - Less than 1 Year">Fresh - Less than 1 Year</option>
									<option value="From 2 Year - To 3 Year">From 2 Year - To 3 Year</option>
									<option value="From 4 Year - To 6 Year">From 4 Year - To 6 Year</option>
									<option value="Greater than 6 Year">Greater than 6 Year</option>
									
								 </select>
							</div>

						</div>
						
						
						
						
						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Gender *</label>

							<div class="col-sm-8">
						
								<select class="form-control" id="sel1" name="gender">
									<option value="Male">Male</option>
									<option value="Female">Female</option>
									<option value="No Preference">No Preference</option>
									
								 </select>
							</div>

						</div>
						
						
						
						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Age *</label>

							<div class="col-sm-8">
						
								<select class="form-control" id="sel1" name="age">
									<option value="18-22">18-22</option>
									<option value="22-26">22-26</option>
									<option value="26-30">26-30</option>
									<option value="30-35">30-35</option>
									
									
									
									
								 </select>
							</div>

						</div>
						
						
						
						
						<h3 class="seo-info">SEO Information</h3>

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Meta Title</label>

							<div class="col-sm-6">

								<input type="text" autocomplete="off" class="form-control" name="meta_title">

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

								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>

							</div>

						</div>



					</div>

				</div>

			<?php echo form_close(); ?>

		</div>

	</div>



</section>

         <?php   $this->load->view('admin/view_footer'); ?>