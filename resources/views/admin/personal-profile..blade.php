<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/admin/personal-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Dec 2022 18:58:03 GMT -->
<head> 

    <!-- Basic Page Needs
    ================================================== -->
    <title>Courseplus Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

    <!-- Favicon -->
    <link href="../assets/images/favicon.png" rel="icon" type="image/png">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/icons.css">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="../assets/css/uikit.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../../../unpkg.com/tailwindcss%402.2.19/dist/tailwind.min.css" rel="stylesheet">

   
</head>

<body>

    <div id="wrapper" class="is-verticle admin-panel">

        <!--  Header  -->
        <header uk-sticky> 
            <div class="header_inner">
                <div class="left-side">
    
                    <!-- Logo -->
                    <div id="logo">
                        <a href="dashboard.html">
                            <img src="../assets/images/logo.png" alt="">
                            <img src="../assets/images/logo-light.png" class="logo_inverse" alt="">
                            <img src="../assets/images/logo-mobile.png" class="logo_mobile" alt="">
                        </a>
                    </div>
                    <!-- icon menu for mobile -->
                    <div class="triger" uk-toggle="target: #wrapper ; cls: is-active"> 
                    </div>
    
                </div>
                <div class="right-side">
     
                    <!-- Header search box  -->
                    <div class="header_search"><i class="uil-search-alt"></i> 
                        <input value="" type="text" class="form-control" placeholder=" Quick search for anything.." autocomplete="off">
                        <div uk-drop="mode: click;offset:10" class="header_search_dropdown">
                               
                            <h4 class="search_title"> Recently </h4>
                            <ul>
                                <li> 
                                    <a href="#">  
                                        <img src="../assets/images/avatars/avatar-1.jpg" alt="" class="list-avatar">
                                        <div class="list-name">  Erica Jones </div>
                                    </a> 
                                </li> 
                                <li> 
                                    <a href="#">  
                                        <img src="../assets/images/avatars/avatar-2.jpg" alt="" class="list-avatar">
                                        <div class="list-name">  Coffee  Addicts </div>
                                    </a> 
                                </li>
                                <li> 
                                    <a href="#">  
                                        <img src="../assets/images/avatars/avatar-3.jpg" alt="" class="list-avatar">
                                        <div class="list-name"> Mountain Riders </div>
                                    </a> 
                                </li>
                                <li> 
                                    <a href="#">  
                                        <img src="../assets/images/avatars/avatar-4.jpg" alt="" class="list-avatar">
                                        <div class="list-name"> Property Rent And Sale  </div>
                                    </a> 
                                </li>
                                <li> 
                                    <a href="#">  
                                        <img src="../assets/images/avatars/avatar-5.jpg" alt="" class="list-avatar">
                                        <div class="list-name">  Erica Jones </div>
                                    </a> 
                                </li>
                            </ul>
    
                        </div>
                    </div>
                    
                    <div>

                        <!-- search icon for mobile -->
                        <div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"> </div>
 
        
                        <!-- notification -->
                        <a href="#" class="header_widgets">
                            <ion-icon name="mail-outline" class="is-icon"></ion-icon>
                        </a>
                        <div uk-drop="mode: click" class="header_dropdown"> 
                            <div class="drop_headline">
                                <h4>Notifications </h4>
                                <div class="btn_action">
                                    <div class="btn_action">
                                        <a href="#">
                                            <ion-icon name="settings-outline" uk-tooltip="title: Notifications settings ; pos: left"></ion-icon>
                                        </a>
                                        <a href="#">
                                            <ion-icon name="checkbox-outline" uk-tooltip="title: Mark as read all ; pos: left"></ion-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
        
                            <ul class="dropdown_scrollbar" data-simplebar>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-1.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p> <strong>Adrian Mohani</strong> Like Your Comment On Course
                                                <span class="text-link">Javascript Introduction </span>
                                            </p>
                                            <span class="time-ago"> 2 hours ago </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p>
                                                <strong>Stella Johnson</strong> Replay Your Comments in
                                                <span class="text-link">Programming for Games</span>
                                            </p>
                                            <span class="time-ago"> 9 hours ago </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p>
                                                <strong>Alex Dolgove</strong> Added New Review In Course
                                                <span class="text-link">Full Stack PHP Developer</span>
                                            </p>
                                            <span class="time-ago"> 12 hours ago </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-1.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <p>
                                                <strong>Jonathan Madano</strong> Shared Your Discussion On Course
                                                <span class="text-link">Css Flex Box </span>
                                            </p>
                                            <span class="time-ago"> Yesterday </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="see-all">See all</a>
                        </div>
        
                        <!-- messages -->
                        <a href="#" class="header_widgets">
                            <ion-icon name="notifications-outline" class="is-icon"></ion-icon>
                            <span> 2 </span>
                        </a>
                        <div uk-drop="mode: click" class="header_dropdown">
                            <div class="drop_headline">
                                <h4>Messages </h4>
                                <div class="btn_action">
                                    <a href="#">
                                        <ion-icon name="settings-outline" uk-tooltip="title: Message settings ; pos: left"></ion-icon>
                                    </a>
                                    <a href="#">
                                        <ion-icon name="checkbox-outline" uk-tooltip="title: Mark as read all ; pos: left"></ion-icon>
                                    </a>
                                </div>
                            </div>
                            <ul class="dropdown_scrollbar" data-simplebar>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-1.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> John menathon </strong> <span class="time"> 6:43 PM</span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Zara Ali </strong> <span class="time">12:43 PM</span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Mohamed Ali </strong> <span class="time"> Wed</span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-1.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> John menathon </strong> <span class="time"> Sun </span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Zara Ali </strong> <span class="time"> Fri </span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="drop_avatar"> <img src="../assets/images/avatars/avatar-3.jpg" alt="">
                                        </div>
                                        <div class="drop_content">
                                            <strong> Mohamed Ali </strong> <span class="time">1 Week ago</span>
                                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="see-all">See all</a>
                        </div>
        
                        <!-- profile -->
                        <a href="#" class="flex items-center space-x-2">
                            <img src="../assets/images/avatars/placeholder.png" class="header_widgets_avatar mr-3" alt=""> 
                            <span class="sm:inline hidden">  User admin </span>
                        </a>
                        <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">
                            <ul>   
                                <li>
                                    <a href="#" class="user">
                                        <div class="user_avatar">
                                            <img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                        </div>
                                        <div class="user_name">
                                            <div> Stella Johnson </div>
                                            <span> @Johnson </span>
                                        </div>
                                    </a>
                                </li>
                                <li> 
                                    <hr>
                                </li>
                                <li> 
                                    <a href="#" class="is-link">
                                        <ion-icon name="rocket-outline" class="is-icon"></ion-icon> <span>  Upgrade Membership  </span>
                                    </a>
                                </li> 
                                <li> 
                                    <hr>
                                </li>
                                <li> 
                                    <a href="#">
                                        <ion-icon name="person-circle-outline" class="is-icon"></ion-icon>
                                         My Account 
                                    </a>
                                </li>
                                <li> 
                                    <a href="#">
                                        <ion-icon name="card-outline" class="is-icon"></ion-icon>
                                        Subscriptions
                                    </a>
                                </li>
                                <li> 
                                    <a href="#">
                                        <ion-icon name="color-wand-outline" class="is-icon"></ion-icon>
                                        My Billing 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <ion-icon name="settings-outline" class="is-icon"></ion-icon>
                                        Account Settings  
                                    </a>
                                </li>
                                <li> 
                                    <hr>
                                </li>
                                <li> 
                                    <a href="#" id="night-mode" class="btn-night-mode" onclick="UIkit.notification({ message: 'Hmm...  <strong> Night mode </strong> feature is not available yet. ' , pos: 'bottom-right'  })">
                                        <ion-icon name="moon-outline" class="is-icon"></ion-icon>
                                         Night mode
                                        <span class="btn-night-mode-switch">
                                            <span class="uk-switch-button"></span>
                                        </span>
                                    </a>
                                </li>
                                <li> 
                                    <a href="#">
                                        <ion-icon name="log-out-outline" class="is-icon"></ion-icon>
                                        Log Out 
                                    </a>
                                </li>
                            </ul>
                        </div> 

                    </div>
    
                </div>
            </div>
        </header>

        <!-- Main Contents -->
        <div class="main_content">
 
            <div class="container">


                <h3 class="text-2xl font-medium mb-5"> General Setting </h3>

                <!-- Basic information -->
                <div class="grid lg:grid-cols-3 gap-8 md:mt-12">
                    <div>
                        <div uk-sticky="offset:100;bottom:true;media:992">
                            <h3 class="text-lg mb-2 font-semibold"> Basic</h3>
                            <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-md lg:shadow-md shadow col-span-2">

                        <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">
                            <div>
                                <label for="first-name"> First name</label>
                                <input type="text" placeholder="" id="first-name" class="shadow-none with-border">
                            </div>
                            <div>
                                <label for="last-name"> Last name</label>
                                <input type="text" placeholder="" id="last-name" class="shadow-none with-border">
                            </div>
                            <div class="col-span-2">
                                <label for="email"> Email <span class="text-red-600">*</span></label>
                                <input type="text" placeholder="" id="email" class="shadow-none with-border">
                            </div>
                            <div class="col-span-2">
                                <label for="about">About me</label>  
                                <textarea id="about" name="about" rows="3"  class="with-border"></textarea>
                            </div> 
                             
                            <!-- Website logo  -->
                            <label for="system_info" class="font-medium">Photo  </label>
                            <div class="col-span-2 flex py-2 space-x-5">
                                <img src="../assets/images/avatars/placeholder.png" alt="" class="h-12 rounded-full w-12">
                                <a href="#" class="border font-medium px-3 py-1.5 rounded-md self-center shadow-sm text-center text-sm">Change</a>
                            </div>

                            <div class="col-span-2">
                                <label for="Location"> Location</label>
                                <input type="text" placeholder="" id="location" class="shadow-none with-border">
                            </div>
                            <div>
                               <label for="working"> Working at</label>
                               <input type="text" placeholder="" id="working" class="shadow-none with-border">
                            </div> 
                            <div>
                                <label for="level"> Level </label>
                                <select id="level" name="relationship" class="shadow-none selectpicker with-border ">
                                    <option value="0">Beginner</option>
                                    <option value="1">Intermediate</option>
                                    <option value="2">Advance</option>
                                    <option value="3">Expert</option>
                                </select>
                            </div>
                        </div> 
                        
                    </div>
                </div>

                <!-- Change Password -->
                <div class="grid lg:grid-cols-3 gap-8 md:mt-12">
                    <div>
                        <div uk-sticky="offset:100;bottom:true;media:992">
                            <h3 class="text-lg mb-2 font-semibold"> Password</h3>
                            <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-md lg:shadow-md shadow col-span-2">
                        
                        <div class="lg:p-6 p-4 space-y-4">
                            <div>
                                <label for="current_password"> Current password</label>
                                <input type="text" placeholder="" id="current_password" class="shadow-none with-border">
                            </div>
                            <div>
                                <label for="new_password"> New password</label>
                                <input type="text" placeholder="" id="new_password" class="shadow-none with-border">
                            </div>
                            <div>
                                <label for="confirm_new_password"> Confirm new password</label>
                                <input type="text" placeholder="" id="confirm_new_password" class="shadow-none with-border">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Links-->
                <div class="grid lg:grid-cols-3 gap-8 md:mt-12">
                    <div>
                        <div uk-sticky="offset:100;bottom:true;media:992">
                            <h3 class="text-lg mb-2 font-semibold"> Social Links</h3>
                            <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-md lg:shadow-md shadow col-span-2">
                        
                        <div class="lg:p-6 p-4 space-y-4">
                            <div>
                                <label for="facebook_link">Facebook link</label>
                                <input type="text" placeholder="" id="facebook_link" class="shadow-none with-border">
                            </div>
                            <div>
                                <label for="twitter_link"> Twitter link </label>
                                <input type="text" placeholder="" id="twitter_link" class="shadow-none with-border">
                            </div>
                            <div>
                                <label for="linkedin_link"> Linkedin link </label>
                                <input type="text" placeholder="" id="linkedin_link" class="shadow-none with-border">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- notification-->
                <div class="grid lg:grid-cols-3 gap-8 md:mt-12">
                    <div>
                        <div uk-sticky="offset:100;bottom:true;media:992">
                            <h3 class="text-lg mb-2 font-semibold"> Notifications </h3>
                            <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-md lg:shadow-md shadow col-span-2">
                        
                        <div class="lg:p-6 p-4 space-y-6">
                            <div>
                                <h4 class="text-base mb-1 font-semibold">By Email</h4>
                                <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>

                                <div class="space-y-3 mt-5">

                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox1" checked>
                                        <label for="chekcbox1" class="ml-4">
                                            <span class="checkbox-icon mt-1 -ml-4"></span> <span class="font-semibold text-base"> Comments </span>
                                            <p class="text-gray-400 text-sm mt-1.5"> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                                        </label> 
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox2">
                                        <label for="chekcbox2" class="ml-4">
                                            <span class="checkbox-icon mt-1 -ml-4"></span> <span class="font-semibold text-base"> Review </span> 
                                            <p  class="text-gray-400 text-sm mt-1.5"> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p> 
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox3">
                                        <label for="chekcbox3" class="ml-4">
                                            <span class="checkbox-icon mt-1 -ml-4"></span> <span class="font-semibold text-base"> Comments </span> 
                                            <p  class="text-gray-400 text-sm mt-1.5"> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p> 
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox4" checked>
                                        <label for="chekcbox4" class="ml-4">
                                            <span class="checkbox-icon mt-1 -ml-4"></span> <span class="font-semibold text-base"> Comments </span> 
                                            <p  class="text-gray-400 text-sm mt-1.5"> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p> 
                                        </label>
                                    </div>
                                </div>
                                 
                            </div> 
                            <hr class="">
                            <div>
                                <h4 class="text-base mb-1 font-semibold">Push Notifications</h4>
                                <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>

                                <div class="space-y-1 mt-5">

                                    <div class="radio">
                                        <input id="radio-1" name="radio" type="radio" checked>
                                        <label for="radio-1"><span class="radio-label"></span> Everything</label>
                                    </div>
                                    <br>
                                    <div class="radio">
                                        <input id="radio-2" name="radio" type="radio">
                                        <label for="radio-2"><span class="radio-label"></span> important Emails</label>
                                    </div>
                                    <br>
                                    <div class="radio">
                                        <input id="radio-3" name="radio" type="radio">
                                        <label for="radio-3"><span class="radio-label"></span> Not Anymore</label>
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                
 
            </div>
           
            <!-- footer -->
            <div class="lg:mt-28 mt-10 mb-7 px-12 border-t pt-7">
                <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
                    <p class="capitalize font-medium"> © copyright 2021  Courseplus</p>
                    <div class="lg:flex space-x-4 text-gray-700 capitalize hidden">
                        <a href="#"> About</a>
                        <a href="#"> Help</a>
                        <a href="#"> Terms</a>
                        <a href="#"> Privacy</a>
                    </div>
                </div>
            </div>

        </div>
 

        <!-- sidebar -->
        <div class="sidebar">
            <div class="sidebar_inner" data-simplebar>
                
                <ul>
                    <li><a href="dashboard.html">
                            <ion-icon name="home-outline" class="side-icon"></ion-icon>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li><a href="#">
                            <ion-icon name="play-circle-outline" class="side-icon"></ion-icon>
                            <span> Courses</span>
                        </a>
                        <ul>
                            <li><a href="courses.html"> List View</a></li> 
                            <li><a href="courses-card.html"> Courses View </a></li> 
                            <li><a href="create-new-course.html"> Add new course </a></li> 
                        </ul>
                    </li>
                    <li><a href="books.html">
                            <ion-icon name="book-outline" class="side-icon"></ion-icon>
                            <span> Books</span>
                        </a>
                    </li>
                    <li><a href="messages.html">
                            <ion-icon name="chatbox-ellipses-outline" class="side-icon"></ion-icon>
                            <span> Message</span>
                        </a>
                    </li>
                    <li><a href="#">
                            <ion-icon name="people-circle-outline" class="side-icon">
                            </ion-icon>
                            <span> Instructors</span>
                        </a>
                        <ul>
                            <li><a href="instructors.html"> List View </a></li> 
                            <li><a href="instructors-card.html"> Grid View </a></li> 
                        </ul>
                    </li>
                    <li><a href="#">
                            <ion-icon name="people-outline" class="side-icon"></ion-icon>
                            <span> Students</span>
                        </a>
                        <ul>
                            <li><a href="students.html"> List View </a></li> 
                            <li><a href="student-card.html"> Grid View </a></li> 
                        </ul>
                    </li>
                    <li><a href="categories.html">
                            <ion-icon name="albums-outline" class="side-icon"></ion-icon>
                            <span> Categories</span>
                        </a>
                    </li>
                    <li><a href="setting.html">
                            <ion-icon name="settings-outline" class="side-icon"></ion-icon>
                            <span> Setting</span>
                        </a>
                        <ul>
                            <li><a href="setting.html"> Website Information </a></li>
                            <li><a href="setting.html"> General Configuration </a></li>
                            <li><a href="setting.html"> Social Login </a></li> 
                            <li><a href="setting.html"> Setup payment </a></li> 
                        </ul>
                    </li>
                </ul>
                <ul class="side_links" data-sub-title="">
                    <li class="active"><a href="personal-profile.html">
                            <ion-icon name="person-outline" class="side-icon"></ion-icon>
                            <span> Manage profile </span>
                        </a>
                    </li>
                    <li><a href="form-login.html">
                            <ion-icon name="log-out-outline" class="side-icon"></ion-icon>
                            <span> logout </span>
                        </a>
                    </li>
                </ul>
 
            </div>

            <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>
        </div>
        
    </div>

 
    <!-- Javascript
    ================================================== -->
    <script src="../../../code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../../../cdn.jsdelivr.net/npm/uikit%403.7.6/dist/js/uikit.min.js"></script>
    <script src="../assets/js/uikit.js"></script>
    <script src="../assets/js/tippy.all.min.js"></script>
    <script src="../assets/js/simplebar.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/bootstrap-select.min.js"></script>
    <script src="../../../unpkg.com/ionicons%405.2.3/dist/ionicons.js"></script>
 
</body>


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/admin/personal-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Dec 2022 18:58:03 GMT -->
</html>
