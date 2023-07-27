<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function store(TodoRequest $request)
    {
        $test = $request->only(['content']);
        Todo::create($test);

        return redirect('/')->with('message', 'Todoを作成しました');
    }

    public function update(TodoRequest $request)
    {
        $tan = $request->only(['content']);
        Todo::find($request->id)->update($tan);

        return redirect('/')->with('message', 'Todoを更新しました');
    }

    public function destroy(Request $request)
    {
        Todo::find($request->id)->delete();

        return redirect('/')->with('message', 'Todoを削除しました');
    }
}
