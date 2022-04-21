
    <ul>
        @foreach($children as $child)
            <li>
                {{ $child->title }}
                @if(count($child->children))
                    @include('categories._index',['children' => $child->children])
                @endif
            </li>
        @endforeach
    </ul>

