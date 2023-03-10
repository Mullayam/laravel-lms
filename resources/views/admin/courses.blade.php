@extends('layouts.admin')
@section('admin_content')
          <div class="container md:space-y-10 space-y-6">

                <!--  breadcrumb -->
                <div class="breadcrumb-area py-0 justify-between sm:flex">
                    <div>
                        <h3 class="md:text-2xl text-lg font-semibold mb-2"> Courses </h3>
                        <div class="breadcrumb">
                            <ul class="m-0">
                                <li>
                                    <a href="/"> <i class="icon-feather-home"></i> </a>
                                </li>
                                <li>
                                    <a href="/">Dashboard</a>
                                </li>
                                <li class="active">
                                    <a href="#">Course List</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-gray-100 border inline-flex p-0.5 rounded-md text-lg self-center">
                        <a href="#" class="py-1.5 px-2.5 rounded-md bg-white shadow" data-tippy-placement="top" title="Grid view">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        </a>
                        <a href="courses-card.html" class="py-1.5 px-2.5 rounded-md" data-tippy-placement="top" title="List view">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- summery -->
                <div class="grid md:grid-cols-4 grid-cols-2 gap-5"  uk-scrollspy="target: > div; cls: uk-animation-scale-up; delay: 50">
                    <div class="bg-white flex p-4 rounded-md shadow sm:p-5 border-t-4 border-green-500">
                        <div class="flex-1 min-w-0">
                            <div class="text-sm"> Active Courses </div>
                            <div class="font-semibold md:text-2xl text-xl mt-3"> {{ \App\Models\Course::where("is_active",'=',1)->count() }} </div>
                        </div>
                        <ion-icon name="checkmark-circle" class="text-3xl text-green-500"></ion-icon>
                    </div>
                    <div class="bg-white flex p-4 rounded-md shadow sm:p-5 border-t-4 border-yellow-500">
                        <div class="flex-1 min-w-0">
                            <div class="text-sm"> Featured Courses </div>
                            <div class="font-semibold md:text-2xl text-xl mt-3">  {{ \App\Models\Course::where("is_featured",'=',1)->count() }} </div>
                        </div>
                        <ion-icon name="bookmark" class="text-3xl text-yellow-500"></ion-icon>
                    </div>
                    <div class="bg-white flex p-4 rounded-md shadow sm:p-5 border-t-4 border-blue-500">
                        <div class="flex-1 min-w-0">
                            <div class="text-sm"> Total Value Courses </div>
                            <div class="font-semibold md:text-2xl text-xl mt-3">  {{ floor(\App\Models\Course::count()*29.2 )}} </div>
                        </div>
                        <ion-icon name="save" class="text-3xl text-blue-500"></ion-icon>
                    </div>
                    <div class="bg-white flex p-4 rounded-md shadow sm:p-5 border-t-4 border-red-500">
                        <div class="flex-1 min-w-0">
                            <div class="text-sm"> Disabled Courses </div>
                            <div class="font-semibold md:text-2xl text-xl mt-3">  {{$disabled}} </div>
                        </div>
                        <ion-icon name="stop" class="text-3xl text-red-500"></ion-icon>
                    </div>
                </div>

                <div class="bg-white shadow rounded-md overflow-auto">

                    <h3 class="px-5 pt-5 font-semibold text-lg capitalize"> Course list  </h3>

                    <div class="grid grid-cols-5 gap-5 p-5 align-items-end font-medium">

                        <!-- Course Categories  -->
                        <div>
                            <label for="category" class="font-medium">Categories</label>
                            <select class="selectpicker border rounded-md is-small" name="category" id="category">
                                <option value="all" >All</option>
                                <optgroup label="Web Design">
                                    <option value="3">Responsive Design</option>
                                    <option value="4">WordPress Theme</option>
                                    <option value="5">Bootstrap</option>
                                    <option value="6">HTML &amp; CSS</option>
                                </optgroup>
                                <optgroup label="Graphic Design">
                                    <option value="9">Photoshop</option>
                                    <option value="10">Adobe Illustrator</option>
                                    <option value="11">Drawing</option>
                                    <option value="13">Digital Art</option>
                                </optgroup>
                                <optgroup label="Frontend Development">
                                    <option value="40">Frontend design</option>
                                </optgroup>
                            </select>
                        </div>

                        <!-- Course Instructors  -->
                        <div>
                            <label for="instructor_id" class="font-medium">Instructor</label>
                            <select class="selectpicker border rounded-md is-small" name="instructor_id" id="instructor_id">
                                <option value="all">All</option>
                                <option value="1">Martin Gray</option>
                                <option value="2">Jesse Emily</option>
                                <option value="3">Alex William</option>
                                <option value="4">John Stella</option>
                                <option value="5">Emily Jesse</option>
                            </select>
                        </div>

                        <!-- Course Status -->
                        <div>
                            <label for="status" class="font-medium">Status</label>
                            <select class="selectpicker border rounded-md is-small" name="status" id="status">
                                <option value="all" >All</option>
                                <option value="active" selected>Active</option>
                                <option value="pending">Pending</option>
                            </select>
                        </div>

                        <!-- Course Price -->
                        <div>
                            <label for="price" class="font-medium">Price</label>
                            <select class="selectpicker border rounded-md is-small" name="price" id="price">
                                <option value="all" >All</option>
                                <option value="free" >Free</option>
                                <option value="paid" selected>Paid</option>
                            </select>
                        </div>

                        <div>
                            <button type="button" class="bg-blue-600 px-4 py-2.5 rounded-md self-center text-center text-white w-full">Filter </button>
                        </div>

                    </div>

                    <div class="items-end justify-between p-5 sm:flex -mt-2 mb-2">
                        <h3 class="font-medium  text-gray-600"> Showing 10 to 20 of 620 entries </h3>
                        <div class="bg-white border flex items-center overflow-hidden relative rounded-lg">
                            <i class="pl-4 -mr-2 relative uil-search"></i>
                            <input class="flex-1 max-h-10" placeholder="Search" type="text">
                        </div>
                    </div>

                    <table class="sm:table-fixed w-full border-b">
                        <thead>
                            <tr class="border-b bg-gray-50 text-base text-black">
                                <th class="w-1/12 p-3 font-medium">No</th>
                                <th class="w-6/12 p-3 font-medium">Title</th>
                                <th class="w-2/12 p-3 font-medium text-right">Category</th>
                                <th class="w-2/12 p-3 font-medium text-right">Enrollment</th>
                                <th class="w-2/12 p-3 font-medium text-right">Price</th>
                                <th class="w-2/12 p-3 font-medium text-right">Status</th>
                                <th class="w-2/12 p-3 font-medium text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>{{$i=1}}
                            @foreach ($courses as $course)
 <tr>
                                <td class="p-3"> {{$i++}}</td>
                                <td class="flex items-center space-x-3 p-3 pr-0 w-52 sm:w-auto">
                                    <img src="{{$course->thumbnail}}" alt="" class="h-12 w-16 -ml-3 object-cover rounded-md md:block hidden">
                                    <div class="flex-1 min-w-0">
                                        <div class="font-semibold mb-1 line-clamp-2"> {{$course->course_name}}</div>
                                        <a href="#" class="text-gray-600 text-sm font-medium hover:underline"> {{$course->add_by}} </a>
                                    </div>
                                </td>
                                <td class="py-3 text-right truncate"> {{$course->checkEnroll}} </td>
                                <td class="py-3 text-right"> {{$course->checkEnroll->count()}}</td>
                                <td class="py-3 text-right"> Rs.{{$course->price}}</td>
                                <td class="py-3 text-right">
                                    @if($course->is_active)
                                         <span class="bg-green-100 font-semibold px-2.5 py-1 rounded-md text-sm text-green-500">
                                         Active
                                        </span>
                                    @else
                                         <span class="bg-red-300 font-semibold px-2.5 py-1 rounded-md text-sm text-red-500">
                                         UnActive
                                        </span>
                                    @endif

                                </td>
                                <td class="p-3 text-right">
                                    <a  class="hover:bg-gray-200 p-1.5 inline-block rounded-full" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                                        </svg>
                                    </a>
                                    <div class="bg-white w-44 shadow-lg border border-gray-100 p-2 mt-12 rounded-md text-gray-500 hidden text-left font-medium"
                                    uk-drop="pos: bottom-right">
                                        <ul class="space-y-1">
                                        <li>
                                            <a href="{{route('AddSection',['course_id'=>$course->id])}}" class="px-3 py-2 rounded-md block hover:bg-gray-100"> Section/Videos </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('editCourse',['course_id'=>$course->id])}}" class="px-3 py-2 rounded-md block hover:bg-gray-100"> Edit </a>
                                        </li>
                                        <li>
                                            <hr class="-mx-2 my-2 dark:border-gray-800">
                                        </li>
                                        <li>
                                            <a href="{{route('editCourse',['course_id'=>$course->id])}}" class="px-3 py-2 rounded-md block text-red-500 hover:bg-red-100 hover:text-red-500 "> Delete </a>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="flex items-center justify-between sm:flex-row flex-col mt-2 p-6">
                        <p class="mb-3"> Showing 10 to 20 of 620 entries </p>
                        <div class="border divide-x flex font-medium items-center rounded-md text-gray-600">
                             {{$courses->links()}}

                        </div>
                    </div>

                </div>

            </div>
@endsection
