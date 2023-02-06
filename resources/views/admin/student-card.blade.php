@extends('layouts.admin')
@section('admin_content')



            <div class="container">


                <!--  breadcrumb -->
                <div class="breadcrumb-area py-0 md:mb-10 mb-6 justify-between sm:flex">
                    <div>
                        <h3 class="md:text-2xl text-lg font-semibold mb-2"> Students </h3>
                        <div class="breadcrumb">
                            <ul class="m-0">
                                <li>
                                    <a href="index.html"> <i class="icon-feather-home"></i> </a>
                                </li>
                                <li>
                                    <a href="index.html">Dashboard</a>
                                </li>
                                <li class="active">
                                    <a href="#">Students List</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 md:mt-0 mt-4">
                        <div class="bg-gray-100 border inline-flex p-0.5 rounded-md text-lg">
                            <a href="students.html" class="py-1.5 px-2.5 rounded-md" data-tippy-placement="top" title="Grid view">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                            </a>
                            <a href="#" class="py-1.5 px-2.5 rounded-md bg-white shadow" data-tippy-placement="top" title="List view">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                            </a>
                        </div>
                        <div class="bg-white border flex items-center overflow-hidden relative rounded-lg">
                            <i class="pl-4 -mr-2 relative uil-search"></i>
                            <input class="flex-1 max-h-9" placeholder="Search" type="text">
                        </div>
                    </div>
                </div>

                <!-- List items -->
                <div class="grid lg:grid-cols-3 gap-5" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 50">

                    <!-- items -->
                    <div class="p-5  bg-white rounded-md shadow">

                        <div class="flex items-center space-x-3 mb-4">
                            <img src="../assets/images/avatars/avatar-1.jpg" alt="" class="w-12 rounded-full">
                            <div class="flex-1 min-w-0">
                                <h5 class="text-gray-600 font-semibold text-base"> Stella Johnson </h5>
                                <div class="text-gray-600 text-sm"> info@mydomain.com </div>
                            </div>
                        </div>
                        <div class="font-medium border-t pt-2">
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="play-circle-outline" class="text-xl mr-3"></ion-icon>
                                    Courses
                                </div>
                                <div class="text-black">  24  </div>
                            </div>
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="people-outline" class="text-xl mr-3"></ion-icon>
                                    Joined at
                                </div>
                                <div class="text-black">  01/03/2021 </div>
                            </div>
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="medal-outline" class="text-xl mr-3"></ion-icon>
                                    Acheavment
                                </div>
                                <div class="text-black"> 12  </div>
                            </div>

                        </div>
                        <div class="flex mt-3 space-x-2 text-sm">
                            <a href="#" class="bg-gray-100 flex-1 py-1.5 rounded text-center font-medium"> Edit</a>
                            <a href="#" class="bg-gray-100 flex-1 py-1.5 rounded text-center font-medium"> Profile</a>
                        </div>
                    </div>

                    <!-- items -->
                    <div class="p-5  bg-white rounded-md shadow">

                        <div class="flex items-center space-x-3 mb-4">
                            <img src="../assets/images/avatars/avatar-2.jpg" alt="" class="w-12 rounded-full">
                            <div class="flex-1 min-w-0">
                                <h5 class="text-gray-600 font-semibold text-base"> John Michael </h5>
                                <div class="text-gray-600 text-sm"> info@mydomain.com </div>
                            </div>
                        </div>
                        <div class="font-medium border-t pt-2">
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="play-circle-outline" class="text-xl mr-3"></ion-icon>
                                    Courses
                                </div>
                                <div class="text-black">  38  </div>
                            </div>
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="people-outline" class="text-xl mr-3"></ion-icon>
                                    Joined at
                                </div>
                                <div class="text-black"> 08/04/2021 </div>
                            </div>
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="medal-outline" class="text-xl mr-3"></ion-icon>
                                    Acheavment
                                </div>
                                <div class="text-black"> 12  </div>
                            </div>

                        </div>
                        <div class="flex mt-3 space-x-2 text-sm">
                            <a href="#" class="bg-gray-100 flex-1 py-1.5 rounded text-center font-medium"> Edit</a>
                            <a href="#" class="bg-gray-100 flex-1 py-1.5 rounded text-center font-medium"> Profile</a>
                        </div>
                    </div>

                    <!-- items -->
                    <div class="p-5  bg-white rounded-md shadow">

                        <div class="flex items-center space-x-3 mb-4">
                            <img src="../assets/images/avatars/avatar-3.jpg" alt="" class="w-12 rounded-full">
                            <div class="flex-1 min-w-0">
                                <h5 class="text-gray-600 font-semibold text-base"> Monroe Parker </h5>
                                <div class="text-gray-600 text-sm"> info@mydomain.com </div>
                            </div>
                        </div>
                        <div class="font-medium border-t pt-2">
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="play-circle-outline" class="text-xl mr-3"></ion-icon>
                                    Courses
                                </div>
                                <div class="text-black">  42  </div>
                            </div>
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="people-outline" class="text-xl mr-3"></ion-icon>
                                    Joined at
                                </div>
                                <div class="text-black">  14/06/2021  </div>
                            </div>
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="medal-outline" class="text-xl mr-3"></ion-icon>
                                    Acheavment
                                </div>
                                <div class="text-black"> 23  </div>
                            </div>

                        </div>
                        <div class="flex mt-3 space-x-2 text-sm">
                            <a href="#" class="bg-gray-100 flex-1 py-1.5 rounded text-center font-medium"> Edit</a>
                            <a href="#" class="bg-gray-100 flex-1 py-1.5 rounded text-center font-medium"> Profile</a>
                        </div>
                    </div>

                    <!-- items -->
                    <div class="p-5  bg-white rounded-md shadow">

                        <div class="flex items-center space-x-3 mb-4">
                            <img src="../assets/images/avatars/avatar-4.jpg" alt="" class="w-12 rounded-full">
                            <div class="flex-1 min-w-0">
                                <h5 class="text-gray-600 font-semibold text-base"> Martin Gray </h5>
                                <div class="text-gray-600 text-sm"> info@mydomain.com </div>
                            </div>
                        </div>
                        <div class="font-medium border-t pt-2">
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="play-circle-outline" class="text-xl mr-3"></ion-icon>
                                    Courses
                                </div>
                                <div class="text-black">  65  </div>
                            </div>
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="people-outline" class="text-xl mr-3"></ion-icon>
                                    Joined at
                                </div>
                                <div class="text-black">  01/12/2020  </div>
                            </div>
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="medal-outline" class="text-xl mr-3"></ion-icon>
                                    Acheavment
                                </div>
                                <div class="text-black"> 18  </div>
                            </div>

                        </div>
                        <div class="flex mt-3 space-x-2 text-sm">
                            <a href="#" class="bg-gray-100 flex-1 py-1.5 rounded text-center font-medium"> Edit</a>
                            <a href="#" class="bg-gray-100 flex-1 py-1.5 rounded text-center font-medium"> Profile</a>
                        </div>
                    </div>

                    <!-- items -->
                    <div class="p-5  bg-white rounded-md shadow">

                        <div class="flex items-center space-x-3 mb-4">
                            <img src="../assets/images/avatars/avatar-5.jpg" alt="" class="w-12 rounded-full">
                            <div class="flex-1 min-w-0">
                                <h5 class="text-gray-600 font-semibold text-base"> Jesse Stevens </h5>
                                <div class="text-gray-600 text-sm"> info@mydomain.com </div>
                            </div>
                        </div>
                        <div class="font-medium border-t pt-2">
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="play-circle-outline" class="text-xl mr-3"></ion-icon>
                                    Courses
                                </div>
                                <div class="text-black">  49  </div>
                            </div>
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="people-outline" class="text-xl mr-3"></ion-icon>
                                    Joined at
                                </div>
                                <div class="text-black">  02/06/2021  </div>
                            </div>
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="medal-outline" class="text-xl mr-3"></ion-icon>
                                    Acheavment
                                </div>
                                <div class="text-black"> 326  </div>
                            </div>

                        </div>
                        <div class="flex mt-3 space-x-2 text-sm">
                            <a href="#" class="bg-gray-100 flex-1 py-1.5 rounded text-center font-medium"> Edit</a>
                            <a href="#" class="bg-gray-100 flex-1 py-1.5 rounded text-center font-medium"> Profile</a>
                        </div>
                    </div>

                    <!-- items -->
                    <div class="p-5  bg-white rounded-md shadow">

                        <div class="flex items-center space-x-3 mb-4">
                            <img src="../assets/images/avatars/avatar-1.jpg" alt="" class="w-12 rounded-full">
                            <div class="flex-1 min-w-0">
                                <h5 class="text-gray-600 font-semibold text-base"> Stella Johnson </h5>
                                <div class="text-gray-600 text-sm"> info@mydomain.com </div>
                            </div>
                        </div>
                        <div class="font-medium border-t pt-2">
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="play-circle-outline" class="text-xl mr-3"></ion-icon>
                                    Courses
                                </div>
                                <div class="text-black">  24  </div>
                            </div>
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="people-outline" class="text-xl mr-3"></ion-icon>
                                    Joined at
                                </div>
                                <div class="text-black">  01/12/2020  </div>
                            </div>
                            <div class="flex items-center py-2 space-x-3">
                                <div class="flex flex-1">
                                    <ion-icon name="medal-outline" class="text-xl mr-3"></ion-icon>
                                    Acheavment
                                </div>
                                <div class="text-black"> 13  </div>
                            </div>

                        </div>
                        <div class="flex mt-3 space-x-2 text-sm">
                            <a href="#" class="bg-gray-100 flex-1 py-1.5 rounded text-center font-medium"> Edit</a>
                            <a href="#" class="bg-gray-100 flex-1 py-1.5 rounded text-center font-medium"> Profile</a>
                        </div>
                    </div>


                </div>

                <!--  Load more -->
                <div class="flex justify-center mt-6">
                    <a href="#" class="bg-gray-100 border my-5 px-6 py-2 rounded-md shadow-sm"> Load more ..</a>
                </div>

            </div>



@endsection
