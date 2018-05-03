<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'    => 'required|max:50',
            'url'     => 'required|max:150|url',
            'content' => 'required|max:200',
        ]);

        Auth::user()->bookmarks()->create([
            'name'    => $request->get('name'),
            'url'     => $request->get('url'),
            'content' => $request->get('content'),
        ]);

        session()->flash('success', '书签已收录成功！');

        return redirect()->back();
    }

    public function destroy(Bookmark $bookmark)
    {
        $this->authorize('destroy', $bookmark);
        $bookmark->delete();
        session()->flash('success', '书签已被成功删除！');
        return redirect()->back();
    }
}
