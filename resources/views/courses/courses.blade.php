@extends('base')
@section('courses')
<main>
	<section id="hero_in" class="courses">
		<div class="wrapper">
			<div class="container">
				<h1 class="fadeInUp"><span></span>Courses</h1>
			</div>
		</div>
	</section>
	<!--/hero_in-->
	<div class="filters_listing sticky_horizontal">
		<div class="container">
			<ul class="clearfix">
				<li>
				</li>
				<li>
				</li>
			</ul>
		</div>
		<!-- /container -->
	</div>
	<!-- /filters -->
	<div class="container margin_60_35">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					@foreach ($courses as $course)
					<div class="col-md-4">
						<div class="box_grid wow">
							<figure class="block-reveal">
								<div class="block-horizzontal"></div>
								<a href="/course/{{$course->slug}}"><img
										src="http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg"
										class="img-fluid" alt=""></a>
								<div class="preview"><span>Preview course</span></div>
							</figure>
							<div class="wrapper">
								<h3>{{$course->title}}</h3>
								<p>{{$course->description}}</p>

							</div>
							<ul>
								<li><i class="icon_clock_alt"></i> {{$course->duration}} min</li>
								<li><a href="/course/{{$course->slug}}/enroll">Enroll now</a></li>
							</ul>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<!-- /col -->
		</div>
		<!-- /row -->
	</div>

</main>
<!--/main-->
@endsection