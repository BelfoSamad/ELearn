<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Str;
use \App;

class CoursesController extends Controller{

    public function get_category_courses($category){
        $courses = App\Category::where('name', $category)->get()->first()->courses()->get();
        return view('courses.courses', ['courses' => $courses, 'category' => $category]);
    }

    public function get_courses(){
        $courses = App\Course::all();
        return view('courses.courses', ['courses' => $courses, 'category' => '']);
    }

    /**
     * Get My Courses List
     */
    public function get_my_courses(){
        //Gettin the Courses of the User Logged In
        $user = auth()->user();
        if ($user->type == 'Teacher'){
            $courses = auth()->user()->constructed_courses()->get();
        }else{
            $courses = auth()->user()->my_courses()->get();
        }
        return view('courses.courses', ['courses', $courses]);
    }

    public function download($resource){
        return Storage::download('public/content/resources/'.$resource);
    }

    /**
     * Get Course Infos
     */
    public function get_course($slug){
        $course = App\Course::where('slug', $slug)->get()->first();
        return view('courses.course', ['course' => $course]);
    }

    /**
     * Enroll in Course (For Students)
     */
    public function enroll($slug){
        $user = auth()->user();
        $course = App\Course::where('slug', $slug)->get();

        //Add User to Enrolled Students
        if ($user->type == 'Student'){
            $user->my_courses()->attach($course);   
        }
        
        return $this->view_course($slug);
    }

    public function unenroll($slug){
        $user = auth()->user();
        $course = App\Course::where('slug', $slug)->get();

        //Add User to Enrolled Students
        if ($user->type == 'Student'){
            $user->my_courses()->detach($course);   
        }
        
        return redirect('/');
    }

    /**
     * View Course
     */
    public function view_course($slug, $subchapter_id = null){
        $course = App\Course::where('slug', $slug)->get()->first();
        $constructor = App\User::find($course->user_id);
        if ($subchapter_id != null){
            $subchapter = App\SubChapter::find($subchapter_id);
        }else {
            $subchapter = $course->chapters()->get()->first()->sub_chapters()->get()->first();
        }
        $comments = $subchapter->comments()->get();
        return view('courses.view-course'
        ,['course' => $course,
            'subchapter' => $subchapter,
            'constructor' => $constructor, 
            'comments' => $comments]
        );
    }

    /**
     * Add Comment
     */
    public function add_comment($subchapter_id){
        $comment = new App\Comment();
        $comment->content = $request->input('comment');
        $comment->sub_chapter_id = $subchapter_id;
        $comment->save();
    }

    /**
     * Add Course
     */
    public function add_course(Request $request){
        if($request->input('course_title') != '' && $request->input('description') != ''){
            //Make New Course Instance
            $course = new App\Course();
            $course_title = $request->input('course_title');
            $course->title = $course_title;
            $course->description = $request->input('description');
            $course->category_id = App\Category::where('name', $request->input('category'))->get()->first()->id;
            $course->duration = $request->input('course_duration');
            //Make Slug
            $course->slug = Str::slug($course_title, '-');
            //Add Constructor
            $course->user_id = $request->user()->id;
            //Save Course
            $course->save();
        }else return back()->with('error_msg', 'Course Informations Missing');

        //Save Cover
        if ($request->hasfile('cover')){
            $cover = $request->file('cover');
            $cover_name = $course->slug.'_cover-'.$course->id.'.'.$cover->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('content/covers', $cover, $cover_name);
            App\Course::find($course->id)
                        ->update(['cover' => $cover_name]);
        }else return back()->with('error_msg', 'Cover Missing');


        /**
         * Add Chapters/SubChapters
         */
        $chapters_count = 1;
        while($request->has('c_title_'.$chapters_count)){
            if ($request->input('c_title_'.$chapters_count) != ''){
                $chapter_title = $request->input('c_title_'.$chapters_count);
                //Create Chapter
                $chapter = new App\Chapter();
                $chapter->title = $chapter_title;
                $chapter->course_id = $course->id;
                $chapter->save();
            }else return back()->with('error_msg', 'Chapter Infos Missing');

            //Save Chapter Resources
            $chapter_res = $request->file('res_'.$chapters_count);
            if($chapter_res != null){
                $res_name = $course->slug.'_chapter_'.$chapter->id.'.'.$chapter_res->getClientOriginalExtension();
                Storage::disk('public')->putFileAs('content/resources', $chapter_res, $res_name);
                App\Chapter::find($chapter->id)
                        ->update(['resource' => $res_name]);
            }

            $subchapters_count = 1;
            while($request->has('sc_title_'.$chapters_count.$subchapters_count)){
                if ($request->input('sc_title_'.$chapters_count.$subchapters_count) != ''){
                    $subchapter_title = $request->input('sc_title_'.$chapters_count.$subchapters_count);
                    //Create SubChapter
                    $subchapter = new App\SubChapter();
                    $subchapter->title = $subchapter_title;
                    $subchapter->chapter_id = $chapter->id;
                    $subchapter->save();
                }else return back()->with('error_msg', 'SubChapter Infos Missing');

                //Save Subchapter Video
                if ($request->hasfile('res_'.$chapters_count.$subchapters_count)){
                    $subchapter_video = $request->file('res_'.$chapters_count.$subchapters_count);
                    $video_name = $course->slug.'_subchapter_'.$subchapter->id.'.'.$subchapter_video->getClientOriginalExtension();
                    Storage::disk('public')->putFileAs('content/videos', $subchapter_video, $video_name);
                    App\SubChapter::find($subchapter->id)
                            ->update(['video' => $video_name]);
                }else return back()->with('error_msg', 'Video Missing');
                
                $subchapters_count++;
            }
            $chapters_count++;
        }
    }

    /**
     * To go back with a msg return back()->with('msg', 'The Message')
     */
}
