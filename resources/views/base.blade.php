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
    <link href="{{asset('css/icon_fonts/css/all_icons.min.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
</head>

<body>
    <div id="page">
        <header class="header menu_2">
            <div id="preloader">
                <div data-loader="circle-side"></div>
            </div><!-- /Preload -->
            <div id="logo">
                <a href="index.html"><img src="{{asset('img/logo.png')}}" width="149" height="42" data-retina="true"
                        alt=""></a>
            </div>
            <ul id="top_menu">
                @auth
                <li class="hidden_tablet"><a href="/profile" class="btn_1 rounded">Profile</a></li>
                <li class="hidden_tablet"><a href="/logout">Logout</a></li>
                @endauth
                @guest
                <li class="hidden_tablet"><a href="/login" class="btn_1 rounded">Login</a></li>
                <li class="hidden_tablet"><a href="/register" class="btn_1 rounded">Register</a></li>
                @endguest
            </ul>
            <!-- /top_menu -->
            <a href="#menu" class="btn_mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <nav id="menu" class="main-menu">
                <ul>
                    <li><span><a href="/">Home</a></span></li>
                    <li><span><a href="/courses">Courses</a></span></li>
                </ul>
            </nav>
        </header>
        @yield('home')
        @yield('courses')
        @yield('course')
        @yield('add-course')
        @yield('profile')
        <footer>
            <div class="container margin_120_95">
                <div class="row">
                    <div class="col-lg-5 col-md-12 p-r-5">
                        <p><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Quisque placerat dui eget lacus pulvinar, sed aliquam nisi tristique.
                            Vestibulum ornare nisi diam, eu aliquet nulla porttitor nec. In molestie, lacus quis
                            fringilla facilisis, urna est laoreet nisi, sit amet hendrerit lorem ipsum ac erat.</p>

                    </div>
                    <div class="col-lg-3 col-md-6 ml-lg-auto">
                        <h5>Useful links</h5>
                        <ul class="links">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                        </ul>
                    </div>
                </div>
                <!--/row-->
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <ul id="additional_links">
                            <li><a href="#0">Terms and conditions</a></li>
                            <li><a href="#0">Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div id="copy">© 2020 ELearn</div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/footer-->
    </div>
    <!-- COMMON SCRIPTS -->
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('js/common_scripts.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('assets/validate.js')}}"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="{{asset('js/jquery.cookiebar.js')}}"></script>
    <script src="{{asset('jquery-3.4.1.min.js')}}"></script>
    <script>
        var x = 1;
        $(document).on("click", ".add_chapter", function() {

            //Create Chapter
            var chapter = document.createElement("div");
            chapter.setAttribute("class", "c_" + x);
            //Add Inputs
            chapter.innerHTML = "<div class=\"col-md-6\"><span class=\"input\">" +
            "<input class=\"input_field\" placeholder=\"Chapter Title\" type=\"text\" name=\"c_title_"+x+"\" />" +
            "<label class=\"input_label\"></label></span></div>" +
            "<input class=\"inputfile\" type=\"file\" name=\"res_"+x+"\" />";
            
            //Create the Subchapters Fieldset
            var fieldset = document.createElement("fieldset");
            
            //Subchapters
            subchapters = document.createElement("div");
            subchapters.setAttribute("class", "subchapters_"+x);

            //Add Subchapter Button
            button = document.createElement("button");
            button.setAttribute("class", "add_sub_chapter btn btn-secondary");
            button.setAttribute("id", "a_sc_"+x);
            button.setAttribute("count", 0);
            button.setAttribute("type", "button");
            button.innerText = "+ SubChapter";

            //Append to Fieldset
            fieldset.append(subchapters);
            fieldset.append(button);

            chapter.append(fieldset);
            $(".chapters").append(chapter);
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
            subchapter.innerHTML = "<div class=\"col-md-6\"><span class=\"input\">" + 
            "<input class=\"input_field\" placeholder=\"Subchapter Title\" type=\"text\" name=\"sc_title_"+c_id+sc_id+"\" />" +
            "<label class=\"input_label\"></label></span></div>" + 
            "<input class=\"inputfile\" type=\"file\" accept=\"video/*\" name=\"res_"+c_id+sc_id+"\" />";
            
            //Add Count
            $(this).attr("count", sc_id);

            $(".subchapters_"+c_id).append(subchapter);
        });
    </script>

</body>

</html>