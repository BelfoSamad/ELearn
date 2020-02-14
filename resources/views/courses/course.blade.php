@extends('base')
@section('course')
<main>
	<section id="hero_in" class="courses">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>{{$course->title}}</h1>
				</div>
			</div>
	</section>
	<!--/hero_in-->

		<div class="bg_color_1">
			<nav class="secondary_nav sticky_horizontal">
				<div class="container">
					<ul class="clearfix">
						<li><a href="#description" class="active">Description</a></li>
						<li><a href="#lessons">Lessons</a></li>
						<li><a href="#reviews">Reviews</a></li>
					</ul>
				</div>
			</nav>
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						
						<section id="description">
							<h2>Description</h2>
							<p>Per consequat adolescens ex, cu nibh commune temporibus vim, ad sumo viris eloquentiam sed. Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
							<hr>
							<!-- /row -->
						</section>
						<!-- /section -->
						
						<section id="lessons">
							<div class="intro_title">
								<h2>Chapters</h2>
								<ul>
									<li>{{$course->chapters()->count()}} Chapters</li>
									<li>{{$course->duraion}}</li>
								</ul>
							</div>
							<div id="accordion_lessons" role="tablist" class="add_bottom_45">
								<div class="card">
									<div class="card-header" role="tab" id="headingOne">
										<h5 class="mb-0">
											<a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="indicator ti-minus"></i> Introdocution</a>
										</h5>
									</div>

									<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health Science</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health and Social Care</a><span>00:59</span></li>
																							</ul>
											</div>
										</div>	<li><a href="#0" class="txt_doc">Audiology</a><span>00:59</span></li>
	
									</div>
								</div>
								<!-- /card -->
								<div class="card">
									<div class="card-header" role="tab" id="headingTwo">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<i class="indicator ti-plus"></i>Generative Modeling Review
											</a>
										</h5>
									</div>
									<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health Science</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health and Social Care</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">History</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Healthcare Science</a><span>00:59</span></li>
													<li><a href="#0" class="txt_doc">Audiology</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->
								<div class="card">
									<div class="card-header" role="tab" id="headingThree">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												<i class="indicator ti-plus"></i>Variational Autoencoders
											</a>
										</h5>
									</div>
									<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health Science</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health and Social Care</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">History</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Healthcare Science</a><span>00:59</span></li>
													<li><a href="#0" class="txt_doc">Audiology</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->
								<div class="card">
									<div class="card-header" role="tab" id="headingFourth">
										<h5 class="mb-0">
											<a class="collapsed" data-toggle="collapse" href="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
												<i class="indicator ti-plus"></i>Gaussian Mixture Model Review
											</a>
										</h5>
									</div>
									<div id="collapseFourth" class="collapse" role="tabpanel" aria-labelledby="headingFourth" data-parent="#accordion_lessons">
										<div class="card-body">
											<div class="list_lessons">
												<ul>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health Science</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Health and Social Care</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">History</a><span>00:59</span></li>
													<li><a href="https://www.youtube.com/watch?v=LDgd_gUcqCw" class="video">Healthcare Science</a><span>00:59</span></li>
													<li><a href="#0" class="txt_doc">Audiology</a><span>00:59</span></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- /card -->
							</div>
							<!-- /accordion -->
						</section>
						<!-- /section -->
					</div>
					<!-- /col -->
					
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail">
							<a href="./enroll" class="btn_1 full-width">Enroll</a>
						</div>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
@endsection