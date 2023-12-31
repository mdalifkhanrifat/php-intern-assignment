@extends('layout.master')
@section('content')

    <div class="container-lg" style="text-align: center; padding-top: 3%;">
        <div class="table-responsive">

            <div class="table-wrapper">
                <div class="table-title">

                    @if ($todo == null)
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form class="form-inline" role="form" method="POST" action="{{ route('todo.store') }}">
                            @csrf

                            <div class="row" style="width: 100%; padding: 0%; margin: 0%; border: 0%;">
                                <div class="form-group col-md-3">
                                    <input style="width: 100%;" type="text" class="form-control" id="title"
                                        placeholder="Enter title" name="title" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <input style="width: 100%;" type="text" class="form-control" id="description"
                                        placeholder="Description" name="description">
                                </div>
                                <div class="form-group col-md-3">
                                    <select name="is_completed" id="" style="width: 100%;" class="form-control"
                                        required>
                                        <option value="">Is Completed</option>
                                        <option style="text-align: center" value="YES">Yes</option>
                                        <option style="text-align: center" value="NO">N0</option>
                                    </select>
                                </div>
                                <button style="width: 20%; " type="submit" class="btn btn-info add-new col-md-2">Add
                                    Todo</button>
                            </div>
                        </form>
                    @endif
                    @if ($todo != null)
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form class="form-inline" role="form" method="POST"
                            action="{{ route('todo.update', $todo->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row" style="width: 100%; padding: 0%; margin: 0%; border: 0%;">
                                <div class="form-group col-md-3">
                                    <input style="width: 100%;" type="text" class="form-control" id="title"
                                        value="{{ $todo->title }}" name="title" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <input style="width: 100%;" type="text" class="form-control" id="description"
                                        value="{{ $todo->description }}" name="description">
                                </div>
                                <div class="form-group col-md-3">
                                    <select name="is_completed" id="" style="width: 100%;" class="form-control"
                                        required>
                                        <option value="">Is Completed</option>
                                        <option <?php if ($todo->is_completed == 'YES') {
                                            echo 'selected';
                                        } ?> style="text-align: center" value="YES">Yes
                                        </option>
                                        <option <?php if ($todo->is_completed == 'NO') {
                                            echo 'selected';
                                        } ?> style="text-align: center" value="NO">N0
                                        </option>
                                    </select>
                                </div>
                                <button style="width: 20%; " type="submit" class="btn btn-info add-new col-md-2">Update
                                    Todo</button>
                            </div>
                        </form>
                    @endif
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 style="text-align: center; padding-top: 2%;"> <b>To-Do List</b></h2>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Completed</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->is_completed }}</td>
                                <td>
                                    <a href="{{ route('todo.edit', $item->id) }}" class="edit" title="Edit"
                                        data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <form style="display: inline;" role="form" method="POST"
                                        action="{{ route('todo.destroy', $item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete" title="Delete" data-toggle="tooltip"><i
                                                class="material-icons">&#xE872;</i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

                @if ($todo == null)
                    {{ $data->links() }}
                @endif

            </div>
        </div>
    </div>

@endsection
