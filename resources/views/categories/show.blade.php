@extends('layouts.shop')

@section('content')
    <div class="container">
        @foreach($categoriesflat as $i => $category)
            <small>{{ $category->count()}}</small><br>
            {{ $category->title }}<br>

        @endforeach
    </div>
@endsection
