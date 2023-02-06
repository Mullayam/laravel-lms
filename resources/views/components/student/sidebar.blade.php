 <div class="sidebar">
     <div class="sidebar_inner" data-simplebar>

         <div class="-mb-1 border-b flex items-center pb-5 pt-4 px-2 space-x-4 cursor-pointer">
             <img src="{{ Auth::user()->profile_foto }}" alt="" class="h-12 rounded-full w-12">
             <div class="flex-1">
                 <div class="font-semibold mb-0.5 text-base">{{ Auth::user()->name }} </div>
                 <div class="text-sm">{{ Auth::user()->email }}</div>
             </div>
             <i class="icon-feather-chevron-down text-xl"></i>
         </div>
         <div uk-dropdown="offset:-10;mode: click"
             class="-ml-1 m-3 bg-white shadow-xl rounded-md p-4 border border-gray-100">
             <div class="w-60 font-medium">
                 <a href="/" class="px-3 py-2 rounded block hover:bg-gray-100"> Switch to Instuctor </a>
                 <a href="#" class="px-3 py-2 rounded block hover:bg-gray-100"> My Subscriptions</a>
                 <a href="#" class="px-3 py-2 rounded block hover:bg-gray-100"> Account setting </a>
                 <a href="#" class="px-3 py-2 rounded block hover:bg-gray-100"> Sign out </a>
             </div>
         </div>

         <ul class="border-transparent">
             <li><a href="{{ route('studentDash', ['username' => Auth::user()->username]) }}">
                     <ion-icon name="home-outline" class="side-icon"></ion-icon>
                     <span> Dashboard </span>
                 </a>
             </li>
             <li><a href="{{ route('studentCourses', ['username' => Auth::user()->username]) }}">
                     <ion-icon name="play-circle-outline" class="side-icon"></ion-icon>
                     <span> My Courses</span>
                 </a>
             </li>
             <li><a href="{{ route('studentInbox', ['username' => Auth::user()->username]) }}">
                     <ion-icon name="chatbox-ellipses-outline" class="side-icon"></ion-icon>
                     <span> Message</span><span class="nav-tag">2</span>
                 </a>
             </li>
             <li><a href="{{ route('studentNotify', ['username' => Auth::user()->username]) }}">
                     <ion-icon name="albums-outline" class="side-icon"></ion-icon>
                     <span> Notifications</span>
                 </a>
             </li>
             <li><a href="{{ route('studentTxn', ['username' => Auth::user()->username]) }}">
                     <ion-icon name="reader-outline" class="side-icon"></ion-icon>
                     <span> Billing</span>
                 </a>
             </li>
             <li><a href="{{ route('WatchProfile', ['username' => Auth::user()->username]) }}">
                     <ion-icon name="person-outline" class="side-icon"></ion-icon>
                     <span> Profile</span>
                 </a>
             </li>
             <li><a>
                     <ion-icon name="settings-outline" class="side-icon"></ion-icon>
                     <span> Setting</span>
                 </a>
                 <ul>
                     <li><a href="{{ route('studentProfile', ['username' => Auth::user()->username]) }}"> General setting </a></li>

                 </ul>
             </li>
         </ul>

         <ul class="side_links" data-sub-title="">

             <li><a href="{{ route('userLogout')}}">

                     <ion-icon name="log-out-outline" class="side-icon"></ion-icon>
                     <span> Logout </span>
                 </a>
             </li>
         </ul>

     </div>

     <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>
 </div>
