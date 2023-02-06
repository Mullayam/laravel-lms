<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/blog-read.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Mar 2022 11:29:01 GMT -->
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
            <div class="container p-0">

                <div class="lg:flex lg:space-x-4 lg:-mx-4">
                
                    <div class="lg:w-9/12 lg:space-y-6">
                        
                        <div class="tube-card">
    
                            <div class="h-44 mb-4 md:h-72 overflow-hidden relative rounded-t-lg w-full">
                                <img src="../assets/images/blog/img-5.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                            </div>
    
                            <div class="md:p-6 p-4">
    
                                <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Your Best Friend Before Google in Python! </h1>
        
                                <div class="flex items-center space-x-3 my-3 pb-4 border-b">
                                    <img src="../assets/images/avatars/avatar-2.jpg" alt="" class="w-10 rounded-full">
                                    <div>
                                        <div class="text-base font-semibold"> Stella Johnson </div>
                                        <div class="text-xs"> Published on Feb 22, 2021 </div>
                                    </div>
                                </div>
        
                                <div class="space-y-3">
                                    <p> 
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                         ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                                    </p>
                                    <h3 class="text-xl font-semibold pt-2"> Maecenas Pretium Lorem Fermentum</h3>
                                    <p> 
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                         ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    </p>
                                    <p> 
                                         Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                         ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
                                    </p>
                                </div>
                                
    
                                <div class="relative">
                                    <a href="#" class="mt-3 inline-flex items-center space-x-3"> 
                                        <ion-icon name="share-social-outline" class="p-2 rounded-md text-lg bg-gray-200"></ion-icon>
                                        <div> Intersting?  <span class="text-blue-600">  Share it </span> </div>
                                     </a>
                                    
                                    <div class="bg-white w-96 shadow-md hidden mx-auto p-2 mt-12 rounded-md text-gray-500 border"
                                       uk-drop="mode: hover;pos: right-center;animation: uk-animation-slide-right-small; offset:15">
                                       
                                       <div class="grid grid-flow-col text-sm w-full">
                                        <a href="#" class="p-2 text-center hover:bg-gray-100 rounded-md text-sm space-y-1"> <ion-icon name="logo-facebook" class="text-4xl"></ion-icon> <div> Facebook </div> </a>
                                        <a href="#" class="p-2 text-center hover:bg-gray-100 rounded-md text-sm space-y-1"> <ion-icon name="logo-facebook" class="text-4xl"></ion-icon> <div> Facebook </div> </a>
                                        <a href="#" class="p-2 text-center hover:bg-gray-100 rounded-md text-sm space-y-1"> <ion-icon name="logo-google" class="text-4xl"></ion-icon> <div> Facebook </div> </a>
                                        <a href="#" class="p-2  text-center hover:bg-gray-100 rounded-md text-sm space-y-1"> <ion-icon name="logo-twitter" class="text-4xl"></ion-icon> <div> Facebook </div> </a>
                                       </div>
                                    </div>
                              
                                </div>
    
                                
    
                            </div>
    
                        </div>
    
                        <!-- related articles -->
                        <div class="tube-card md:p-6 p-3 relative">
    
                            <h1 class="block text-xl font-semibold"> Related Articales </h1>
                            
                            <div class="relative" uk-slider="finite: true">
  
                                <div class="uk-slider-container px-1 py-3">
                                    <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2@s uk-child-width-1-2 uk-grid-small uk-grid">
                                      <li>
                                          <div>
                                              <a href="blog-read.html" class="w-full md:h-32 h-28 overflow-hidden rounded-lg relative block">
                                                  <img src="../assets/images/blog/img-1.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                              </a>
                                              <div class="pt-3">
                                                  <a href="blog-read.html" class="font-semibold line-clamp-2"> Top Amazing web demos and experiments in 2021 Should Know About</a>
                                                  <div class="pt-2">
                                                      <p class="text-sm"> Denise Marie</p>
                                                      <div class="flex space-x-2 items-center text-xs">
                                                          <div>  Feb 4, 2020 </div>
                                                          <div class="md:block hidden">·</div>
                                                          <div class="flex items-center"> <ion-icon name="chatbox-ellipses-outline" class="text-base leading-0 mr-2"></ion-icon>  12 </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                        </li> 
                                        <li>
                                          <div>
                                              <a href="blog-read.html" class="w-full md:h-32 h-28 overflow-hidden rounded-lg relative block">
                                                  <img src="../assets/images/blog/img-3.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                              </a>
                                              <div class="pt-3">
                                                  <a href="blog-read.html" class="font-semibold line-clamp-2"> Interesting JavaScript and CSS libraries for 2021 Should Know About</a>
                                                  <div class="pt-2">
                                                      <p class="text-sm"> Anoundi hellows</p>
                                                      <div class="flex space-x-2 items-center text-xs">
                                                          <div>  May 2, 2020 </div>
                                                          <div class="md:block hidden">·</div>
                                                          <div class="flex items-center"> <ion-icon name="chatbox-ellipses-outline" class="text-base leading-0 mr-2"></ion-icon>  12 </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                        </li> 
                                        <li>
                                          <div>
                                              <a href="blog-read.html" class="w-full md:h-32 h-28 overflow-hidden rounded-lg relative block">
                                                  <img src="../assets/images/blog/img-4.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                              </a>
                                              <div class="pt-3">
                                                  <a href="blog-read.html" class="font-semibold line-clamp-2">  Interesting JavaScript and CSS Libraries in 2021 you should be know</a>
                                                  <div class="pt-2">
                                                      <p class="text-sm"> Anoundi hellows</p>
                                                      <div class="flex space-x-2 items-center text-xs">
                                                          <div>  Jun 5, 2020 </div>
                                                          <div class="md:block hidden">·</div>
                                                          <div class="flex items-center"> <ion-icon name="chatbox-ellipses-outline" class="text-base leading-0 mr-2"></ion-icon>  12 </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                        </li> 
                                        <li>
                                          <div>
                                              <a href="blog-read.html" class="w-full md:h-32 h-28 overflow-hidden rounded-lg relative block">
                                                  <img src="../assets/images/blog/img-2.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                              </a>
                                              <div class="pt-3">
                                                  <a href="blog-read.html" class="font-semibold line-clamp-2"> Awesome Web Dev Tools and Resources For 2021 in 30 Minutes </a>
                                                  <div class="pt-2">
                                                      <p class="text-sm"> Anoundi hellows</p>
                                                      <div class="flex space-x-2 items-center text-xs">
                                                          <div>  May 4, 2020 </div>
                                                          <div class="md:block hidden">·</div>
                                                          <div class="flex items-center"> <ion-icon name="chatbox-ellipses-outline" class="text-base leading-0 mr-2"></ion-icon>  12 </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                        </li> 
                                    </ul>
  
                                    <a class="absolute bg-white top-16 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous">  <ion-icon name="chevron-back-outline"></ion-icon> </a>
                                    <a class="absolute bg-white top-16 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <ion-icon name="chevron-forward-outline"></ion-icon></a>
  
                                </div>
  
                            </div>
                              
                        </div>
    
                        <div class="tube-card p-6">
    
                            <h1 class="block text-xl font-semibold mb-6"> Comments (12) </h1>
    
                            <div class="space-y-5">
                            
                                <div class="flex gap-x-4 relative rounded-md">
                                    <img src="../assets/images/avatars/avatar-4.jpg" alt="" class="rounded-full shadow w-12 h-12">
                                    <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full absolute right-5 top-0">Replay</a>
                                    <div>
                                        <h4 class="text-base m-0 font-semibold"> Stella Johnson</h4>
                                        <span class="text-gray-700 text-sm">10th, April 2021</span>
                                        <p class="mt-3 md:ml-0 -ml-16">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                            ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                        </p>
                             
                                    </div>
                                </div>
                            
                                <div class="flex gap-x-4 relative rounded-md">
                                    <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full absolute right-5 top-0">Replay</a>
                                    <img src="../assets/images/avatars/avatar-3.jpg" alt="" class="rounded-full shadow w-12 h-12">
                                    <div>
                                        <h4 class="text-base m-0 font-semibold"> Alex Dolgove</h4>
                                        <span class="text-gray-700 text-sm"> 14th, April 2021 </span>
                                        <p class="mt-3 md:ml-0 -ml-16">
                                            elit, sed diam ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim ipsum dolor sit
                                            amet, consectetuer adipiscing elit, sed diam ut laoreet dolore
                                        </p>
                                    </div>
                                </div>
    
                                <div class="flex gap-x-4 relative rounded-md lg:ml-16">
                                    <a href="#" class="bg-gray-100 py-1.5 px-4 rounded-full absolute right-5 top-0">Replay</a>
                                    <img src="../assets/images/avatars/avatar-1.jpg" alt="" class="rounded-full shadow w-12 h-12">
                                    <div>
                                        <h4 class="text-base m-0 font-semibold"> Stella Johnson</h4>
                                        <span class="text-gray-700 text-sm"> 13th, May 2021 </span>
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

                    
                    <!--  Sidebar  -->
                    <div class="lg:w-80 w-full mt-4 lg:mt-0">
    
                        <div class="space-y-5" uk-sticky="offset:22; bottom:true ; top:30 ; animation: uk-animation-slide-top-small">
    
                            <div class="tube-card p-6">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <h4 class="text-lg -mb-0.5 font-semibold"> Recently Posted </h4>
                                    </div>
                                    <a href="#" class="text-blue-600"> <ion-icon name="refresh" class="-mt-0.5 -mr-2 hover:bg-gray-100 p-1.5 rounded-full text-lg md hydrated" role="img" aria-label="refresh"></ion-icon> </a>
                                </div>
                                <ul> 
                                    <li>
                                        <a href="blog-read.html" class="hover:bg-gray-50 rounded-md p-2 -mx-2 block">
                                            <h3 class="font-medium line-clamp-2"> Awesome Web Dev Tools and Resources For 2021 </h3>
                                            <div class="flex items-center my-auto text-xs space-x-1.5 mt-1.5">
                                              <div> Sep 12, 2020</div> <div class="pb-1"> . </div> 
                                              <ion-icon name="chatbox-ellipses-outline" role="img" class="md hydrated" aria-label="chatbox ellipses outline"></ion-icon> <div> 23</div>
                                           </div> 
                                        </a>
                                    </li>
                                    <li>
                                      <a href="blog-read.html" class="hover:bg-gray-50 rounded-md p-2 -mx-2 block">
                                          <h3 class="font-medium line-clamp-2">  Awesome Web Dev Tools and Resources For 2021</h3>
                                          <div class="flex items-center my-auto text-xs space-x-1.5 mt-1.5">
                                            <div> Sep 12, 2020</div> <div class="pb-1"> . </div> 
                                            <ion-icon name="chatbox-ellipses-outline" role="img" class="md hydrated" aria-label="chatbox ellipses outline"></ion-icon> <div> 23</div>
                                         </div> 
                                      </a>
                                  </li>
                                  <li>
                                      <a href="blog-read.html" class="hover:bg-gray-50 rounded-md p-2 -mx-2 block">
                                          <h3 class="font-medium line-clamp-2">Interesting JavaScript and CSS Libraries in 2021 </h3>
                                          <div class="flex items-center my-auto text-xs space-x-1.5 mt-1.5">
                                            <div> Sep 12, 2020</div> <div class="pb-1"> . </div> 
                                            <ion-icon name="chatbox-ellipses-outline" role="img" class="md hydrated" aria-label="chatbox ellipses outline"></ion-icon> <div> 23</div>
                                         </div> 
                                      </a>
                                  </li>
                                  <li>
                                      <a href="blog-read.html" class="hover:bg-gray-50 rounded-md p-2 -mx-2 block">
                                          <h3 class="font-medium line-clamp-2">Awesome Web Dev Tools and Resources For 2021 </h3>
                                          <div class="flex items-center my-auto text-xs space-x-1.5 mt-1.5">
                                            <div> Sep 12, 2020</div> <div class="pb-1"> . </div> 
                                            <ion-icon name="chatbox-ellipses-outline" role="img" class="md hydrated" aria-label="chatbox ellipses outline"></ion-icon> <div> 23</div>
                                         </div> 
                                      </a>
                                  </li>
                                </ul>
                                <a href="#" class="hover:bg-gray-100 -mb-2 mt-0.5 h-8 flex items-center justify-center rounded-md text-blue-400 text-sm"> 
                                    See all 
                                </a>
                            </div>
                            
                            <div class="mt-6">
                                <h4 class="text-lg mb-2 font-semibold"> Tags </h4>
                                <div class="flex flex-wrap font-medium gap-2">
                                    <a href="#" class="bg-white px-3.5 py-1.5 rounded shadow text-sm"> JavaScript</a>
                                    <a href="#" class="bg-white px-3.5 py-1.5 rounded shadow text-sm"> Angular</a>
                                    <a href="#" class="bg-white px-3.5 py-1.5 rounded shadow text-sm"> Design</a>
                                    <a href="#" class="bg-white px-3.5 py-1.5 rounded shadow text-sm"> Photography</a>
                                    <a href="#" class="bg-white px-3.5 py-1.5 rounded shadow text-sm"> Technolgy</a>
                                    <a href="#" class="bg-white px-3.5 py-1.5 rounded shadow text-sm"> Music</a> 
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
                
                <ul class="side-colored">
                    <li><a href="explore.html">
                            <ion-icon name="compass" class="side-icon"> </ion-icon>
                            <span> Explore</span>
                        </a>
                    </li>
                    <li><a href="courses.html">
                            <ion-icon name="play-circle" class="side-icon"> </ion-icon>
                            <span> Courses</span>
                        </a>
                    </li>
                    <li><a href="categories.html">
                            <ion-icon name="albums" class="side-icon"> </ion-icon>
                            <span> Categories </span>
                        </a>
                    </li>
                    <li><a href="episodes.html">
                            <ion-icon name="film" class="side-icon">  </ion-icon>
                            <span> Episodes </span>
                        </a>
                    </li>
                    <li><a href="books.html">
                            <ion-icon name="book" class="side-icon"> </ion-icon>
                            <span> Books </span>
                        </a>
                    </li>
                    <li class="active"><a href="blogs.html">
                            <ion-icon name="newspaper" class="side-icon">  </ion-icon>
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


<!-- Mirrored from demo.foxthemes.net/courseplus-v4.3.1/default/blog-read.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Mar 2022 11:29:01 GMT -->
</html>
