
<form action="{{ route('bookmarks.store') }}" method="POST">
    @include('shared._errors')
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">书签名称</label>
        <input
                class="form-control"
                name="name"
                placeholder="请输入书签名称"
                value="{{ old('name') }}"
        />
    </div>
    <div class="form-group">
        <label for="name">书签网址</label>
        <input
                class="form-control"
                name="url"
                placeholder="请输入完整的网址"
                value="{{ old('url') }}"
        />
    </div>
    <div class="form-group">
        <label for="name">书签描述</label>
        <textarea
                class="form-control"
                rows="3"
                placeholder="请输入对书签的简要描述"
                name="content"
        >{{ old('content') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary pull-right">创建</button>
</form>