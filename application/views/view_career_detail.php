



	
	
 <?php $msg=$this->uri->segment(4);if($msg=="success"){ ?>

			<div class="callout callout-success">

				<p><?php echo "data has been Submitted"; ?></p>

			</div>

			<?php } ?>
			
			
			<?php $msg=$this->uri->segment(4);if($msg=="error"){ ?>

			<div class="callout callout-success">

				<p><?php echo "data has not been Submitted"; ?></p>

			</div>

			<?php } ?>
			
			
	
	
	
	
	      <h1 style=" margin-left:550px;"> Apply For Job</h1><br>
	
	
 
			<?php echo form_open_multipart(base_url().'jobs/applyJob',array('class' => 'form-horizontal','enctype'=>'multipart/form-data')); ?>

				<div class="box box-info">

					<div class="box-body">

						

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">First Name</label>

							<div class="col-sm-8">

								<input type="text" autocomplete="off" class="form-control" name="firstname"/>

							</div>

						</div>

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Last Name </label>

							<div class="col-sm-8">
                            <input type="text" autocomplete="off" class="form-control" name="lastname"/>
								

							</div>

						</div>

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Email</label>

							<div class="col-sm-8">

								<input type="text" autocomplete="off" class="form-control" name="email"/>

							</div>

						</div>
						
						
						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Phone No</label>

							<div class="col-sm-8">

								<input type="text" autocomplete="off" class="form-control" name="phone"/>

							</div>

						</div>
						
						
						
						
						<div class="form-group">

							<label for="" class="col-sm-2 control-label">File Upload</label>

							<div class="col-sm-8">

								<input type="file" autocomplete="off" class="form-control" name="file" />

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



	
	