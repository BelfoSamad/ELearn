@extends('base')
@section('home')
<main>
	<section class="hero_single">
		<div class="wrapper">
			<div class="container">
				<h3><strong>Get the BEST Courses</strong><br>on ELearn</h3>
			</div>
			<a href="#first_section" class="btn_explore hidden_tablet"><i class="ti-arrow-down"></i></a>
		</div>
	</section>
	<!-- /hero_single -->

	<div class="container-fluid margin_120_0" id="first_section">
		<div class="main_title_2">
			<span><em></em></span>
			<h2>Popular Courses</h2>
		</div>
		<div id="reccomended" class="owl-carousel owl-theme">
			@foreach ($courses as $course)
			<div class="item">
				<div class="box_grid">
					<figure>
						<a href="/course/{{$course->slug}}/view">
							<div class="preview"><span>Preview course</span></div><img
								src="{{ storage_path('content\covers\\'.$course->cover) }}" class="img-fluid" alt="">
						</a>
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
		<!-- /carousel -->
		<div class="container">
			<p class="btn_home_align"><a href="/courses" class="btn_1 rounded">View all courses</a></p>
		</div>
		<!-- /container -->
		<hr>
	</div>
	<!-- /container -->

	<div class="container margin_30_95">
		<div class="main_title_2">
			<span><em></em></span>
			<h2>Categories</h2>
		</div>
		<div class="row">
			@foreach ($categories as $category)
			<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
				<a href="/{{$category->name}}/courses" class="grid_item">
					<figure class="block-reveal">
						<div class="block-horizzontal"></div>
						<img src="{{asset('img/category-covers/')}}/{{$category->cover}}" class="img-fluid" alt=""
							style="width : 350px; height : 233px;">
						<div class="info">
							<small><i class="ti-layers"></i>{{$category->courses()->count()}} Courses</small>
							<h3>{{$category->name}}</h3>
						</div>
					</figure>
				</a>
			</div>
			@endforeach
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>
<!-- /main -->

@endsection