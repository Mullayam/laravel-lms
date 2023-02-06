@extends('layouts.admin')
@section('admin_content')
    <div class="container">

        <!--  breadcrumb -->
        <div class="breadcrumb-area py-0 md:mb-10 mb-6 justify-between flex">
            <div>
                <h3 class="md:text-2xl text-lg font-semibold mb-2"> Students </h3>
                <div class="breadcrumb">
                    <ul class="m-0">
                        <li>
                            <a href=""> <i class="icon-feather-home"></i> </a>
                        </li>
                        <li>
                            <a href="/admin/">Dashboard</a>
                        </li>
                        <li class="active">
                            Students List
                        </li>
                    </ul>
                </div>
            </div>
            <div class="inline-flex p-0.5 rounded-md text-lg self-center">
                <a href="/admin/add/student" class="bg-blue-100 border my-4 px-2 py-2 rounded-md shadow-sm"> Add New</a>

            </div>
        </div>

        <div class="bg-white shadow rounded-md overflow-auto">
            @if ($users->count() === 0)
               <div class="justify-between p-5 sm:flex">
                        <h3 class="md:-mb-2 mb-2 capitalize font-semibold text-xl"> Students list </h3>
                        <div class="bg-white border flex items-center overflow-hidden relative rounded-lg">
                            <i class="pl-4 -mr-2 relative uil-search"></i>
                            <input class="flex-1 max-h-9" placeholder="Search" type="text">
                        </div>
                </div>
                <div class="justify-center py-5 sm:flex">
                        <h3 class="md:-mb-2 mb-2 capitalize font-semibold text-xl">No User Found</h3>

                </div>
            @else
                <div>
                    <div class="justify-between p-5 sm:flex">
                        <h3 class="md:-mb-2 mb-2 capitalize font-semibold text-xl"> Students list </h3>
                        <div class="bg-white border flex items-center overflow-hidden relative rounded-lg">
                            <i class="pl-4 -mr-2 relative uil-search"></i>
                            <input class="flex-1 max-h-9" placeholder="Search" type="text">
                        </div>
                    </div>

                    <p class="font-medium mb-5 px-5 text-gray-600"> Showing {{ $users->currentPage() * 1 }} to
                        {{ $users->currentPage() * 15 }} of {{ $users->total() }} entries </p>

                    <table class="sm:table-fixed w-full border-b">
                        <thead>
                            <tr class="bg-gray-50 sm:text-base text-sm text-black border-b">
                                <th class="w-1/12 p-3 font-medium">No</th>
                                <th class="w-4/12 p-3 font-medium">Name</th>
                                <th class="w-2/12 p-3 font-medium text-right">Enrolled</th>
                                <th class="w-2/12 p-3 font-medium text-right">Purchased</th>
                                <th class="w-2/12 p-3 font-medium text-right">Joined at</th>
                                <th class="w-2/12 p-3 font-medium text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-3 md:px-6"> 1 </td>
                                <td class="flex items-center space-x-3 p-3">
                                    <img src="../assets/images/avatars/avatar-1.jpg" alt=""
                                        class="w-10 h-10 rounded-full sm:block hidden">
                                    <div class="flex-1 min-w-0">
                                        <div class="font-semibold"> Stella Johnson </div>
                                        <div class="text-sm text-gray-600"> info@hotmail.com </div>
                                    </div>
                                </td>
                                <td class="p-3 text-right"> 12 </td>
                                <td class="p-3 text-right"> $ 1,280 </td>
                                <td class="p-3 text-right"> 12/02/2021</td>
                                <td class="p-3 text-right">
                                    <a href="#" class="hover:bg-gray-200 p-1.5 inline-block rounded-full"
                                        aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" class="w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                                            </path>
                                        </svg>
                                    </a>
                                    <div class="bg-white w-44 shadow-lg border border-gray-100 p-2 mt-12 rounded-md text-gray-500 hidden text-left font-medium"
                                        uk-drop="pos: bottom-right">
                                        <ul class="space-y-1">
                                            <li>
                                                <a href="#" class="px-3 py-2 rounded-md block hover:bg-gray-100"> View
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="px-3 py-2 rounded-md block hover:bg-gray-100"> Edit
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="-mx-2 my-2 dark:border-gray-800">
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="px-3 py-2 rounded-md block text-red-500 hover:bg-red-100 hover:text-red-500 ">
                                                    Delete </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="flex items-center justify-between sm:flex-row flex-col mt-2 p-6">
                        <p class="mb-3">Showing {{ $users->currentPage() * 1 }} to {{ $users->currentPage() * 15 }} of
                            {{ $users->total() }} entries</p>
                        <div class="border divide-x flex font-medium items-center rounded-md text-gray-600">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </div>
@endsection
