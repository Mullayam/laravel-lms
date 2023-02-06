<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/admin/courses-card.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Dec 2022 18:57:54 GMT -->
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

                <!--  breadcrumb -->
                <div class="breadcrumb-area justify-between py-0 sm:flex mb-8">
                    <div> 
                        <h3 class="md:text-2xl text-lg font-semibold mb-2"> Courses </h3>
                        <div class="breadcrumb">
                            <ul class="m-0">
                                <li>
                                    <a href="index.html"> <i class="icon-feather-home"></i> </a>
                                </li>
                                <li>
                                    <a href="index.html">Dashboard</a>
                                </li> 
                                <li class="active">
                                    <a href="#">Courses List</a>
                                </li>
                            </ul> 
                        </div>
                    </div>
                    <div class="bg-white border flex items-center overflow-hidden relative rounded-lg self-center">
                        <i class="pl-4 -mr-2 relative uil-search"></i>
                        <input class="flex-1 max-h-9" placeholder="Search" type="text">
                    </div>
                </div>

                <div class="grid md:grid-cols-4 grid-cols-2 gap-5 mb-8" uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 50">
                    <div class="bg-white flex p-4 rounded-md shadow sm:p-5 border-t-4 border-green-500 uk-scrollspy-inview uk-animation-scale-up" style="">
                        <div class="flex-1 min-w-0">
                            <div class="text-sm"> Active Courses </div>
                            <div class="font-semibold md:text-2xl text-xl mt-3">  123 </div> 
                        </div>
                        <ion-icon name="checkmark-circle" class="text-3xl text-green-500 md hydrated" role="img" aria-label="checkmark circle"></ion-icon>
                    </div>
                    <div class="bg-white flex p-4 rounded-md shadow sm:p-5 border-t-4 border-yellow-500 uk-scrollspy-inview uk-animation-scale-up" style="">
                        <div class="flex-1 min-w-0">
                            <div class="text-sm"> Pending Courses </div>
                            <div class="font-semibold md:text-2xl text-xl mt-3">  42 </div> 
                        </div>
                        <ion-icon name="bookmark" class="text-3xl text-yellow-500 md hydrated" role="img" aria-label="bookmark"></ion-icon>
                    </div>
                    <div class="bg-white flex p-4 rounded-md shadow sm:p-5 border-t-4 border-blue-500 uk-scrollspy-inview uk-animation-scale-up" style="">
                        <div class="flex-1 min-w-0">
                            <div class="text-sm"> Draft Courses </div>
                            <div class="font-semibold md:text-2xl text-xl mt-3">  32 </div> 
                        </div>
                        <ion-icon name="save" class="text-3xl text-blue-500 md hydrated" role="img" aria-label="save"></ion-icon>
                    </div>
                    <div class="bg-white flex p-4 rounded-md shadow sm:p-5 border-t-4 border-red-500 uk-scrollspy-inview uk-animation-scale-up" style="">
                        <div class="flex-1 min-w-0">
                            <div class="text-sm"> Disable Courses </div>
                            <div class="font-semibold md:text-2xl text-xl mt-3">  12 </div> 
                        </div>
                        <ion-icon name="stop" class="text-3xl text-red-500 md hydrated" role="img" aria-label="stop"></ion-icon>
                    </div>
                </div>
                
                <div class="flex items-center space-x-3 mb-6">
                    <h1 class="font-medium text-xl flex-1"> Manage Courses</h1> 
                    <div class="bg-gray-100 border inline-flex p-0.5 rounded-md space-x-1 text-lg">
                        <a href="courses.html" class="py-1.5 px-2.5 rounded-md" data-tippy-placement="top" title="Grid view"> 
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg> 
                        </a>
                        <a href="#" class="py-1.5 px-2.5 rounded-md bg-white shadow" data-tippy-placement="top" title="List view"> 
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- List items -->
                <div class="space-y-2 md:m-0 -mx-3">

                    <!-- item -->
                    <div class="bg-white md:flex font-medium items-center p-4 rounded-md shadow-sm hover:shadow-md md:space-x-5 relative">

                        <div class="rounded-md overflow-hidden md:relative md:inset-0 absolute top-3 left-2 w-12 h-12 md:h-16 md:w-24 shadow border"> 
                            <img src="../assets/images/courses/img-1.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                        </div>

                        <div class="flex-1 md:m-0 ml-14"> 
                            <h2 class="font-semibold text-base line-clamp-1"> The Complete JavaScript For Beginners </h2>

                            <div class="flex space-x-3 items-center md:mt-1.5 text-gray-500 font-medium text-sm">
                                <span>JavaScript</span>
                                <div class="sm:block hidden">·</div>
                                <a href="#" class="block"> Stella Johnson </a>
                            </div>

                        </div>
                        
                        <div class="flex md:justify-end justify-between md:m-0 mt-2 md:space-x-10 ml-14">
                            <div>  
                                <div class="text-sm">Enrolled</div>
                                <div class="font-medium md:mt-1 md:text-base"> 253 </div>
                            </div>
                            <div>   
                                <div class="text-sm"> Updated</div>
                                <div class="font-medium md:mt-1 md:text-base"> 15 days ago </div>
                            </div>
                            <div> 
                                <div class="text-sm"> Price</div>
                                <div class="font-medium md:mt-1  md:text-base"> $15.00 </div>
                            </div>
                            <div>
                                <a href="#" class="flex items-center justify-center h-10 w-10 rounded-full hover:bg-gray-100" aria-expanded="false"> 
                                    <ion-icon name="ellipsis-horizontal" class="text-xl"></ion-icon>
                                  </a>
                                  <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700 uk-drop" uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                                    <ul class="space-y-1">
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                               <ion-icon name="arrow-redo-outline" class="pr-2 text-lg"></ion-icon> Share Now
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <ion-icon name="create-outline" class="pr-2 text-xl"></ion-icon>  Edit item
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon>   Disable notifications
                                            </a> 
                                        </li> 
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <ion-icon name="star-outline" class="pr-2 text-xl"></ion-icon>  Add favorites 
                                            </a> 
                                        </li>
                                        <li>
                                          <hr class="-mx-2 my-2 dark:border-gray-800">
                                        </li>
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-50 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                              <ion-icon name="trash-outline" class="pr-2 text-xl"></ion-icon>  Delete
                                            </a> 
                                        </li>
                                      </ul>
                                  </div>
                            </div>
                        </div>

                    </div> 

                    <!-- item -->
                    <div class="bg-white md:flex font-medium items-center p-4 rounded-md shadow-sm hover:shadow-md md:space-x-5 relative">

                        <div class="rounded-md overflow-hidden md:relative md:inset-0 absolute top-3 left-2 w-12 h-12 md:h-16 md:w-24 shadow border"> 
                            <img src="../assets/images/courses/img-2.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                        </div>

                        <div class="flex-1 md:m-0 ml-14"> 
                            <h2 class="font-semibold text-base line-clamp-1">  Learn and Understand AngularJS to become a professional  developer </h2>

                            <div class="flex space-x-3 items-center md:mt-1.5 text-gray-500 font-medium text-sm">
                                <span>Angular</span>
                                <div class="sm:block hidden">·</div>
                                <a href="#" class="block"> John Michael
 </a>
                            </div>

                        </div>
                        
                        <div class="flex md:justify-end justify-between md:m-0 mt-2 md:space-x-10 ml-14">
                            <div>  
                                <div class="text-sm">Enrolled</div>
                                <div class="font-medium md:mt-1 md:text-base"> 523 </div>
                            </div>
                            <div>   
                                <div class="text-sm"> Updated</div>
                                <div class="font-medium md:mt-1 md:text-base"> 19 days ago </div>
                            </div>
                            <div> 
                                <div class="text-sm"> Price</div>
                                <div class="font-medium md:mt-1  md:text-base"> $49.00 </div>
                            </div>
                            <div>
                                <a href="#" class="flex items-center justify-center h-10 w-10 rounded-full hover:bg-gray-100" aria-expanded="false"> 
                                    <ion-icon name="ellipsis-horizontal" class="text-xl"></ion-icon>
                                  </a>
                                  <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700 uk-drop" uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                                    <ul class="space-y-1">
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                               <ion-icon name="arrow-redo-outline" class="pr-2 text-lg"></ion-icon> Share Now
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <ion-icon name="create-outline" class="pr-2 text-xl"></ion-icon>  Edit item
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon>   Disable notifications
                                            </a> 
                                        </li> 
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <ion-icon name="star-outline" class="pr-2 text-xl"></ion-icon>  Add favorites 
                                            </a> 
                                        </li>
                                        <li>
                                          <hr class="-mx-2 my-2 dark:border-gray-800">
                                        </li>
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-50 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                              <ion-icon name="trash-outline" class="pr-2 text-xl"></ion-icon>  Delete
                                            </a> 
                                        </li>
                                      </ul>
                                  </div>
                            </div>
                        </div>

                    </div> 

                    <!-- item -->
                    <div class="bg-white md:flex font-medium items-center p-4 rounded-md shadow-sm hover:shadow-md md:space-x-5 relative">

                        <div class="rounded-md overflow-hidden md:relative md:inset-0 absolute top-3 left-2 w-12 h-12 md:h-16 md:w-24 shadow border"> 
                            <img src="../assets/images/courses/img-3.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                        </div>

                        <div class="flex-1 md:m-0 ml-14"> 
                            <h2 class="font-semibold text-base line-clamp-1"> Build Responsive Real World Websites </h2>

                            <div class="flex space-x-3 items-center md:mt-1.5 text-gray-500 font-medium text-sm">
                                <span>Web Design</span>
                                <div class="sm:block hidden">·</div>
                                <a href="#" class="block"> Monroe Parker </a>
                            </div>

                        </div>
                        
                        <div class="flex md:justify-end justify-between md:m-0 mt-2 md:space-x-10 ml-14">
                            <div>  
                                <div class="text-sm">Enrolled</div>
                                <div class="font-medium md:mt-1 md:text-base"> 389 </div>
                            </div>
                            <div>   
                                <div class="text-sm"> Updated</div>
                                <div class="font-medium md:mt-1 md:text-base"> 1 month ago </div>
                            </div>
                            <div> 
                                <div class="text-sm"> Price</div>
                                <div class="font-medium md:mt-1  md:text-base"> $42.00 </div>
                            </div>
                            <div>
                                <a href="#" class="flex items-center justify-center h-10 w-10 rounded-full hover:bg-gray-100" aria-expanded="false"> 
                                    <ion-icon name="ellipsis-horizontal" class="text-xl"></ion-icon>
                                  </a>
                                  <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700 uk-drop" uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                                    <ul class="space-y-1">
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                               <ion-icon name="arrow-redo-outline" class="pr-2 text-lg"></ion-icon> Share Now
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <ion-icon name="create-outline" class="pr-2 text-xl"></ion-icon>  Edit item
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon>   Disable notifications
                                            </a> 
                                        </li> 
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <ion-icon name="star-outline" class="pr-2 text-xl"></ion-icon>  Add favorites 
                                            </a> 
                                        </li>
                                        <li>
                                          <hr class="-mx-2 my-2 dark:border-gray-800">
                                        </li>
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-50 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                              <ion-icon name="trash-outline" class="pr-2 text-xl"></ion-icon>  Delete
                                            </a> 
                                        </li>
                                      </ul>
                                  </div>
                            </div>
                        </div>

                    </div>  

                    <!-- item -->
                    <div class="bg-white md:flex font-medium items-center p-4 rounded-md shadow-sm hover:shadow-md md:space-x-5 relative">

                        <div class="rounded-md overflow-hidden md:relative md:inset-0 absolute top-3 left-2 w-12 h-12 md:h-16 md:w-24 shadow border"> 
                            <img src="../assets/images/courses/img-4.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                        </div>

                        <div class="flex-1 md:m-0 ml-14"> 
                            <h2 class="font-semibold text-base line-clamp-1"> Learn Angular Fundamentals to Expert </h2>

                            <div class="flex space-x-3 items-center md:mt-1.5 text-gray-500 font-medium text-sm">
                                <span>Angular</span>
                                <div class="sm:block hidden">·</div>
                                <a href="#" class="block"> Martin Gray </a>
                            </div>

                        </div>
                        
                        <div class="flex md:justify-end justify-between md:m-0 mt-2 md:space-x-10 ml-14">
                            <div>  
                                <div class="text-sm">Enrolled</div>
                                <div class="font-medium md:mt-1 md:text-base"> 620 </div>
                            </div>
                            <div>   
                                <div class="text-sm"> Updated</div>
                                <div class="font-medium md:mt-1 md:text-base"> 2 month ago </div>
                            </div>
                            <div> 
                                <div class="text-sm"> Price</div>
                                <div class="font-medium md:mt-1  md:text-base"> $39.00 </div>
                            </div>
                            <div>
                                <a href="#" class="flex items-center justify-center h-10 w-10 rounded-full hover:bg-gray-100" aria-expanded="false"> 
                                    <ion-icon name="ellipsis-horizontal" class="text-xl"></ion-icon>
                                  </a>
                                  <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700 uk-drop" uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                                    <ul class="space-y-1">
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                               <ion-icon name="arrow-redo-outline" class="pr-2 text-lg"></ion-icon> Share Now
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <ion-icon name="create-outline" class="pr-2 text-xl"></ion-icon>  Edit item
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon>   Disable notifications
                                            </a> 
                                        </li> 
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <ion-icon name="star-outline" class="pr-2 text-xl"></ion-icon>  Add favorites 
                                            </a> 
                                        </li>
                                        <li>
                                          <hr class="-mx-2 my-2 dark:border-gray-800">
                                        </li>
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-50 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                              <ion-icon name="trash-outline" class="pr-2 text-xl"></ion-icon>  Delete
                                            </a> 
                                        </li>
                                      </ul>
                                  </div>
                            </div>
                        </div>

                    </div>  

                    <!-- item -->
                    <div class="bg-white md:flex font-medium items-center p-4 rounded-md shadow-sm hover:shadow-md md:space-x-5 relative">

                        <div class="rounded-md overflow-hidden md:relative md:inset-0 absolute top-3 left-2 w-12 h-12 md:h-16 md:w-24 shadow border"> 
                            <img src="../assets/images/courses/img-5.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                        </div>

                        <div class="flex-1 md:m-0 ml-14"> 
                            <h2 class="font-semibold text-base line-clamp-1"> Learn C sharp for Beginners Crash Course </h2>

                            <div class="flex space-x-3 items-center md:mt-1.5 text-gray-500 font-medium text-sm">
                                <span>C#</span>
                                <div class="sm:block hidden">·</div>
                                <a href="#" class="block"> Jesse Stevens </a>
                            </div>

                        </div>
                        
                        <div class="flex md:justify-end justify-between md:m-0 mt-2 md:space-x-10 ml-14">
                            <div>  
                                <div class="text-sm">Enrolled</div>
                                <div class="font-medium md:mt-1 md:text-base"> 753 </div>
                            </div>
                            <div>   
                                <div class="text-sm"> Updated</div>
                                <div class="font-medium md:mt-1 md:text-base"> 3 mounth ago </div>
                            </div>
                            <div> 
                                <div class="text-sm"> Price</div>
                                <div class="font-medium md:mt-1  md:text-base"> $49.00 </div>
                            </div>
                            <div>
                                <a href="#" class="flex items-center justify-center h-10 w-10 rounded-full hover:bg-gray-100" aria-expanded="false"> 
                                    <ion-icon name="ellipsis-horizontal" class="text-xl"></ion-icon>
                                  </a>
                                  <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700 uk-drop" uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                                    <ul class="space-y-1">
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                               <ion-icon name="arrow-redo-outline" class="pr-2 text-lg"></ion-icon> Share Now
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <ion-icon name="create-outline" class="pr-2 text-xl"></ion-icon>  Edit item
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <ion-icon name="notifications-off-outline" class="pr-2 text-lg"></ion-icon>   Disable notifications
                                            </a> 
                                        </li> 
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                              <ion-icon name="star-outline" class="pr-2 text-xl"></ion-icon>  Add favorites 
                                            </a> 
                                        </li>
                                        <li>
                                          <hr class="-mx-2 my-2 dark:border-gray-800">
                                        </li>
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-50 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                              <ion-icon name="trash-outline" class="pr-2 text-xl"></ion-icon>  Delete
                                            </a> 
                                        </li>
                                      </ul>
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
                    <li class="active-submenu"><a href="#">
                            <ion-icon name="play-circle-outline" class="side-icon"></ion-icon>
                            <span> Courses</span>
                        </a>
                        <ul>
                            <li><a href="courses.html"> List View</a></li> 
                            <li class="active"><a href="courses-card.html"> Courses View </a></li> 
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
                            <span> Message </span> 
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


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/admin/courses-card.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Dec 2022 18:57:54 GMT -->
</html>
