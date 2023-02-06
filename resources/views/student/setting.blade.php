 @extends('layouts.student')
 @section('student')
     <div class="container">

         <h3 class="text-2xl font-medium mb-5"> General Setting </h3>

         <nav class="cd-secondary-nav border-b md:m-0 -mx-4 nav-small">
             <ul uk-switcher="connect: #userinfo-tabs; animation: uk-animation-fade">
                 <li class="active"><a href="#" class="lg:px-2">General </a></li>
                 <li><a href="#" class="lg:px-2"> Password </a></li>
                 <li><a href="#" class="lg:px-2"> Social links </a></li>
                 <li><a href="#" class="lg:px-2"> Notification </a></li>
                 <li><a href="#" class="lg:px-2"> Downloads </a></li>
                 <li><a href="#" class="lg:px-2"> Security </a></li>
             </ul>
         </nav>
         <div class="max-w-2xl lg:py-6 mx-auto uk-switcher" id="userinfo-tabs">
             <!-- Basic information -->
             <div class="grid lg:grid-cols-1 gap-8 md:mt-12">

                 <div class="bg-white rounded-md lg:shadow-md shadow col-span-2">

                     <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">
                         <div>
                             <label for="first-name"> First name</label>
                             <input type="text" placeholder="" id="first-name" value="{{ auth()->user()->name }}"
                                 class="shadow-none with-border">
                         </div>
                         <div>
                             <label for="last-name"> Last name</label>
                             <input type="text" placeholder="" id="last-name" class="shadow-none with-border">
                         </div>
                         <div class="col-span-2">
                             <label for="email"> Email <span class="text-red-600">*</span></label>
                             <input type="text" value="{{ auth()->user()->email }}" id="email"
                                 class="shadow-none with-border border-red-500"><BR>
                            <a href="#ChangeEmail-{{ auth()->user()->username }}"
                                 class="border font-medium px-3 py-1.5 mt-1 rounded-md self-center shadow-sm text-center text-sm">
                                 Change
                            </a>
                             @if (auth()->user()->verified==0)
                             <a href="{{route('userVerify',['username'=>auth()->user()->username])}}"
                                 class="border font-medium px-3 py-1.5 mt-1 mx-2 bg-red-500 text-white-400 rounded-md self-center shadow-sm text-center text-sm">
                                 Verify Email
                            </a>
                             @endif
                         </div>



                         <label for="system_info" class="font-medium">Photo </label>
                         <div class="col-span-2 flex py-2 space-x-5">
                             <img src="{{ auth()->user()->profile_foto }}" alt="{{ auth()->user()->token }}"
                                 class="h-12 rounded-full w-12">
                             <a href="#ChangeAvatar-{{ auth()->user()->token }}"
                                 class="border font-medium px-3 py-1.5  rounded-md self-center shadow-sm text-center text-sm">Change</a>
                         </div>
                         <div>
                             <label for="working">API Key</label>
                             <input type="text" value="{{ auth()->user()->social_id }}" class="shadow-none with-border"
                                 readonly>
                         </div>
                         <div>
                             <label for="level"> Registeration Via </label>
                             <select id="level" name="sign_type" class="shadow-none selectpicker with-border ">
                                 <option selected value="{{ auth()->user()->sign_type }}">{{ auth()->user()->sign_type }}
                                 </option>

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
                         <p>Change your Password</p>
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
                         <p>Have Social Links , Wanna Share it ?? Just Put them Here</p>
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
                         <div>
                             <label for="linkedin_link"> Github link </label>
                             <input type="text" placeholder="" id="github_link" class="shadow-none with-border">
                         </div>
                     </div>
                 </div>
             </div>

             <!-- notification-->
             <div class="grid lg:grid-cols-3 gap-8 md:mt-12">
                 <div>
                     <div uk-sticky="offset:100;bottom:true;media:992">
                         <h3 class="text-lg mb-2 font-semibold"> Notifications </h3>
                         <p> Change Your Notification Settings From Here.</p>
                     </div>
                 </div>
                 <div class="bg-white rounded-md lg:shadow-md shadow col-span-2">

                     <div class="lg:p-6 p-4 space-y-6">
                         <div>
                             <h4 class="text-base mb-1 font-semibold">By Email</h4>
                             <p>Select Those Fields to receive alerts via email</p>

                             <div class="space-y-3 mt-5">

                                 <div class="checkbox">
                                     <input type="checkbox" id="chekcbox1" checked>
                                     <label for="chekcbox1" class="ml-4">
                                         <span class="checkbox-icon mt-1 -ml-4"></span> <span
                                             class="font-semibold text-base">
                                             Comments </span>
                                         <p class="text-gray-400 text-sm mt-1.5"> Get updates when someone liks/replies or
                                             appreciate your comment</p>
                                     </label>
                                 </div>
                                 <div class="checkbox">
                                     <input type="checkbox" id="chekcbox2">
                                     <label for="chekcbox2" class="ml-4">
                                         <span class="checkbox-icon mt-1 -ml-4"></span> <span
                                             class="font-semibold text-base">
                                             Review </span>
                                         <p class="text-gray-400 text-sm mt-1.5"> Get updates when someone Post a Review on
                                             similar page where you have posted it</p>
                                     </label>
                                 </div>
                                 <div class="checkbox">
                                     <input type="checkbox" id="chekcbox3">
                                     <label for="chekcbox3" class="ml-4">
                                         <span class="checkbox-icon mt-1 -ml-4"></span> <span
                                             class="font-semibold text-base">
                                             Reply </span>
                                         <p class="text-gray-400 text-sm mt-1.5">Wanna receive your comments reply, to see
                                             who mention or tagged you</p>
                                     </label>
                                 </div>
                                 <div class="checkbox">
                                     <input type="checkbox" id="chekcbox3">
                                     <label for="chekcbox3" class="ml-4">
                                         <span class="checkbox-icon mt-1 -ml-4"></span> <span
                                             class="font-semibold text-base">
                                             New Course/Books </span>
                                         <p class="text-gray-400 text-sm mt-1.5">Receive alerts any of new content is
                                             updated</p>
                                     </label>
                                 </div>

                                 <div class="checkbox">
                                     <input type="checkbox" id="chekcbox3" disabled>
                                     <label for="chekcbox3" class="ml-4">
                                         <span class="checkbox-icon mt-1 -ml-4"></span> <span
                                             class="font-semibold text-base">
                                             Doubts/Disscussion </span>
                                         <p class="text-gray-400 text-sm mt-1.5">Receive alerts any of new content is
                                             updated</p>
                                     </label>
                                 </div>
                             </div>

                         </div>
                         <hr class="">
                         <div>
                             <h4 class="text-base mb-1 font-semibold">Push Notifications</h4>
                             <p> Get notified when surfing the site,not to miss any impotant features</p>

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

             <!-- Download-->
             <div class="grid lg:grid-cols-3 gap-8 md:mt-12">
                 <div>
                     <div uk-sticky="offset:100;bottom:true;media:992">
                         <h3 class="text-lg mb-2 font-semibold"> Downloads </h3>
                         <p> Change Download Settings </p>
                     </div>
                 </div>
                 <div class="bg-white rounded-md lg:shadow-md shadow col-span-2">

                     <div class="lg:p-6 p-4 space-y-6">

                         <div>
                             <label for="video_quality" class="text-sm"> Video download quality </label>
                             <select id="video_quality" name="video_quality"
                                 class="shadow-none selectpicker with-border ">
                                 <option value="auto">auto</option>
                                 <option selected value="360p">360p ( smallest file size )</option>
                                 <option value="480p">480p</option>
                                 <option value="720p">720p</option>

                             </select>

                         </div>
                         <div class="flex justify-between items-center space-x-2">
                             <div>
                                 <h4 class="font-semibold mb-2"> Download over Wi-Fi only</h4>
                                 <div class="text-sm"> Reduce data usage and download only Wi-Fi. </div>
                             </div>
                             <div class="switches-list -mt-8 is-large">
                                 <div class="switch-container">
                                     <label class="switch"><input type="checkbox"><span class="switch-button"></span>
                                     </label>
                                 </div>
                             </div>
                         </div>
                         <div class="flex justify-between items-center space-x-2">
                             <div>
                                 <h4 class="font-semibold mb-2">Ask before Downloading large lecture </h4>
                                 <div class="text-sm"> downloading large lecture resource </div>
                             </div>
                             <div class="switches-list -mt-8 is-large">
                                 <div class="switch-container">
                                     <label class="switch"><input type="checkbox"><span class="switch-button"></span>
                                     </label>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>
             </div>
             <!-- Secutiry-->
             <div class="grid lg:grid-cols-3 gap-8 md:mt-12">
                 <div>
                     <div uk-sticky="offset:100;bottom:true;media:992">
                         <h3 class="text-lg mb-2 font-semibold"> Security </h3>
                         <p> Secure your Account </p>
                     </div>
                 </div>
                 <div class="bg-white rounded-md lg:shadow-md shadow col-span-2">

                     <div class="lg:p-6 p-4 space-y-6">
                         <div class="flex justify-between items-center space-x-2">
                             <div>
                                 <h4 class="font-semibold mb-2"> 2FA</h4>
                                 <div class="text-sm"> Two Factor Authentication </div>
                             </div>
                             <div class="switches-list -mt-8 is-large">
                                 <div class="switch-container">
                                     <label class="switch"><input type="checkbox"><span class="switch-button"></span>
                                     </label>
                                 </div>
                             </div>
                         </div>
                         <div class="flex justify-between items-center space-x-2">
                             <div>
                                 <h4 class="font-semibold mb-2">Verify via WhatsApp </h4>
                                 <div class="text-sm">Verify your Account via WhatsApp</div>
                             </div>
                             <div class="switches-list -mt-8 is-large">
                                 <div class="switch-container">
                                     <label class="switch"><input type="checkbox"><span class="switch-button"></span>
                                     </label>
                                 </div>
                             </div>
                         </div>
                         <div class="flex justify-between items-center space-x-2">
                             <div>
                                 <h4 class="font-semibold mb-2">Social Accounts Linked </h4>
                                 <div class="text-sm">Link/Unlink your Learn Account with Social Platform</div>
                             </div>
                             <div class="switches-list mt-8 is-large mr-1">
                                 <div class="col-span-2 flex py-2 space-x-2">
                                     <img src="{{ auth()->user()->profile_foto }}" alt="{{ auth()->user()->token }}"
                                         class="h-12 rounded-full w-12">
                                     <a href="#RemoveSocialAccount-{{ auth()->user()->username }} " uk-toggle
                                         class="border font-medium px-2 py-1.5  bg-red-600 text-white-600 rounded-md self-center shadow-sm text-center text-sm">Remove</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

  <div>
                     <div uk-sticky="offset:100;bottom:true;media:992">
                         <h3 class="text-lg mb-2 font-semibold"> Danger Zone </h3>
                         <p> Delete your Account </p>
                     </div>
                 </div>
                 <div class="bg-white rounded-md lg:shadow-md shadow col-span-2">

                     <div class="lg:p-6 p-4 space-y-6">
                         <div class="flex justify-between items-center space-x-2">
                             <div>
                                 <h4 class="font-semibold mb-2"> Delete</h4>
                                 <div class="text-sm"> Once You delete your account, then all the details is no longer with us. Think twice </div>
                             </div>
                             <div class="switches-list -mt-8 is-large">
                                <button  class="border font-medium px-2 py-1.5  bg-red-500 text-gray-600 rounded-md self-center shadow-sm text-center text-sm">Delete
                         Account</button>
                             </div>
                         </div>


                     </div>
                 </div>

             </div>
         </div>

     </div>
 @endsection

