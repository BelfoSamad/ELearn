<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Udema a modern educational site template">
	<meta name="author" content="Ansonika">
	<title>ELearn</title>

	<!-- BASE CSS -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/style.css')}}" rel="stylesheet">
	<link href="{{asset('css/vendors.css')}}" rel="stylesheet">
	<link href="{{asset('css/blog.css')}}" rel="stylesheet">
	<link href="{{asset('css/icon_fonts/css/all_icons.min.css')}}" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="{{asset('css/custom.css')}}" rel="stylesheet">
</head>

<body>
	<div id="page">
		<main>
			<aside>
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
			</aside>
			<div class="course-content">
				<video src="{{asset('video/intro.mp4')}}" controls></video>
				<div class="course-details">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="description-tab" data-toggle="tab" href="#description"
								role="tab" aria-controls="description" aria-selected="true">Description</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="forum-tab" data-toggle="tab" href="#forum" role="tab"
								aria-controls="forum" aria-selected="false">Forum</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="description" role="tabpanel"
							aria-labelledby="description-tab">
							<section id="description">
								<h2>Description</h2>
								<p>{{$course->description}}</p>
							</section>
						</div>
						<div class="tab-pane fade" id="forum" role="tabpanel" aria-labelledby="forum-tab">
							<h5>Ask Question</h5>
							<form>
								<div class="form-group">
									<textarea class="form-control" name="comments" id="comments2" rows="6"
										placeholder="Comment"></textarea>
								</div>
								<div class="form-group">
									<button type="submit" id="submit2" class="btn_1 rounded add_bottom_30">
										Submit</button>
								</div>
							</form>

							<div id="comments">
								<h5>Comments</h5>
								<ul>
									@foreach ($comments as $comment)

									<li>
										<div class="avatar">
											<a href="#"><img
													src="http://via.placeholder.com/150x150/ccc/fff/avatar1.jpg" alt="">
											</a>
										</div>
										<div class="comment_right clearfix">
											<div class="comment_info">
												By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span>
											</div>
											<p>{{$comment->content}}</p>
										</div>
									</li>
									@endforeach
									<li>
										<div class="avatar">
											<a href="#"><img
													src="http://via.placeholder.com/150x150/ccc/fff/avatar1.jpg" alt="">
											</a>
										</div>
										<div class="comment_right clearfix">
											<div class="comment_info">
												By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span>
											</div>
											<p>
												Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non
												pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum
												sociis
												natoque penatibus et magnis dis parturient montes, nascetur ridiculus
												mus.
												Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et
												congue
												ante.
											</p>
										</div>
									</li>
									<li>
										<div class="avatar">
											<a href="#"><img
													src="http://via.placeholder.com/150x150/ccc/fff/avatar3.jpg" alt="">
											</a>
										</div>
										<div class="comment_right clearfix">
											<div class="comment_info">
												By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span>
											</div>
											<p>
												Cursus tellus quis magna porta adipiscin
											</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
		</main>
	</div>
	<!-- COMMON SCRIPTS -->
	<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('js/common_scripts.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<script src="{{asset('assets/validate.js')}}"></script>

	<!-- SPECIFIC SCRIPTS -->
	<script src="{{asset('js/jquery.cookiebar.js')}}"></script>
	<script src="{{asset('jquery-3.4.1.min.js')}}"></script>

</body>

</html>