   @php
       if ($auth->sign_type == 'Email') {
           $img = './cdn/static/assets/images/user-default.png';
       } else {
           $img = $auth->profile_foto;
       }

   @endphp

   <div>
       <!-- cart -->
       <a href="#" class="header_widgets">
                                       <img src="https://img.icons8.com/windows/38/000000/fast-cart.png"/>
       </a>
       <div uk-drop="mode: click" class="dropdown_cart">
           <div class="cart-headline"> My Cart
               <a href="#" class="checkout">Checkout</a>
           </div>
           <ul class="dropdown_cart_scrollbar" data-simplebar>
               <li>
                   <div class="cart_avatar">
                       <img src="./cdn/static/assets/images/courses/img-1.jpg" alt="">
                   </div>
                   <div class="cart_text">
                       <h4> Learn Angular Beginner to Advanced Fundamentals </h4>
                   </div>
                   <div class="cart_price">
                       <span> $12.99 </span>
                       <button class="type"> Remove</button>
                   </div>
               </li>
           </ul>

           <div class="cart_footer">
               <p> Subtotal : $ 320 </p>
               <h1> Total : <strong> $ 320</strong> </h1>
           </div>
       </div>

       <!-- notification -->
       <a href="#" class="header_widgets">
            <img src="{{asset('cdn/static/assets/images/bell.png')}}" alt="notify"  height="auto" width="28px"/>
             <span id="notificationCount">0</span>
       </a>
       <div uk-drop="mode: click" class="header_dropdown">
           <div class="drop_headline">
               <h4>Notifications </h4>
               <div class="btn_action">
                   <div class="btn_action">
                       <a href="#">
                           <ion-icon name="settings-outline" uk-tooltip="title: Notifications settings ; pos: left">
                           </ion-icon>
                       </a>
                       <a href="#">
                           <ion-icon name="checkbox-outline" uk-tooltip="title: Mark as read all ; pos: left">
                           </ion-icon>
                       </a>
                   </div>
               </div>
           </div>

           <ul class="dropdown_scrollbar" data-simplebar>
                 @if (empty($auth->phone) || $auth->phone =="NULL")
                    <li>
                   <a href="{{route('studentProfile',['username'=>$auth->username])}}">
                       <div class="drop_avatar"> <img src="{{$img}}"
                               alt="{{$auth->username}}">
                       </div>
                       <div class="drop_content">
                           <p> <strong>{{$auth->name}}</strong>
                               <span class="text-link">Please Add/Verify your Mobile Number</span>
                           </p>

                       </div>
                   </a>
               </li>
                 @endif
               <li>
                   <a href="#">
                       <div class="drop_avatar"> <img src=""
                               alt="{{$auth->username}}">
                       </div>
                       <div class="drop_content">
                           <p>
                            <span class="text-link">Javascript Introduction </span>
                            <strong>Adrian Mohani</strong>
                           </p>
                           <span class="time-ago"> 2 hours ago </span>
                       </div>
                   </a>
               </li>

           </ul>
           <a href="#" class="see-all">See all</a>
       </div>

       <!-- messages -->
       <a href="#" class="header_widgets">
                <img src="https://img.icons8.com/color/28/000000/messaging-.png"/>

       </a>
       <div uk-drop="mode: click" class="header_dropdown">
           <div class="drop_headline">
               <h4>Messages </h4>
               <div class="btn_action">
                   <a href="#">
                       <ion-icon name="settings-outline" uk-tooltip="title: Message settings ; pos: left">
                       </ion-icon>
                   </a>
                   <a href="#">
                       <ion-icon name="checkbox-outline" uk-tooltip="title: Mark as read all ; pos: left">
                       </ion-icon>
                   </a>
               </div>
           </div>
           <ul class="dropdown_scrollbar" data-simplebar>
               <li>
                   <a href="#">
                       <div class="drop_avatar"> <img src="./cdn/static/assets/images/avatars/avatar-1.jpg"
                               alt="">
                       </div>
                       <div class="drop_content">
                           <strong> John menathon </strong> <span class="time"> 6:43 PM</span>
                           <p> Lorem ipsum dolor sit amet, consectetur </p>
                       </div>
                   </a>
               </li>

           </ul>
           <a href="#" class="see-all">See all</a>
       </div>

       <!-- profile -->
       <a href="#">
           <img src="{{ $img }}" class="header_widgets_avatar" alt="">
       </a>
       <div uk-drop="mode: click;offset:5" class="header_dropdown profile_dropdown">
           <ul>
               <li>
                   <a href="#" class="user">
                       <div class="user_avatar">

                           <img src="{{ $img }}">
                       </div>
                       <div class="user_name">
                           <div>{{ $auth->name }} </div>
                           <x-mintoast text="Username Bruhhh..." style="color:blue!important;">
                               {{ '@' . $auth->username }} </x-mintoast>
                       </div>
                   </a>
               </li>
               <li>
                   <hr>
               </li>
               <li>
                   <a href="/Pricing" class="is-link">
                       <ion-icon name="rocket-outline" class="is-icon"></ion-icon> <span> Upgrade
                           Membership </span>
                   </a>
               </li>
               <li>
                   <hr>
               </li>
               <li>
                   <a href="/student/{{ $auth->username }}/dashboard">
                       <ion-icon name="person-circle-outline" class="is-icon"></ion-icon>
                       My Account
                   </a>
               </li>
               <li>
                   <a href="{{ route('studentProfile', ['username' => $auth->username]) }}">
                       <ion-icon name="card-outline" class="is-icon"></ion-icon>
                       Subscriptions
                   </a>
               </li>
               <li>
                   <a href="/{{ route('studentTxn', ['username' => $auth->username]) }}">
                       <ion-icon name="color-wand-outline" class="is-icon"></ion-icon>
                       My Billing
                   </a>
               </li>
               <li>
                   <a href="{{ route('studentProfile', ['username' => $auth->username]) }}">
                       <ion-icon name="settings-outline" class="is-icon"></ion-icon>
                       Account Settings
                   </a>
               </li>
               <li>
                   <hr>
               </li>

               <li>
                   <a href="{{ route('userLogout') }}">
                       <ion-icon name="log-out-outline" class="is-icon"></ion-icon>
                       Log Out
                   </a>
               </li>
           </ul>
       </div>
   </div>

   @section('extra_scripts')
      @if ($auth->verified==0)
           <script>
           window.addEventListener("load", (event) => {
               UIkit.notification({
                   message: '<div class=\'flex\'><div class=\'text-red-600 mr-2\'>Please Verify Your Email</div></div>',
                   pos: 'top-right',
               })
           });

       </script>
      @endif
   @endsection
<script type="text/javascript">
 $(document).ready(function() {
            var notificationCount = document.getElementById('notificationCount');
                    $.ajax({
                        url: "http://127.0.0.1:8000/all/notifications/{{auth()->user()->id}}",
                        type: "get",
                        dataType: "json",
                        success: function (data) {
                            console.log(data);
                            if (data.status) {
                                UIkit.notification({
                                    message:
                                        "<div class='flex'> <div class='text-" +
                                        data.type +
                                        "-600 mr-4'> " +
                                        data.message +
                                        "</div></div>",
                                    pos: "bottom-right",
                                });
                            }
                        },
                    });
           });

</script>
