@extends('layouts.shop')

@section('content')
    <div class="container">
        <ul class="list-group">
            @foreach($categories as $category)
                <li>
                    {{ $category->title }}
                    @if(($category->children))
                        @include('.categories._index',['children' => $category->children])
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
@endsection
