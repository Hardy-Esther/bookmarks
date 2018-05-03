
@if (count($feed_items))
    <ol class="statuses">
        @foreach ($feed_items as $bookmark)
            @include('bookmarks._bookmark', ['user' => $bookmark->user])
        @endforeach
        {!! $feed_items->render() !!}
    </ol>
@endif