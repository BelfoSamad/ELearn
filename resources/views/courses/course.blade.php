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
					<li><a href="#chapters">Chapters</a></li>
				</ul>
			</div>
		</nav>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-8">
					<section id="description">
						<h2>Description</h2>
						<p>{{$course->description}}</p>
						<!-- /row -->
					</section>
					<!-- /section -->

					<section id="chapters">
						<div class="intro_title">
							<h2>Chapters</h2>
							<ul>
								<li>{{$course->chapters()->count()}} Chapters</li>
								<li>{{$course->duration}} Min</li>
							</ul>
						</div>
						<div id="accordion_lessons" role="tablist" class="add_bottom_45">
							@foreach ($course->chapters()->get() as $chapter)
							<div class="card">
								<div class="card-header" role="tab" id="heading{{$chapter->id}}">
									<h5 class="mb-0">
										<a class="collapsed" data-toggle="collapse" href="#collapse{{$chapter->id}}"
											aria-expanded="false" aria-controls="collapse{{$chapter->id}}">
											<i class="indicator ti-plus"></i>{{$chapter->title}}
										</a>
									</h5>
								</div>
								<div id="collapse{{$chapter->id}}" class="collapse" role="tabpanel"
									aria-labelledby="heading{{$chapter->id}}" data-parent="#accordion_lessons">
									<div class="card-body">
										<div class="list_lessons">
											<ul>
												@foreach ($chapter->sub_chapters()->get() as $subchapter)
												<li>{{$subchapter->title}}<span>00:59</span></li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<!-- /accordion -->
					</section>
					<!-- /section -->
				</div>
				<!-- /col -->

				<aside class="col-lg-4" id="sidebar">
					<div class="box_detail">
						@if (auth()->user()->my_courses->contains($course))
						<a href="./{{$course->slug}}/view" class="btn_1 full-width">View</a>
						@else
						<a href="./{{$course->slug}}/enroll" class="btn_1 full-width">Enroll</a>
						@endif
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