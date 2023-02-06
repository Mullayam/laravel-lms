@extends('layouts.admin')
@push('title')
    <title>Books</title>
@endpush
@section('extra_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" />
    
@endsection
@section('admin_content')
    <div class="container">

        <!--  breadcrumb -->
        <div class="breadcrumb-area py-0 md:mb-10 mb-5">
            <h3 class="md:text-2xl text-lg font-semibold mb-2"> Books </h3>
            <div class="breadcrumb">
                <ul class="m-0">
                    <li>
                        <a href="index.html"> <i class="icon-feather-home"></i> </a>
                    </li>
                    <li>
                        <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="#">Books List</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="bg-white shadow rounded-md overflow-auto">

            <h3 class="px-5 pt-5 font-semibold text-lg capitalize"> Books list </h3>

            <div class="items-end justify-between p-5 sm:flex -mt-2 mb-2">
                <h3 class="font-medium  text-gray-600 mb-2"> Showing 10 to 20 of {{ $books->count() }} entries </h3>
                <div class="bg-white border flex items-center overflow-hidden relative rounded-lg">
                    <i class="pl-4 -mr-2 relative uil-search"></i>
                    <input class="flex-1 max-h-10" placeholder="Search" type="text">
                </div>
            </div>


            <table class="sm:table-fixed w-full border-b" id="BooksTable">
                <thead>
                    <tr class="bg-gray-50 sm:text-base text-sm text-black border-b">
                        <th class="w-1/12 p-3 font-medium">No</th>
                        <th class="w-5/12 p-3 font-medium">Name</th>
                        <th class="w-2/12 p-3 font-medium text-right">Pages</th>
                        <th class="w-2/12 p-3 font-medium text-right">Size</th>
                        <th class="w-2/12 p-3 font-medium text-right">Publish</th>
                        <th class="w-2/12 p-3 font-medium text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td class="p-3 md:px-6"> {{ $book->id }} </td>
                            <td class="flex items-center sm:space-x-3 p-3 w-48 sm:w-auto">
                                <img src="{{ $book->img }}" alt="" class="w-14 h-16 rounded sm:block hidden">
                                <div class="flex-1 min-w-0">
                                    <div class="font-semibold line-clamp-1"> {{ $book->name }} </div>
                                    <div class="flex sm:space-x-2 text-gray-600 text-sm">
                                        <div class="sm:block hidden"> {{ $book->subject }} </div>
                                        <div class="font-medium hover:underline"> Stella Johnson </div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3 text-right"> {{ $book->pages }} </td>
                            <td class="p-3 text-right"> {{ $book->size }}</td>
                            <td class="p-3 text-right">
                                <div class="switch-container">
                                    <label class="switch"><input type="checkbox" checked><span
                                            class="switch-button -ml-9 -mt-2"></span> </label>
                                </div>
                            </td>
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
                    @endforeach
                </tbody>
            </table>




        </div>

    </div>
@endsection
@section('extra_scripts')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#BooksTable').DataTable();
            $('#BooksTable_info').removeClass('dataTables_info');
            $('#BooksTable_info').addClass('flex items-center justify-between sm:flex-row flex-col mt-2 p-6 mb-3')
            $('.paginate_button ').addClass('py-2 px-5').removeClass('paginate_button ')
            $('.current').addClass('py-2 px-5 bg-blue-400').removeClass('paginate_button ')
            $('.paginate_button ').click(function() {
                $('#BooksTable_info').removeClass('dataTables_info');
                $('#BooksTable_info').addClass(
                    'flex items-center justify-between sm:flex-row flex-col mt-2 p-6 mb-3')
                $('.paginate_button ').addClass('py-2 px-5').removeClass('paginate_button ')
                $('.current').addClass('py-2 px-5 bg-blue-400').removeClass('paginate_button ')
            })
        });
    </script>
@endsection
