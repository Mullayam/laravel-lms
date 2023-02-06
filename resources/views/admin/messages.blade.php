<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/admin/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Dec 2022 18:58:02 GMT -->
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

    <div id="wrapper" class="is-verticle admin-panel is_message">

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
  
            <span uk-toggle="target: .message-content;" class="fixed left-0 top-36 bg-red-600 z-10 py-1 px-4 rounded-r-3xl text-white"> Users</span>

            <div class="messages-container">
                <div class="messages-container-inner">

                   
                    <div class="messages-inbox">
                        <div class="messages-headline">
                            <h2 class="text-2xl font-semibold mt-0.5">Chats</h2>
                            <span class="absolute icon-feather-edit mr-4 text-xl uk-position-center-right cursor-pointer"></span>
                        </div>
                        <div class="messages-inbox-inner" data-simplebar>
                            <ul>
    
                                <li>
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-online"></i><img src="../assets/images/avatars/avatar-1.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Stella Johnson</h5>
                                                <span>4 hours ago</span>
                                            </div>
                                            <p>laoreet dolore magna aliquam erat volutpat sed diam nonummy</p>
                                        </div>
                                    </a>
                                </li>
    
                                <li class="active-message">
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-offline"></i><img src="../assets/images/avatars/avatar-2.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Adrian Mohani</h5>
                                                <span>Yesterday</span>
                                            </div>
                                            <p>Sed diam nonummy nibh euismod tincidunt ut laoreet dolore</p>
                                        </div>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-offline"></i><img src="../assets/images/avatars/avatar-3.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Alia Dolgove</h5>
                                                <span>2 days ago</span>
                                            </div>
                                            <p>Dipiscing elit, sed diam nonummy nibh euismod tincidunt </p>
                                        </div>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-online"></i><img src="../assets/images/avatars/avatar-4.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Jonathan Madano</h5>
                                                <span>2 days ago</span>
                                            </div>
                                            <p>Nisl ut aliquip ex ea commodo consequa!</p>
                                        </div>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-online"></i><img src="../assets/images/avatars/avatar-2.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Stella Johnson</h5>
                                                <span>4 hours ago</span>
                                            </div>
                                            <p>laoreet dolore magna aliquam erat volutpat sed diam nonummy</p>
                                        </div>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-offline"></i><img src="../assets/images/avatars/avatar-5.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Adrian Mohani</h5>
                                                <span>Yesterday</span>
                                            </div>
                                            <p>Hi Tom! Hate to break it to you but I'm actually on vacation</p>
                                        </div>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-offline"></i><img src="../assets/images/avatars/avatar-1.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Alia Dolgove</h5>
                                                <span>2 days ago</span>
                                            </div>
                                            <p>Dipiscing elit, sed diam nonummy nibh euismod tincidunt </p>
                                        </div>
                                    </a>
                                </li>
    
                                <li>
                                    <a href="#">
                                        <div class="message-avatar"><i class="status-icon status-online"></i><img src="../assets/images/avatars/avatar-2.jpg" alt=""></div>
    
                                        <div class="message-by">
                                            <div class="message-by-headline">
                                                <h5>Jonathan Madano</h5>
                                                <span>2 days ago</span>
                                            </div>
                                            <p>Nisl ut aliquip ex ea commodo consequa</p>
                                        </div>
                                    </a>
                                </li>
    
                            </ul>
                        </div>
                    </div>


                    <div class="message-content">

                        <div class="messages-headline">
                            <h4> Stella Johnson </h4>
                            <a href="#" class="message-action text-red-500"><i class="icon-feather-trash-2"></i> <span class="md:inline hidden"> Delete Conversation</span> </a>
                        </div>
                        
                        <div class="message-content-scrolbar" data-simplebar>

                            <!-- Message Content Inner -->
                            <div class="message-content-inner">
                                    
                                    <!-- Time Sign -->
                                    <div class="message-time-sign">
                                        <span>28 June, 2020</span>
                                    </div>
    
                                    <div class="message-bubble me">
                                        <div class="message-bubble-inner">
                                            <div class="message-avatar"><img src="../assets/images/avatars/avatar-2.jpg" alt=""></div>
                                            <div class="message-text"><p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod laoreet.</p></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
    
                                    <div class="message-bubble">
                                        <div class="message-bubble-inner">
                                            <div class="message-avatar"><img src="../assets/images/avatars/avatar-2.jpg" alt=""></div>
                                            <div class="message-text"><p>Laoreet.  dolore magna imperdiet quod mazim placerat facer possim. 👍</p></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
    
                                    <div class="message-bubble me">
                                        <div class="message-bubble-inner">
                                            <div class="message-avatar"><img src="../assets/images/avatars/avatar-2.jpg" alt=""></div>
                                            <div class="message-text"><p>Albuom commodo consequat. 😉</p></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
    
                                    <!-- Time Sign -->
                                    <div class="message-time-sign">
                                        <span>Yesterday</span>
                                    </div>
    
                                    <div class="message-bubble me">
                                        <div class="message-bubble-inner">
                                            <div class="message-avatar"><img src="../assets/images/avatars/avatar-2.jpg" alt=""></div>
                                            <div class="message-text"><p>Option congue nihil imperdiet mazim placerat facer possim.</p></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
    
                                    <div class="message-bubble">
                                        <div class="message-bubble-inner">
                                            <div class="message-avatar"><img src="../assets/images/avatars/avatar-2.jpg" alt=""></div>
                                            <div class="message-text"><p>  Nam liber tempor cum soluta nobis eleifend  doming id quod mazim placerat 😎</p></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
    
                                    <div class="message-bubble me">
                                        <div class="message-bubble-inner">
                                            <div class="message-avatar"><img src="../assets/images/avatars/avatar-2.jpg" alt=""></div>
                                            <div class="message-text"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 🙂</p></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
    
                                    <div class="message-bubble">
                                        <div class="message-bubble-inner">
                                            <div class="message-avatar"><img src="../assets/images/avatars/avatar-2.jpg" alt=""></div>
                                            <div class="message-text">
                                                <!-- Typing Indicator -->
                                                <div class="typing-indicator">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                            </div>
                            <!-- Message Content Inner / End -->
                            
                            <!-- Reply Area -->
                            <div class="message-reply">
                                <textarea cols="1" rows="1" placeholder="Your Message"></textarea>
                                <button class="button ripple-effect">Send</button>
                            </div>

                        </div>

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
                    <li class="active"><a href="messages.html">
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
                    <li><a href="personal-profile.html">
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


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/admin/messages.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Dec 2022 18:58:02 GMT -->
</html>
