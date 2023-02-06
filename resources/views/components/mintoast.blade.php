@props([
    'color'=>'blue',
    'text'=>'Please Wait...',
    'size'=>'',
    'position'=>'top-right'
])
<span {{$attributes}} onclick="UIkit.notification({message:'<div class=\'flex\'> <div class=\'text-blue-600 text-{{$size}}xl mr-4\'> {{$text}}</div></div>',pos: '{{$position}}',})">{{$slot}}</span>
