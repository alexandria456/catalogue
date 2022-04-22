<ul>
    @foreach($children as $child)
        <li>
            {{ $child->title }}
            @if(count($child->children))
                @include('categories.getchild',['children' => $child->children])
            @endif
        </li>
    @endforeach
</ul>

