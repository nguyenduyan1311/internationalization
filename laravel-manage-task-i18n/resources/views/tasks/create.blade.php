@extends('home')
@section('title', 'Thêm mới công việc')

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới công việc</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('tasks.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Công việc</label>
                        <input type="text" class="form-control" name="title"  placeholder="Enter title" required>
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <input type="text" class="form-control" name="content" placeholder="Enter content" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
