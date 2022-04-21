@extends('layouts.shop')

@section('content')
    <div class="container">

        @foreach ($categories as $category)
           {{$category->title}}<br>
                   @foreach($category->children as $childrens)
                       {{$childrens->title}}
                   @endforeach

        @endforeach
    </div>
@endsection
