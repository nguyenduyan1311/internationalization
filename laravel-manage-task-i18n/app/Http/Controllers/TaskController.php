<?php

namespace App\Http\Controllers;

use App\Models\Task;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        $tasks = Task::all();
        return view('tasks.list', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function store(Request $request)
    {
        $task = new Task();
        $task->title     = $request->input('title');
        $task->content    = $request->input('content');
        $task->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới công việc thành công');
        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('tasks.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->title     = $request->input('title');
        $task->content    = $request->input('content');
        $task->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật công việc thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa công việc thành công');
        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('tasks.index');
    }

}
