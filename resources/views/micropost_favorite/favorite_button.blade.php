@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- お気に入りを外すボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-warning btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- お気に入りするボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-default btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif