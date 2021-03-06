@extends('layouts.base')
@section('profile')
<main>
	<section id="page_name" class="general">
		<div class="wrapper">
			<div class="container">
				<h1 class="fadeInUp"><span></span>Profile</h1>
			</div>
		</div>
	</section>

	<div class="container margin_60_35">
		<div class="row">
			<aside class="col-lg-3" id="sidebar">
				<div class="profile">
					<figure><img src="{{ Storage::url('avatars/'.Auth::user()->avatar)}}" width="150px" height="128px"
							alt="Teacher" class="rounded-circle"></figure>
					<!-- <a href="">set Avatar</a> -->
					<ul>
						<li>Name <span class="float-right">{{Auth::user()->name}}</span></li>
						<li>Email <span class="float-right">{{Auth::user()->email}}</span></li>
						<li>Type <span class="float-right">{{Auth::user()->type}}</span></li>
						<li>Gender <span class="float-right">{{Auth::user()->gender}}</span></li>
						<li>Birthdate <span class="float-right">{{Auth::user()->birthdate}}</span></li>
						<li>My Courses <span class="float-right">{{$courses->count()}}</span></li>
						@if (auth()->user()->type == 'Teacher')
						<li><a href="/course/add">Add Course</a></li>
						@endif
					</ul>
				</div>
			</aside>
			<!--/aside -->

			<div class="col-lg-9">
				<div class="box_teacher">
					<div class="my_courses_title">
						<i class="pe-7s-display1"></i>
						<h3>My courses</h3>
					</div>
					<div class="wrapper_my_courses">
						<table class="table table-responsive table-striped add_bottom_30">
							<thead>
								<tr>
									<th>Category</th>
									<th>Course title</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($courses as $course)
								<tr>
									<td>{{$course->category->name}}</td>
									<td><a href="/course/{{$course->slug}}">{{$course->title}}</a></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- /col -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>
<!--/main-->
@endsection