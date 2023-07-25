<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCEAN vibes by TemplateMo</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/magnific-popup.css"> 
    <link rel="stylesheet" href="css/templatemo-ocean-vibes.css"> 
<!--
    
TemplateMo 554 Ocean Vibes

https://templatemo.com/tm-554-ocean-vibes

-->
</head>
<body>
<header class="tm-site-header">
        <h1 class="tm-mt-0 tm-mb-15"><span class="tm-color-primary">CCI FYP </span> <span class="tm-color-gray-2">Year 2022/2023</span></h1>
        <em class="tm-tagline tm-color-light-gray">student and project listing</em>
    </header>

    <!-- Video banner 400 px height -->
    <div id="tm-video-container">
        <video autoplay muted loop id="tm-video">
            <source src="video/ocean-sea-wave-video.mp4" type="video/mp4">
        </video>  
        <i id="tm-video-control-button" class="fas fa-pause"></i>
    </div>
    <div class="tm-container">
        <nav class="tm-main-nav">
            <ul id="inline-popups">
                
                <li class="tm-nav-item">
                    <a href="#testimonials" data-effect="mfp-move-from-top" class="tm-nav-link">
                        About
                        <i class="fas fa-3x fa-water"></i>
                    </a>
                </li>
                
            </ul>
        </nav>

    @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <x-app-layout>

        </x-app-layout>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            <a>  |   </a>
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
            </div>
    @endif    
    <style>
        td{
                text-align: center;
        }
        table{
            background-color: #96D4D4 
        }
    </style>
        <table border="2" style="width:100%">
                <tr>
                    <td>Project Title  </td>
                    <td>Project Type</td>
                    <td>Student Incharge  </td>
                    <td>Project Progress</td>
                    <td>Project Status</td>
                    <td>Start Date</td>
                    <td>End Date</td>
                    <td>supervisor  </td>
                    <td>examiner 1  </td>
                    <td>examiner 2  </td>
                    <td></td>
                </tr>

                @foreach($member as $x)
                
                    <tr>
                        <td>{{$x['title']}}</td>
                        <td>{{$x['type']}}</td>
                        <td>{{$x['studentname']}}</td>
                        <td>{{$x['progress']}}</td>
                        <td>{{$x['status']}}</td>
                        <td>{{$x['start']}}</td>
                        <td>{{$x['end']}}</td>
                        <td>{{$x['supervisor']}}</td>
                        <td>{{$x['examone']}}</td>
                        <td>{{$x['examtwo']}}</td>
                        <td><a href={{"update/".$x['id']}}>Update</a></href></td>
                    </tr>
                @endforeach
        </table> 
        <span>
                {{$member->links()}}
        </span>
            <style>
                .w-5
                {
                    display:none
                }
        </style>
<div id="testimonials" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                return home
                <i class="fas fa-times"></i>
            </a>
            <div class="tm-testimonials-inner">
                <h2 class="tm-color-gray tm-testimonial-col tm-page-title">About</h2>
                <div class="tm-row tm-testimonial-row">                
                    <div class="tm-col tm-testimonial-col">
                        <p>
                            Final Year Project (FYP) is a compulsory course for all CCI diploma and degree programs.
                            To graduate, 
                            students need to at least pass FYP course. 
                        </p>
                        <em class="tm-mb-30 tm-color-light-gray">
                        Each project shall be developed by one student. Each project shall have one supervisor and two 
                        examiners among CCI lecturers
                        </em>
                        <p>
                        The objectives or rationales of having a final year project for Bachelor of Computer Science (Hons) Software Engineering students
                        are as follows:
                        </p>
                        <p>
                            <ol>
                                <li>To apply knowledge/skills acquired from previous classes.</li>
                                <li>To gain experience in system development.</li>
                                <li>To learn new technologies and techniques not taught in class.</li>
                            </ol>
                        </p>
                    </div>
                    <div class="tm-col tm-testimonial-col tm-testimonial-col-2">
                        <blockquote>
                            <!--<p>
                                "Suspendisse eu mollis diam, at ullamcorper
                                diam. Ut sit amet arcu metus. Nullam mattis
                                eros eget." by <span class="tm-color-primary">George, Chief Editor</span>
                            </p>
                        </blockquote>
                        <blockquote class="tm-mb-50">
                            <p>
                                "Quisque et lorem accumsan, sollicitudin
                                dolor vel, facilisis eros. Donec aliquet felis in
                                mollis egestas." by <span class="tm-color-primary">Mary, CEO of Web</span>
                            </p>-->
                        </blockquote>                 
                    </div>
                    <div class="tm-col tm-testimonial-col tm-testimonial-col-2">
                        <!--<p>
                            Duis sapien diam, eleifend eget vehicula sed,
                            convallis sit amet elit. Aenean condimentum
                            vulputate porta.
                        </p>
                        <p>
                            Mauris accumsan erat ante, id sagittis felis
                            gravida vitae. Sed iaculis tincidunt neque, a
                            molestie magna vehicula at.
                        </p>
                        <p>
                            Phasellus ornare magna nec nulla pharetra,
                            nec tristique elit lobortis.
                        </p>-->
                    </div>
                </div>
            </div>            
        </div>

     

    <footer class="tm-footer">
        <span>Copyright &copy; 2020 Your Company</span>
        <span>Web Designed by 
        <a href="https://templatemo.com" title="free website templates" target="_parent" rel="nofollow">TemplateMo</a></span>
</footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/templatemo-script.js"></script>
</body>
</html>