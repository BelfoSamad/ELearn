{{$course->title}}<br />
{{$course->slug}}<br />
{{$course->description}}<br />
{{$course->id}}<br />
{{$course->cover}}<br />

@foreach ($course->chapters()->get() as $chapter)
    {{$chapter->title}}
    @foreach ($chapter->subchapters()->get() as $subchapter)
        {{$subchapter->title}}
    @endforeach
@endforeach