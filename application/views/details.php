<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<div class="row">
		<div class="col-sm-12 col-md-6">
			<article style="width: 100%; display: inline-block;">
				<div class="jobDetailPanel">
					<h2 class="title" data-title="digital marketing specialist">
						Job Title <br>
						<?php echo $r1->title ;?>
					</h2>
					<p class="smallTitle">
						<h1>Responsibilities</h1>
						
						<?php echo $r1->responsibilities	 ;?>
					</p>
					<p class="smallTitle">
						<h1>Skills</h1>
						<?php echo $r1->skills	 ;?>
					</p>					
				</div>
			</article>
		</div>
	</div>
	
	
	
	
	
	
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
			
			
	
	
	
	
	<h1> Apply For Job</h1>
	
	
 
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



	
	