@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Colour</div>

                <div class="card-body">
                    <form action="{{ route('admin.addcolour') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Colour Name</label>
                                    <input type="text" name="colour_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Colour Code</label>
                                    <input type="text" name="colour_code" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <br>
                                    <button style="margin-top: 8px" class="btn btn-success form-control">ADD</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Colour List</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Colour Name</th>
                                        <th>Colour Code</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($colours as $colour)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{ $colour->name }}</td>
                                            <td>{{ $colour->code }} <div style="display: inline-block; height: 30px; width: 30px; background-color: {{ $colour->code }}; border: 1px solid #000;"></div></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.colour.delete', ['id' => $colour->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">DEL</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
