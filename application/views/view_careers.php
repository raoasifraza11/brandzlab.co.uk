



<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_careers']; ?>)">

	<div class="bg"></div>

	<div class="bannder-table">

		<div class="banner-text">

			<h1><?php //echo $page['about_heading']; ?> CAREERS</h1>

		</div>

	</div>

</div>


<style>


section{
	padding: 60px 0;
}

#accordion-style-1 h1,
#accordion-style-1 a{
    color:#FFBD33;
	
}
#accordion-style-1 .btn-link {
    font-weight: 400;
    color: #FFBD33;
    background-color: transparent;
    text-decoration: none !important;
    font-size: 16px;
    font-weight: bold;
	padding-left: 25px;
}

#accordion-style-1 .card-body {
    border-top: 2px solid #FFBD33;
}

#accordion-style-1 .card-header .btn.collapsed .fa.main{
	display:none;
}

#accordion-style-1 .card-header .btn .fa.main{
	background: #FFBD33;
    padding: 13px 11px;
    color: #ffffff;
    width: 35px;
    height: 41px;
    position: absolute;
    left: -1px;
    top: 10px;
    border-top-right-radius: 7px;
    border-bottom-right-radius: 7px;
	display:block;
}


</style>








<div class="container-fluid bg-gray" id="accordion-style-1">
	<div class="container">
		<section>
			<div class="row">
				<div class="col-12">
					<h1 class="text-green mb-4 text-center">New Jobs Opening </h1>
				</div>
				<div class="col-10 mx-auto">

				<div class="faq-gallery">
                    <div class="panel-group" id="accordion">
                        
                        	<?php foreach ($service as $row) { ?>
					
					<div class="panel panel-default">
                			<div class="panel-heading">
                				<h4 class="panel-title">
                					<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                				</h4>
                			</div>
                			<div id="<?php echo $row['id']; ?>" class="panel-collapse collapse ">
                				<div class="panel-body">
                				<h1>Job Description</h1> <?php echo $row['responsibilities']; ?> <br>
								
								<h2> Skills </h2> <h4><?php echo $row['skills']; ?> </h4><br>
							
							    <h2>Qualification :<h2> <h4><?php echo $row['qualification']; ?></h4><br>
							
							    <h2> Experience : </h2> <h4> <?php echo $row['experience']; ?> </h4> <br>
							
						        <h2>	 Age : </h2> <h4> <?php echo $row['age']; ?> </h4><br>
						
						        <h2>    Gender : </h2>	<h4> <?php echo $row['gender']; ?> </h4><br>
								
								
								
								<a href=" <?php echo base_url();?>career/view/<?php echo $row['id'];?>"><button class=" btn-floating btn-success btn-lg" style="background-color:#FFBD33;"><i></i>Apply Now</button> </a>
	
                													</div>
                			</div>
                		</div>
						
						 <?php }?> 
                        
                	</div>
                </div>
			</div>
		</section>
	</div>
</div>





