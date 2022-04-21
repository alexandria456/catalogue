@extends('layouts.shop')

@section('content')
    <div class="container">
        @foreach($categories as $category)
            <ul><li>{{$category->title}}
                    @foreach($category->children as $childrens)
                        <ul><li>{{$childrens->title}}
                                @foreach($childrens->children as $children)
                                    <ul><li>{{$children->title}}</li></ul>
                                @endforeach
                            </li></uL>
                    @endforeach
                </li></ul>
        @endforeach
    </div>
@endsection
