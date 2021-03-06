@extends('layouts.base')
@section('home')
<main>
	<section class="hype_section">
		<div class="wrapper">
			<div class="container">
				<h3><strong>Get the BEST Courses</strong><br>on ELearn</h3>
			</div>
			<a href="#first_section" class="btn_explore hidden_tablet"><i class="ti-arrow-down"></i></a>
		</div>
	</section>

	<div class="container-fluid margin_120_0" id="first_section">
		<div class="section_title">
			<span><em></em></span>
			<h2>Popular Courses</h2>
		</div>
		<div id="recommended" class="owl-carousel owl-theme">
			@foreach ($courses as $course)
			@auth
			@if (!Auth::user()->my_courses->contains($course))
			<div class="item">
				<div class="course_grid">
					<figure>
						<a href="/course/{{$course->slug}}">
							<div class="preview"><span>Preview course</span></div><img
								src="{{ Storage::url('content/covers/'.$course->cover)}}" class="img-fluid" alt="">
						</a>
					</figure>
					<div class="wrapper">
						<h3>{{$course->title}}</h3>
						<p>{{$course->description}}</p>
					</div>
					<ul>
						<li><i class="icon_clock_alt"></i>
							{{floor($course->duration / 60).'h:'.($course->duration % 60).'m'}}</li>
						<li><a href="/course/{{$course->slug}}/enroll">Enroll now</a></li>
					</ul>
				</div>
			</div>
			@else
			<div class="item">
				<div class="course_grid">
					<figure>
						<a href="/course/{{$course->slug}}">
							<div class="preview"><span>Preview course</span></div><img
								src="{{ Storage::url('content/covers/'.$course->cover)}}" class="img-fluid" alt="">
						</a>
					</figure>
					<div class="wrapper">
						<h3>{{$course->title}}</h3>
						<p>{{$course->description}}</p>
					</div>
					<ul>
						<li><i class="icon_clock_alt"></i>
							{{floor($course->duration / 60).'h:'.($course->duration % 60).'m'}}</li>
						<li><a href="/course/{{$course->slug}}/view">View</a></li>
					</ul>
				</div>
			</div>
			@endif
			@endauth
			@guest
			<div class="item">
				<div class="course_grid">
					<figure>
						<a href="/course/{{$course->slug}}">
							<div class="preview"><span>Preview course</span></div><img
								src="{{ Storage::url('content/covers/'.$course->cover)}}" class="img-fluid" alt="">
						</a>
					</figure>
					<div class="wrapper">
						<h3>{{$course->title}}</h3>
						<p>{{$course->description}}</p>
					</div>
					<ul>
						<li><i class="icon_clock_alt"></i>
							{{floor($course->duration / 60).'h:'.($course->duration % 60).'m'}}</li>
						<li><a href="/course/{{$course->slug}}/enroll">Enroll now</a></li>
					</ul>
				</div>
			</div>
			@endguest
			@endforeach
		</div>
		<div class="container">
			<p class="btn_home_align"><a href="/courses" class="btn_1 rounded">View all courses</a></p>
		</div>
		<!-- /container -->
		<hr>
	</div>
	<!-- /container -->

	<div class="container margin_30_95">
		<div class="section_title">
			<span><em></em></span>
			<h2>Categories</h2>
		</div>
		<div class="row">
			@foreach ($categories as $category)
			<div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
				<a href="/{{$category->name}}/courses" class="category">
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