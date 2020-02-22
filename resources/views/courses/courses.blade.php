@extends('layouts.base')
@section('courses')
<main>
	<section id="page_name" class="general">
		<div class="wrapper">
			<div class="container">
				@if ($category != null)
				<h1 class="fadeInUp"><span></span>{{$category}}</h1>
				@else
				<h1 class="fadeInUp"><span></span>Courses</h1>
				@endif
			</div>
		</div>
	</section>

	<div class="container margin_60_35">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					@foreach ($courses as $course)
					@auth
					@if (!Auth::user()->my_courses->contains($course))
					<div class="col-md-4">
						<div class="course_grid wow">
							<figure class="block-reveal">
								<div class="block-horizzontal"></div>
								<a href="/course/{{$course->slug}}"><img
										src="{{ Storage::url('content/covers/'.$course->cover)}}" class="img-fluid"
										alt=""></a>
								<div class="preview"><span>Preview course</span></div>
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
					<div class="col-md-4">
						<div class="course_grid wow">
							<figure class="block-reveal">
								<div class="block-horizzontal"></div>
								<a href="/course/{{$course->slug}}"><img
										src="{{ Storage::url('content/covers/'.$course->cover)}}" class="img-fluid"
										alt=""></a>
								<div class="preview"><span>Preview course</span></div>
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
					<div class="col-md-4">
						<div class="course_grid wow">
							<figure class="block-reveal">
								<div class="block-horizzontal"></div>
								<a href="/course/{{$course->slug}}"><img
										src="{{ Storage::url('content/covers/'.$course->cover)}}" class="img-fluid"
										alt=""></a>
								<div class="preview"><span>Preview course</span></div>
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
			</div>
			<!-- /col -->
		</div>
		<!-- /row -->
	</div>

</main>
<!--/main-->
@endsection