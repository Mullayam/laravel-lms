@props([
    'bg' => 'red-500',
    'type' => 'text',
    'text'=>'Success',


])
                <div class="bg-{{$bg}} border p-3 relative rounded-md uk-alert" uk-alert="">
                    <button
                        class="uk-alert-close absolute bg-gray-100 px-2 bg-opacity-20 m-5 p-0.5 pb-0 right-0 rounded text-gray-200 text-xl top-0">
                        <i class="icon-feather-x"></i>
                    </button>
                    <h3 class="text-lg font-semibold text-white">{{$text}}</h3>
                    <p class="text-white text-opacity-75">{{$slot}}</p>
                </div>
                {{-- <span onload="UIkit.notification({message: '<div class=\'flex\'> <i class=\'icon-feather-check mr-2\'></i> <div class=\'text-red-600 mr-4\'>  Message </div> with an icon </div>'})"></span> --}}

