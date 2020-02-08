<!-- Course Informations -->
{{$course->title}}<br />
{{$course->slug}}<br />
{{$course->description}}<br />
{{$course->id}}<br />
{{$course->cover}}<br />

<!-- To Go Through Chapters/SubChapters -->
@foreach ($course->chapters()->get() as $chapter)
    {{$chapter->title}}
    @foreach ($chapter->subchapters()->get() as $subchapter)
        {{$subchapter->title}}
    @endforeach
@endforeach

<!-- To Get Video -->
{{$subchapter->video}}

<!-- To Get Comments -->
@foreach ($subchapter->comments()->get() as $comment)
    {{$comment->content}}
    {{$comment->author}}
@endforeach