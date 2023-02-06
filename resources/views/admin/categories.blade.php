@extends('layouts.admin')
@section('admin_content')
         <div class="container">

                <div class="flex justify-between items-baseline">
                    <h1 class="font-semibold lg:mb-6 mb-3 md:text-2xl text-xl"> Categories</h1>
                    <a href="#" class="bg-white border p-2 px-4 rounded-md"  uk-toggle="target: #create_category"> Create  </a>
                </div>

                <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small" uk-grid="masonry: true">

                    <!--Development -->
                    <div>
                        <div class="bg-white shadow rounded-md pb-5 self-start overflow-hidden uk-transition-toggle">
                            <div class="flex items-center py-3 px-5 border-b">
                                <h4 class="font-semibold text-base flex-1"> All </h4>
                                <div class="-mr-2 text-lg flex uk-transition-slide-right-small">
                                    <ion-icon name="create-outline" class="rounded-full p-1.5 hover:bg-gray-100"></ion-icon>
                                    <ion-icon name="close" class="rounded-full p-1.5 hover:bg-red-100 text-red-500"></ion-icon>
                                </div>
                            </div>
                            <div uk-sortable="group: sortable-group ; cls-custom: transform -rotate-3 shadow-xl" class="font-medium text-sm p-4">
                                @foreach ($categories as $category )
                                    <div class="bg-blue-50 border border-blue-100 flex items-center mb-2 rounded-md">
                                        <span class="uk-sortable-handle py-2 px-4 text-base"> <i class="icon-feather-move"></i> </span>
                                       {{$category->name}}
                                        <ion-icon name="close" data-catid="{{$category->id}}" id="DeleteCategory" class="p-2 ml-auto uk-transition-slide-right-small"></ion-icon>
                                    </div>
                                @endforeach
                               
                                 
                            </div>
                        </div>
                    </div>

                
                    
                </div>
              
             


                <!-- create category model-->
                <div id="create_category" uk-modal>
                    <div class="uk-modal-dialog uk-modal-body rounded-md shadow-2xl">
                       <button class="uk-modal-close-default hover:bg-gray-200 p-2 rounded-full m-3" type="button" uk-close></button>
                       <h2 class="uk-modal-title font-semibold mb-2"> Category add form</h2>

                     <form id="CateogyrForm">
                     @csrf
                       <div class="pt-5 space-y-4">
                           <div>
                               <label for="category_info"> Category Code  </label>
                               <input type="text" placeholder="" id="category_info" class="shadow-none with-border">
                           </div>
                           <div>
                               <label for="category_info"> Category title <span class="text-red-600">*</span> </label>
                               <input type="text" placeholder="" id="category_info" class="shadow-none with-border">
                           </div>
                           <div>
                               <label for="category_info"> Type  </label>
                               <select id="category_info" name="category_info" class="shadow-none selectpicker with-border ">
                                   <option>None</option>
                                   <option value="courses">Courses</option>
                                   <option value="books">Books</option>
                                   <option value="articles">Articles</option>
                                   <option value="episodes">Episodes</option> 
                               </select> 
                           </div>
                           <button type="button" class="bg-blue-500 font-semibold w-full px-10 py-2.5 rounded-md text-white">Submit</button>
                       </div>
                       </form>

                    </div>
                </div>

                
 
            </div>
@endsection