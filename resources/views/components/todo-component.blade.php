@props(['todo'])

<a href="/todo/{{$todo->id}}">
<div class="border-spacing-10 border-2 p-4 gap-2 rounded-lg h-full flex flex-col justify-center items-center
@if ($todo->complete==1)
border-green-500
@else
border-red-500
@endif
">
    <h3>{{ $todo->title }}</h3>
    <p><i class="fa-solid fa-tags"></i>&nbsp;{{ $todo->tags }}</p>

    @if ($todo->complete == 1) 
    <i class="fa-solid fa-check"></i>
    @else 
    <i class="fa-solid fa-x"></i>
    @endif
</div>
</a>