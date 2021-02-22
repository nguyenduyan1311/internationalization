@extends('home')
@section('title', __('messages.update_task'))

@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>{{__('messages.update_task')}}</h1>
            </div>
            <div class="col-12">
                <form method="post" action="{{ route('tasks.update', $task->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>{{__('messages.title')}}</label>
                        <input type="text" class="form-control" name="title" value="{{ $task->title }}" required>
                    </div>
                    <div class="form-group">
                        <label>{{__('messages.content')}}</label>
                        <input type="text" class="form-control" name="content" value="{{ $task->content }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('messages.update')}}</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">{{ __('messages.cancel') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
