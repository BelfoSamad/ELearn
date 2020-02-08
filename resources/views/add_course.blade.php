<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/course/add/new" method="post" enctype="multipart/form-data">
    @csrf
    <fieldset name="Add Course">
        <legend>Add Course Infos</legend>
        Title: <input type="text" name="course_title" /><br/><br/>
        description: <textarea name="description"></textarea><br/><br/>
        Cover: <input type="file" name="cover" accept="image/*"/><br/><br/>
        <fieldset name="Add Chapters">
            <legend>Add Chapters</legend>
            <div class="chapters">
            </div>
            <button type="button" class="add_chapter">Add Chapter</button>
        </fieldset>
    </fieldset>
    <br />
    <input type="submit" value="Add" />
    </form><br />
    @if(Session::has('error_msg'))
        {{Session::get('error_msg')}}
    @endif
    <script src="{{asset('jquery-3.4.1.min.js')}}"></script>
    <script>
        var x = 1;
        $(document).on("click", ".add_chapter", function() {

            //Create Chapter
            var chapter = document.createElement("div");
            chapter.setAttribute("class", "c_" + x);
            //Add Inputs
            chapter.innerHTML = "Chapter Title: <input type=\"text\" name=\"c_title_"+
            x+"\" /><br/><br/> Resources: <input type=\"file\" name=\"res_"+x+"\" /><br/><br/>";
            
            //Create the Subchapters Fieldset
            var fieldset = document.createElement("fieldset");
            var legend = document.createElement("legend");
            legend.innerText = "Add SubChapters";
            fieldset.append(legend);
            
            //Subchapters
            subchapters = document.createElement("div");
            subchapters.setAttribute("class", "subchapters_"+x);

            //Add Subchapter Button
            button = document.createElement("button");
            button.setAttribute("class", "add_sub_chapter");
            button.setAttribute("id", "a_sc_"+x);
            button.setAttribute("count", 0);
            button.setAttribute("type", "button");
            button.innerText = "Add SubChapter";

            //Append to Fieldset
            fieldset.append(subchapters);
            fieldset.append(button);

            chapter.append(fieldset);
            $(".chapters").append(chapter);
            $(".chapters").append("<hr />");
            x++;
        });

        $(document).on("click", ".add_sub_chapter", function() {
            //Get Id of Chapter
            var c_id = $(this).attr("id").split("_")[2];
            console.log(c_id);
            var sc_id = parseInt($(this).attr("count"), 10) + 1;
            console.log(sc_id);

            //Create Chapter
            var subchapter = document.createElement("div");
            var class_sc = "sc_" + c_id + sc_id;
            subchapter.setAttribute("class", class_sc);

            //Add Inputs
            subchapter.innerHTML = "Chapter Title: <input type=\"text\" name=\"sc_title_"+c_id+sc_id
            +"\" /><br/><br/> Video: <input type=\"file\" accept=\"video/*\" name=\"res_"+c_id+sc_id+"\" /><br/><br/>";
            
            //Add Count
            $(this).attr("count", sc_id);

            $(".subchapters_"+c_id).append(subchapter);
            $(".subchapters_"+c_id).append("<hr />");
        });
    </script>
</body>
</html>