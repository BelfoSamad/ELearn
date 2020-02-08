@foreach ($courses as $course)
    {{$course->title}}<br />
    {{$course->slug}}<br />
    {{$course->description}}<br />
    {{$course->id}}<br />
    {{$course->cover}}<br />
@endforeach