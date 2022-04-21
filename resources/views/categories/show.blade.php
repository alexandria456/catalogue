@extends('layouts.shop')

@section('content')
    <div class="container">
        @foreach($categories as $i => $category)
            <small>{{ $category->count()}}</small><br>
            {{ $category->title }}
        @endforeach
    </div>
@endsection
