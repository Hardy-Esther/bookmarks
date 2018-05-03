<form action="{{ route('bookmarks.store') }}" method="POST">
    @include('shared._errors')
    {{ csrf_field() }}
    <input class="form-control" name="name" placeholder="书签名称" value="{{ old('name') }}"/>
    <input class="form-control" name="url" placeholder="书签网址" value="{{ old('url') }}"/>
    <textarea class="form-control" rows="3" placeholder="书签描述" name="content">{{ old('content') }}</textarea>
    <button type="submit" class="btn btn-primary pull-right">创建</button>
</form>