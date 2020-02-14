@extends('base')
@section('add-course')
<main>
    <section id="hero_in" class="courses">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Add Course</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
	<div class="container margin_120_95">
        <div class="col-lg-12">
        <h4>Send a message</h4>
        <p>Ex quem dicta delicata usu, zril vocibus maiestatis in qui.</p>
        <form action="/course/add/new" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset name="Add Course">
            <div class="col-md-6">
                <span class="input">
                    <input class="input_field" type="text" name="course_title" placeholder="Course Title"/>
                    <label class="input_label"></label>
				</span>
            </div>
            <div class="col-md-6">
                <span class="input">
                    <textarea class="input_field" name="description" style="height:150px;" placeholder="Course Description"></textarea>
                    <label class="input_label"></label>
                </span>
            </div>
            <label class="file">
                <input type="file" id="file" aria-label="File browser example" name="cover" accept="image/*">
                <span class="file-custom"></span>
            </label>
            <fieldset name="Add Chapters">
                <div class="chapters">
                </div>
                <button type="button" class="add_chapter btn btn-secondary">&#43; Chapter</button>
            </fieldset>
        </fieldset>
        <input type="submit" value="Add Course" class="btn_1 rounded add_course"/>
        </form>
        </div>
	</div>
</main>
@endsection
@if(Session::has('error_msg'))
    {{Session::get('error_msg')}}
@endif