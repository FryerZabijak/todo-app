@props(['todo'])

<a href="/todo/{{$todo->id}}">
<div class="border-spacing-10 border-2 p-4 gap-2 rounded-lg h-full
@if ($todo->complete==1)
border-green-500
@else
border-red-500
@endif
">
    <h3>{{ $todo->title }}</h3>
    <p>{{ $todo->tags }}</p>
    <input type="checkbox" 
    @if ($todo->complete == 1) 
    checked 
    @endif 
    onclick="return false">
</div>
</a>