@extends('layouts.shop')

@section('content')
    <div class="container">
        <ul class="list-group">
            @foreach($categories as $category)
                <li class="list-group-item">
                    {{ $category->title }}
                    @if(count($category->children))
                        @include('.categories._index',['children' => $category->children])
                    @endif
                </li>
                @break
            @endforeach
        </ul>
    </div>
@endsection
