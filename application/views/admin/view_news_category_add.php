<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin/login');
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Add News Category</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/news-category" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>


<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php if($error): ?>
			<div class="callout callout-danger">
			<p>
			<?php echo $error; ?>
			</p>
			</div>
			<?php endif; ?>

			<?php if($success): ?>
			<div class="callout callout-success">
			<p><?php echo $success; ?></p>
			</div>
			<?php endif; ?>

			<?php echo form_open(base_url().'admin/news-category/add',array('class' => 'form-horizontal')); ?>

				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Category Name <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="category_name">
							</div>
						</div>
						<h3 class="seo-info">SEO Information</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Title </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_title">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Keywords </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_keyword" style="height:100px;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Description </label>
							<div class="col-sm-9">
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