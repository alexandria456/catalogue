<div>
    {{ $category->title }} ({{ $category->id }})

    @foreach ($category->children as $child)
        <div style="margin-left: 20px;">
            {{ $child->title }} ({{ $child->id }})
        </div>
    @endforeach
</div>
