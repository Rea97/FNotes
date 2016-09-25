
<ul class="pagination">
@if ($previous)
    <li class="waves-effect"><a href="{{ $previous }}"><i class="material-icons">keyboard_arrow_left</i></a></li>
@else
    <li class="disabled"><a href="#!"><i class="material-icons">keyboard_arrow_left</i></a></li>
@endif
@foreach ($links as $page => $url)
    @if ($page == $current)
        <li class="active"><a href="#">{{ $page }}</a></li>
    @elseif($url)
        <li class="waves-effect"><a href="{{ $url }}">{{ $page }}</a></li>
    @else
        <li class="disabled"><a href="#!"><i class="material-icons">more_horiz</i></a></li>
    @endif
@endforeach
@if ($next)
    <li class="waves-effect"><a href="{{ $next }}"><i class="material-icons">keyboard_arrow_right</i></a></li>
@else
    <li class="disabled"><a href="#!"><i class="material-icons">keyboard_arrow_right</i></a></li>
@endif
</ul>