<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/episodes-watch.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Mar 2022 11:27:50 GMT -->
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

    <div id="wrapper" class="is-verticle">

        <!--  Header  -->
        <header uk-sticky> 
            <div class="header_inner">
                <div class="left-side">
    
                    <!-- Logo -->
                    <div id="logo">
                        <a href="explore.html">
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

                        <!-- cart -->
                        <a href="#" class="header_widgets">
                            <ion-icon name="cart-outline" class="is-icon"></ion-icon>
                        </a>
                        <div uk-drop="mode: click" class="dropdown_cart">
                            <div class="cart-headline"> My Cart 
                            <a href="#" class="checkout">Checkout</a>
                        </div>
                            <ul class="dropdown_cart_scrollbar" data-simplebar>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="../assets/images/courses/img-1.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <h4> Learn Angular Beginner to Advanced Fundamentals </h4>
                                    </div>
                                    <div class="cart_price">
                                        <span> $12.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="../assets/images/courses/img-1.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <h4>  Become a Web Developer from Scratch to Advanced </h4>
                                    </div>
                                    <div class="cart_price">
                                        <span> $19.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="../assets/images/courses/img-2.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <h4> Angular Fundamentals for Beginner to advance </h4>
                                    </div>
                                    <div class="cart_price">
                                        <span> $12.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="../assets/images/courses/img-3.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <h4> Ultimate Web Developer Course for Beginners 2020</h4>
                                    </div>
                                    <div class="cart_price">
                                        <span> $14.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="../assets/images/courses/img-4.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <h4> The Complete JavaScript From beginning to advance </h4>
                                    </div>
                                    <div class="cart_price">
                                        <span> $16.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                                <li>
                                    <div class="cart_avatar">
                                        <img src="../assets/images/courses/img-5.jpg" alt="">
                                    </div>
                                    <div class="cart_text">
                                        <h4> Become a Web Developer from Scratch to Advanced</h4>
                                    </div>
                                    <div class="cart_price">
                                        <span> $12.99 </span>
                                        <button class="type"> Remove</button>
                                    </div>
                                </li>
                            </ul>
        
                            <div class="cart_footer">
                                <p> Subtotal : $ 320 </p>
                                <h1> Total :  <strong> $ 320</strong> </h1>
                            </div>
                        </div>
        
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
                        <a href="#">
                            <img src="../assets/images/avatars/placeholder.png" class="header_widgets_avatar" alt="">
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
            <div class="container -mt-7 lg:mt-0">


                <div class="tube-card p-6 md:m-0 -mx-5">
                    
                    <div class="embed-video rounded -mx-6 -mt-6 lg:m-0">
                        <iframe src="https://www.youtube.com/embed/pQN-pnXPaVg" frameborder="0" uk-video="automute: true" allowfullscreen="" uk-responsive="" class="uk-responsive-width"></iframe>
                    </div>

                    <div class="py-5 space-y-4">

                        <div>
                            <h1 class="lg:text-2xl text-lg font-semibold line-clamp-1"> HTML Full Course - Build A Website Tutorial </h1>
                            <p> 60,723,169 views </p>
                        </div>
                        
                        <div class="md:flex items-center justify-between">
                            <a href="#" class="flex items-center space-x-3">
                                <img src="../assets/images/avatars/avatar-2.jpg" alt="" class="w-10 rounded-full">
                                <div class="">
                                    <div class="text-base font-semibold"> Stella Johnson </div>
                                    <div class="text-xs"> Published on Feb 22, 2021 </div>
                                </div>
                            </a>
                            <div class="md:flex items-center space-x-1 md:pt-0 pt-2 hidden">
                                <a href="#">  <ion-icon name="logo-twitter" class="bg-blue-600 text-white text-2xl p-2 rounded-full"></ion-icon> </a>
                                <a href="#">  <ion-icon name="logo-youtube" class="bg-red-600 text-white text-2xl p-2 rounded-full"></ion-icon> </a>
                                <a href="#">  <ion-icon name="logo-github" class="bg-gray-600 text-white text-2xl p-2 rounded-full"></ion-icon> </a>
                             </div>
                        </div>
                        
                        <div class="text-lg font-semibold pt-2"> Description </div>
                        <p id="more-veiw" class=" line-clamp-2"> Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna, 
                            consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                            aliqua. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat.
                        </p>
                        <a href="#" class="text-blue-600" uk-toggle="target: #more-veiw; cls: line-clamp-2; animation: uk-animation-fade"> 
                            Read More  
                        </a>

                        <hr>

                        <!-- Comments-->
                        <div class="text-lg font-semibold pt-2"> Comments ( 5210 )</div>

                        <div class="space-y-4 my-5">
                        
                            <div class="bg-gray-50 border flex gap-x-4 p-4 relative rounded-md">
                                <img src="../assets/images/avatars/avatar-4.jpg" alt="" class="rounded-full shadow w-12 h-12">
                                <div class="flex justify-center items-center absolute right-5 top-6 space-x-1 text-yellow-500">
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                </div>
                                <div>
                                    <h4 class="text-base m-0 font-semibold"> Stella Johnson</h4>
                                    <span class="text-gray-700 text-sm"> 14th, April 2021 </span>
                                    <p class="mt-3 md:ml-0 -ml-16">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                                        magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                        ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                    </p>
                        
                        
                        
                                </div>
                            </div>
                        
                            <div class="bg-gray-50 border flex gap-x-4 p-4 relative rounded-md">
                                <div class="flex justify-center items-center absolute right-5 top-6 space-x-1 text-yellow-500">
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" class="text-gray-300 md hydrated" role="img" aria-label="star"></ion-icon>
                                </div>
                                <img src="../assets/images/avatars/avatar-2.jpg" alt="" class="rounded-full shadow w-12 h-12">
                                <div>
                                    <h4 class="text-base m-0 font-semibold"> Alex Dolgove</h4>
                                    <span class="text-gray-700 text-sm"> 16th, May 2021 </span>
                                    <p class="mt-3 md:ml-0 -ml-16">
                                        elit, sed diam ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ipsum dolor sit
                                        amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                                    </p>
                                </div>
                            </div>

                            <div class="bg-gray-50 border flex gap-x-4 p-4 relative rounded-md lg:ml-16">
                                <div class="flex justify-center items-center absolute right-5 top-6 space-x-1 text-yellow-500">
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" role="img" class="md hydrated" aria-label="star"></ion-icon>
                                    <ion-icon name="star" class="text-gray-300 md hydrated" role="img" aria-label="star"></ion-icon>
                                </div>
                                <img src="../assets/images/avatars/avatar-3.jpg" alt="" class="rounded-full shadow w-12 h-12">
                                <div>
                                    <h4 class="text-base m-0 font-semibold"> Trap Nation</h4>
                                    <span class="text-gray-700 text-sm"> 16th, May 2021 </span>
                                    <p class="mt-3 md:ml-0 -ml-16">
                                        elit, sed diam ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ipsum dolor sit
                                        amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                                    </p>
                                </div>
                            </div>
                        
                        </div>

                        <div class="flex justify-center mt-9">
                            <a href="#" class="bg-gray-50 border hover:bg-gray-100 px-4 py-1.5 rounded-full text-sm">More Comments ..</a>
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
                
                <ul class="side-colored">
                    <li><a href="explore.html">
                            <ion-icon name="compass" class="bg-gradient-to-br from-purple-300 p-1 rounded-md side-icon text-opacity-80 text-white to-blue-500">
                            </ion-icon>
                            <span> Explore</span>
                        </a>
                    </li>
                    <li><a href="courses.html">
                            <ion-icon name="play-circle" class="bg-gradient-to-br from-yellow-300 p-1 rounded-md side-icon text-opacity-80 text-white to-red-500">
                            </ion-icon>
                            <span> Courses</span>
                        </a>
                    </li>
                    <li><a href="categories.html">
                            <ion-icon name="albums"  class="bg-gradient-to-br from-green-300 p-1 rounded-md side-icon text-opacity-80 text-white to-green-500">
                            </ion-icon>
                            <span> Categories </span>
                        </a>
                    </li>
                    <li class="active"><a href="episodes.html">
                            <ion-icon name="film" class="bg-gradient-to-br from-pink-300 p-1 rounded-md side-icon text-opacity-80 text-white to-red-500">
                            </ion-icon>
                            <span> Episodes </span>
                        </a>
                    </li>
                    <li><a href="books.html">
                            <ion-icon name="book" class="bg-gradient-to-br from-yellow-300 p-1 rounded-md side-icon text-opacity-80 text-white to-red-500">
                            </ion-icon>
                            <span> Books </span>
                        </a>
                    </li>
                    <li><a href="blogs.html">
                            <ion-icon name="newspaper" class="bg-gradient-to-br from-purple-300 p-1 rounded-md side-icon text-opacity-80 text-white to-blue-500">
                            </ion-icon>
                            <span> Articles</span>
                        </a>
                    </li>
                </ul>

                <ul class="side_links" data-sub-title="Pages">
                    <li><a href="page-pricing.html"> <ion-icon name="card-outline" class="side-icon"></ion-icon> Pricing  </a></li>
                    <li><a href="page-help.html"> <ion-icon name="information-circle-outline" class="side-icon"></ion-icon> Help </a></li>
                    <li><a href="page-faq.html"> <ion-icon name="albums-outline" class="side-icon"></ion-icon> Faq </a></li>
                    <li><a href="page-forum.html"> <ion-icon name="chatbubble-ellipses-outline" class="side-icon"></ion-icon> Forum <span class="soon">new</span> </a></li>
                    <li><a href="pages-cart.html"> <ion-icon name="receipt-outline" class="side-icon"></ion-icon> Cart list </a></li>
                    <li><a href="pages-account-info.html"> <ion-icon name="reader-outline" class="side-icon"></ion-icon> Billing </a></li>
                    <li><a href="pages-payment-info.html"> <ion-icon name="wallet-outline" class="side-icon"></ion-icon> Payments</a></li>
                    <li><a href="page-term.html"> <ion-icon name="document-outline" class="side-icon"></ion-icon> Term </a></li>
                    <li><a href="page-privacy.html"> <ion-icon name="document-text-outline" class="side-icon"></ion-icon> Privacy </a></li> 
                    <li><a href="page-setting.html"> <ion-icon name="settings-outline" class="side-icon"></ion-icon> Setting </a></li> 
                    <li><a href="#"> Development  </a> 
                        <ul>
                            <li><a href="development-elements.html"> Elements  </a></li>
                            <li><a href="development-components.html"> Compounents </a></li>
                            <li><a href="development-plugins.html"> Plugins </a></li>
                            <li><a href="development-icons.html"> Icons </a></li>
                        </ul>
                    </li>
                    <li><a href="#"> Authentication  </a> 
                        <ul>
                            <li><a href="form-login.html">form login </a></li>
                            <li><a href="form-register.html">form register</a></li> 
                        </ul>
                    </li>
                </ul>

                <div class="side_foot_links">
                    <a href="#">About</a>
                    <a href="#">Blog </a>
                    <a href="#">Careers</a>
                    <a href="#">Support</a>
                    <a href="#">Contact Us </a>
                    <a href="#">Developer</a>
                    <a href="#">Terms of service</a>
                </div>

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


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/episodes-watch.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Mar 2022 11:27:50 GMT -->
</html>
