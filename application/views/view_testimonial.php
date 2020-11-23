<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_testimonial']; ?>)">

	<div class="bg"></div>

	<div class="bannder-table">

		<div class="banner-text">

			<h1><?php echo $page['testimonial_heading']; ?></h1>

		</div>

	</div>

</div>





<div class="testimonial-area main-testimonial ptb-60">

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="testimonial-carousel owl-carousel owl-loaded owl-drag">



					<?php

					foreach ($testimonial as $row) {

						?>

						<div class="testimonial-item">

							<div class="testimonial-text">

								<div class="client-name">

									<h4><?php echo $row['name']; ?></h4>

									<span><?php echo $row['designation'] ?>, <?php echo $row['company']; ?></span>

								</div>

								<div class="testimonial-detail">

								<i class="fa fa-quote-left"></i>

									<p><?php echo nl2br($row['comment']); ?></p>

								</div>

							</div>

							<div class="testimonial-photo">

								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>">

							</div>

						</div>

						<?php

					}

					?>



				</div>

			</div>

		</div>

	</div>

</div>
<div>
	<br>
<br>
	<br>
	<div class="headline">
		<div class="headline-shadow">
			<h2>Add testimonial here </h2>
			
		</div>
	</div>
<br>
<br>

			<?php echo form_open_multipart(base_url().'admin/testimonial/add',array('class' => 'form-horizontal')); ?>

				<div class="box box-info" >

					<div class="box-body">

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Name <span>*</span></label>

							<div class="col-sm-6">

								<input type="text" autocomplete="off" class="form-control" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Designation <span>*</span></label>

							<div class="col-sm-6">

								<input type="text" autocomplete="off" class="form-control" name="designation" value="<?php if(isset($_POST['designation'])){echo $_POST['designation'];} ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Company <span>*</span></label>

							<div class="col-sm-6">

								<input type="text" autocomplete="off" class="form-control" name="company" value="<?php if(isset($_POST['company'])){echo $_POST['company'];} ?>">

							</div>

						</div>

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Photo <span>*</span></label>

							<div class="col-sm-9" style="padding-top:5px">

								<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)

							</div>

						</div>						

						<div class="form-group">

							<label for="" class="col-sm-2 control-label">Comment <span>*</span></label>

							<div class="col-sm-6">

								<textarea class="form-control" name="comment" style="height:200px;"><?php if(isset($_POST['comment'])){echo $_POST['comment'];} ?></textarea>

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