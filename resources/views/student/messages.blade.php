@extends('layouts.student')
@section('student')
    <span uk-toggle="target: .message-content;"
        class="fixed left-0 top-36 bg-red-600 z-10 py-1 px-4 rounded-r-3xl text-white"> Users</span>

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
                                <div class="message-avatar"><i class="status-icon status-online"></i><img
                                        src="../assets/images/avatars/avatar-1.jpg" alt=""></div>

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
                                <div class="message-avatar"><i class="status-icon status-offline"></i><img
                                        src="../assets/images/avatars/avatar-2.jpg" alt=""></div>

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
                                <div class="message-avatar"><i class="status-icon status-offline"></i><img
                                        src="../assets/images/avatars/avatar-3.jpg" alt=""></div>

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
                                <div class="message-avatar"><i class="status-icon status-online"></i><img
                                        src="../assets/images/avatars/avatar-4.jpg" alt=""></div>

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
                                <div class="message-avatar"><i class="status-icon status-online"></i><img
                                        src="../assets/images/avatars/avatar-2.jpg" alt=""></div>

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
                                <div class="message-avatar"><i class="status-icon status-offline"></i><img
                                        src="../assets/images/avatars/avatar-5.jpg" alt=""></div>

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
                                <div class="message-avatar"><i class="status-icon status-offline"></i><img
                                        src="../assets/images/avatars/avatar-1.jpg" alt=""></div>

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
                                <div class="message-avatar"><i class="status-icon status-online"></i><img
                                        src="../assets/images/avatars/avatar-2.jpg" alt=""></div>

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
                    <a href="#" class="message-action text-red-500"><i class="icon-feather-trash-2"></i> <span
                            class="md:inline hidden"> Delete Conversation</span> </a>
                </div>

                <div class="message-content-scrolbar" data-simplebar>

                    <!-- Message Content Inner -->
                    <div class="message-content-inner">

                        <!-- Time Sign -->
                        <div class="message-time-sign">
                            <span>28 June, 2018</span>
                        </div>

                        <div class="message-bubble me">
                            <div class="message-bubble-inner">
                                <div class="message-avatar"><img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="message-text">
                                    <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod laoreet.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="message-bubble">
                            <div class="message-bubble-inner">
                                <div class="message-avatar"><img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="message-text">
                                    <p>Laoreet. dolore magna imperdiet quod mazim placerat facer possim. ????</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="message-bubble me">
                            <div class="message-bubble-inner">
                                <div class="message-avatar"><img src="../assets/images/avatars/avatar-2.jpg" alt="">
                                </div>
                                <div class="message-text">
                                    <p>Albuom commodo consequat. ????</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <!-- Time Sign -->
                        <div class="message-time-sign">
                            <span>Yesterday</span>
                        </div>

                        <div class="message-bubble me">
                            <div class="message-bubble-inner">
                                <div class="message-avatar"><img src="../assets/images/avatars/avatar-2.jpg"
                                        alt=""></div>
                                <div class="message-text">
                                    <p>Option congue nihil imperdiet mazim placerat facer possim.</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="message-bubble">
                            <div class="message-bubble-inner">
                                <div class="message-avatar"><img src="../assets/images/avatars/avatar-2.jpg"
                                        alt=""></div>
                                <div class="message-text">
                                    <p> Nam liber tempor cum soluta nobis eleifend doming id quod mazim placerat ????</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="message-bubble me">
                            <div class="message-bubble-inner">
                                <div class="message-avatar"><img src="../assets/images/avatars/avatar-2.jpg"
                                        alt=""></div>
                                <div class="message-text">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, ????</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="message-bubble">
                            <div class="message-bubble-inner">
                                <div class="message-avatar"><img src="../assets/images/avatars/avatar-2.jpg"
                                        alt=""></div>
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
@endsection
