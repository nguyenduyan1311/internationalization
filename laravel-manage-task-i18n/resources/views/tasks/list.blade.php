@extends('home')
@section('title', __('messages.task_list'))

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h3>{{__('messages.task_list')}}</h3>
            </div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        {{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('messages.title') }}</th>
                    <th scope="col">{{ __('messages.content') }}</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($tasks) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($tasks as $key => $task)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->content }}</td>
                            <td><a href="{{ route('tasks.edit', $task->id) }}">{{ __('messages.update') }}</a></td>
                            <td><a href="{{ route('tasks.destroy', $task->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">{{__('messages.delete')}}</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('tasks.create') }}">{{__('messages.add_new')}}</a>
        </div>
    </div>
@endsection
