 @extends('layouts.main')
 @section('main')
 <div class="container">
     <div class="max-w-3xl mx-auto">

         <h1 class="font-semibold mb-4 text-lg"> First Time Account Setup Only </h1>


         <div class="bg-white rounded-md shadow-md mt-4">

             <ul class=" space-y-0 rounded-md mt-2" uk-accordion>
                 <li class="uk-open">
                     <div class="uk-accordion-title border-b py-4 px-6" href="#">
                         <div class="flex items-center text-base font-semibold">
                             Confirm Details</div>
                     </div>
                     <div class="uk-accordion-content py-6 px-8 mt-0 border-b">

                         <div class="md:flex justify-between items-center">
                             <div class="md:w-5/12 md:order-1">
                                 <img src="{{$user['picture']}}" class="lg:w-auto w-44 mx-auto">
                             </div>
                             <div class="md:w-6/12 md:text-left text-center">
                                 <div class="md:text-3xl text-xl font-semibold mb-7">Hi {{$user['given_name']}} Welcome :) </div>
                             </div>
                         </div>


                         <div class="">

                             <Form method="POST" action="{{route('PostGoogleCallback')}}">
                                 <table class="table table-hover table-bordered">
                                     <tbody>
                                        @csrf
                                      <x-input hidden value="{{$user['picture']}}" name="picture"></x-input>

                                         <tr>
                                             <td>ID</td>
                                             <td><input class="form-control" value="{{$user['sub']}}" type="text"
                                                     name="sid" readonly></td>
                                         </tr>
                                         <tr>
                                             <td>First Name</td>
                                             <td><input class="form-control" value="{{$user['given_name']}}" type="text"
                                                     name="fname" readonly></td>
                                         </tr>
                                         <tr>
                                             <td>Last Name</td>
                                             <td><input class="form-control" value="{{$user['family_name']}}" type="text"
                                                     name="lname" readonly></td>

                                         </tr>
                                         <tr>
                                             <td>Email</td>
                                             <td><input class="form-control" value="{{$user['email']}}" type="text"
                                                     name="email" readonly></td>

                                         </tr>
                                         <tr>
                                             <td>Password</td>
                                             <td><input class="with-border" value="" type="text"
                                                     placeholder="Enter Password" name="password" required></td>

                                         </tr>
                                     </tbody>
                                 </table>
                                 <div class="grid grid-cols-2 md:gap-6 gap-3 md:mt-10 mt-5">
                                     <button type="submit" name="addgoogleuser"
                                         class="bg-blue-200 flex font-medium items-center justify-center py-3 rounded-md">Continue</button>

                                 </div>

                             </Form>
                         </div>



                     </div>
                 </li>


             </ul>

         </div>

         <div class="grid grid-cols-2 md:gap-6 gap-3 md:mt-10 mt-5">
             <a class="bg-gray-200 flex font-medium items-center justify-center py-3 rounded-md" href="/Auth/Login">
                 <i class="icon-feather-chevron-left mr-1"></i>
                 <span class="md:block hidden">Back</span><span class="md:hidden block">Back</span>
             </a>

         </div>

     </div>


 </div>
 @endsection
