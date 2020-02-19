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
										@if ($chapter->resource != null)
										<li>Resources<span><a href="/download/{{$chapter->resource}}"><i
														class="icon_download"></i> ZIP</a></span>
										</li>
										@endif
										@foreach ($chapter->sub_chapters()->get() as $subchapter)
										<li class="get_video" id="{{$subchapter->id}}"
											src="{{ Storage::url('content/videos/'.$subchapter->video)}}"
											href="/course/{{$course->slug}}/view&id={{$subchapter->id}}">
											{{$subchapter->title}}</li>
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
				<video id="course_content" src="{{ Storage::url('content/videos/'.$subchapter->video)}}"
					controls></video>
				<div class="course-details">
					<h5>Ask Question</h5>
					<form>
						<div class="form-group">
							<textarea class="form-control" name="question" id="question" rows="2"
								placeholder="Question"></textarea>
						</div>
						<div class="form-group">
							<button type="button" href="/course/{{$subchapter->id}}/add_question" id="submit_question"
								class="btn_1 rounded add_bottom_30">
								Submit</button>
						</div>
					</form>

					<div id="comments">
						<h5>Q/A</h5>
						<ul class="questions">
							@foreach ($questions as $question)
							<li>
								<div class="avatar">
									<a href="#"><img src="{{ Storage::url('avatars/'.$question->author->avatar)}}"
											alt="">
									</a>
								</div>
								<div class="comment_right clearfix">
									<div class="comment_info">
										By
										{{$question->author->name}}<span>|</span>{{$question->created_at->format('j F, Y')}}
									</div>
									<p>{{$question->question}}
									</p>
								</div>
								<ul class="replied-to">
									<h5>Answer</h5>
									<form>
										<div class="form-group">
											<textarea class="form-control" name="answer" id="answer" rows="2"
												placeholder="Answer"></textarea>
										</div>
										<div class="form-group">
											<button type="button" id="submit_answer"
												href="/course/{{$question->id}}/add_answer"
												class="btn_1 rounded add_bottom_30">
												Submit</button>
										</div>
									</form>
									@foreach ($question->answers()->get() as $answer)
									<li>
										<div class="avatar">
											<a href="#"><img src="{{ Storage::url('avatars/'.$answer->author->avatar)}}"
													alt="">
											</a>
										</div>
										<div class="comment_right clearfix">
											<div class="comment_info">
												By
												{{$answer->author->name}}<span>|</span>{{$answer->created_at->format('j F, Y')}}
											</div>
											<p>
												{{$answer->answer}}
											</p>
										</div>
									</li>
									@endforeach
								</ul>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
		</main>
	</div>
	<!-- COMMON SCRIPTS -->
	<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('js/common_scripts.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<script src="{{asset('js/validate.js')}}"></script>

	<!-- SPECIFIC SCRIPTS -->
	<script src="{{asset('jquery-3.4.1.min.js')}}"></script>

	<script>
		$(".get_video").on("click", function(){
			document.getElementById("course_content").src = $(this).attr("src");
			console.log("/course/"+$(this).attr("id")+"/add_question");
			$("#submit_question").attr("href", "/course/"+$(this).attr("id")+"/add_question");
			var url = $(this).attr("href");
			$.ajax({
				type:'GET',
				url: url,
				dataType: "html",
				success: function(response){
					console.log(response);
					$('#comments').empty().html(response);
				}
			});
        });

		$("#submit_question").on("click", function(){
			var question = $("#question").val();
			$("#question").val("");
			if (question != ""){
			var url = $(this).attr("href");
			$.ajax({
				type:'GET',
				url: url,
				data:{
					'question': question,
				},
				dataType: "html",
				success: function(response){
					$('.questions').prepend(response);
				}
			});
			}
		});

		$("#submit_answer").on("click", function(){
			var answer = $("#answer").val();
			if (answer != ""){
			var url = $(this).attr("href");
			$.ajax({
				type:'GET',
				url: url,
				data:{
					'answer': answer,
				},
				dataType: "html",
				success: function(response){
					$('.replied-to').append(response);
				}
			});
			}
		});
	</script>

</body>

</html>