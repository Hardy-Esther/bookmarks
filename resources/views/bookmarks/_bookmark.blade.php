
<li id="status-{{ $bookmark->id }}">
    <a href="{{ route('users.show', $user->id )}}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar"/>
    </a>
    <span class="user">
        <a href="{{ route('users.show', $user->id )}}">{{ $user->name }}</a>
    </span>
    <span class="timestamp">
        {{ $bookmark->created_at->diffForHumans() }}
    </span>
    <span class="content"><a target="_blank" href="{{ $bookmark->url }}">{{ $bookmark->name }}</a></span>
    <span class="content">{{ $bookmark->content }}</span>

    @can('destroy', $bookmark)
        <form action="{{ route('bookmarks.destroy', $bookmark->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-sm btn-danger status-delete-btn">删除</button>
        </form>
    @endcan
</li>