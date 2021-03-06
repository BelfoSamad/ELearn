@extends('layouts.base')
@section('course')
<main>
	<section id="page_name" class="general">
		<div class="wrapper">
			<div class="container">
				<h1 class="fadeInUp"><span></span>{{$course->title}}</h1>
			</div>
		</div>
	</section>

	<div class="bg_color_1">
		<nav class="course_page_nav sticky_horizontal">
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
					<section id="chapters">
						<div class="chapter_infos">
							<h2>Chapters</h2>
							<ul>
								<li>{{$course->chapters()->count()}} Chapters</li>
								<li>{{floor($course->duration / 60).'h:'.($course->duration % 60).'m'}}</li>
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
										<div class="chapters_list">
											<ul>
												@foreach ($chapter->sub_chapters()->get() as $subchapter)
												<li>{{$subchapter->title}}</li>
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
					<div class="actions">
						@auth
						@if (Auth::user()->my_courses->contains($course))
						<a href="/course/{{$course->slug}}/view" class="btn_1 full-width">View</a>
						<a href="/course/{{$course->slug}}/unenroll" class="btn_1 full-width">UnEnroll</a>
						@else
						<a href="/course/{{$course->slug}}/enroll" class="btn_1 full-width">Enroll</a>
						@endif
						@endauth
						@guest
						<a href="/course/{{$course->slug}}/enroll" class="btn_1 full-width">Enroll</a>
						@endguest
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