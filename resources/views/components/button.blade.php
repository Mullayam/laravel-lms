@props([
    'type'=>'button',
    'class'=>'',
    'bg'=>'blue-600',
    'text'=>'white',
    'mesg'="Please Wait..."
    'onclick'=>"UIkit.notification({message: '<div class=\'flex\'><div class=\'text-{{$bg}} mr-4\'> {{$mesg}} </div></div>'})",
])   
                <button 
                    {{ $attributes->merge(['class' => 'bg-{{$bg}} font-semibold p-2 mt-5 rounded-md text-center text-{{$text}} w-full ']) }}
                    type="{{type}}"
                    onclick="{{$onclick}}">
                   {{ $slot }}
                </button>
