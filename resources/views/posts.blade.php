<div>
    @foreach ($posts as $item)
        {{ $item->title }}
        {{ $item->active }} <br>
    @endforeach
</div>
{!! $posts->appends(request()->input())->links()  !!}