   <header uk-sticky>
       <div class="header_inner">
           <div class="left-side">

               <!-- Logo -->
               <div id="logo">
                   <a href="/">
                       <img src="https://learn-manifest-files-enjoys.b-cdn.net/learn/learn-enjoys.png" alt="">
                       {{-- <img src="https://learn-manifest-files-enjoys.b-cdn.net/learn/logo-inverse-bd.png" class="logo_inverse" alt=""> --}}
                       <img src="https://learn-manifest-files-enjoys.b-cdn.net/learn/bc-mobile.png" class="logo_mobile"
                           alt="">
                   </a>
               </div>
               <!-- icon menu for mobile -->
               <div class="triger" uk-toggle="target: #wrapper ; cls: is-active">
               </div>

           </div>
           <div class="right-side">

               <!-- Header search box  -->
               <div class="header_search"><i class="uil-search-alt"></i>
                   <input value="" type="text" class="form-control" placeholder=" Quick search for anything.."
                       autocomplete="off">
                   <div uk-drop="mode: click;offset:10" class="header_search_dropdown">

                       <h4 class="search_title"> Recently </h4>
                       <ul>
                           <li>
                               <a href="#">
                                   <img src="" alt="" class="list-avatar">
                                   <div class="list-name"> Erica Jones </div>
                               </a>
                           </li>

                       </ul>

                   </div>
               </div>

               <x-header-section></x-header-section>


           </div>
       </div>
   </header>
