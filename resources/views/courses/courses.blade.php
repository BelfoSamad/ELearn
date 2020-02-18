@extends('base')
@section('courses')
<main>
	<section id="hero_in" class="courses">
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
					@auth
					@if (!$course->enrolled_students->contains(Auth::user()))
					<div class="col-md-4">
						<div class="box_grid wow">
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
						<div class="box_grid wow">
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
								<li><a href="/course/{{$course->slug}}">Enrolled</a></li>
							</ul>
						</div>
					</div>
					@endif
					@endauth
					@guest
					<div class="col-md-4">
						<div class="box_grid wow">
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