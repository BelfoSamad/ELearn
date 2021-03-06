@extends('layouts.base')
@section('add-course')
<main>
    <section id="page_name" class="general">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Add Course</h1>
            </div>
        </div>
    </section>

    <div class="container margin_120_95">
        <div class="col-lg-9 add-container">
            <h4>Add Course</h4>
            <p>Make sure to fill all Informations before adding the course</p>
            <form action="/course/add/new" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset name="Add Course">
                    <div class="form-group">
                        <span class="input">
                            <input class="input_field" type="text" name="course_title" placeholder="Course Title"
                                required />
                            <label class="input_label"></label>
                        </span>
                    </div>
                    <div class="form-group">
                        <span class="input">
                            <input class="input_field" type="number" name="course_duration" placeholder="Duration"
                                required />
                            <label class="input_label"></label>
                        </span>
                    </div>
                    <div class="form-group select">
                        <div class="styled-select">
                            <select class="required" name="category" id="category" required>
                                <option value="" selected="">Select a Category</option>
                                <option value="Business">Business</option>
                                <option value="IT">IT</option>
                                <option value="Languages">Languages</option>
                                <option value="Math">Math</option>
                                <option value="Science">Science</option>
                                <option value="Software Development">Software Development</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <span class="input">
                            <textarea class="input_field" name="description" style="height:150px;"
                                placeholder="Course Description" required></textarea>
                            <label class="input_label"></label>
                        </span>
                    </div>
                    <div class="upload-btn-wrapper">
                        <button class="btn_upload">Upload a Cover</button>
                        <input type="file" id="file" aria-label="File browser example" name="cover" accept="image/*"
                            required>
                    </div>
                    <fieldset name="Add Chapters">
                        <div class="chapters">
                        </div>
                        <button type="button" class="add_chapter btn btn-secondary">&#43; Chapter</button>
                    </fieldset>
                </fieldset>
                <input type="submit" value="Add Course" class="btn_1 rounded add_course" />
            </form>
        </div>
    </div>
</main>
@endsection