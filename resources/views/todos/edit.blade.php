@extends('layouts.app')
@section('content')
    <h1 class="text-center m-5">
        Update Todo
    </h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    Edit Todo
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/todos/{{ $todo->id }}/update-todo" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name"
                                value="{{ $todo->name }}">
                        </div>
                        <div class="form-group">
                            <textarea name="description" placeholder="description" cols="10" rows="5"
                                class="form-control">{{ $todo->description }}</textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Update Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
