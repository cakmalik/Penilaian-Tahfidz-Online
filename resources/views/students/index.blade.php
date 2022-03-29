@extends('layouts.app')
<x-datatables />


@section('content')
    <div class="row">
        <div class="mb-4">
            <form action="{{ route('student.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <input type="file" name="file" />
                <button class="btn btn-primary" type="submit">Upload</button>
            </form>
        </div>
        <div class="col-12">
            <div class="card p-3">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Grade</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($collection as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->grade->name }}</td>
                                <td>
                                    <a href="#" class="btn btn-outline-primary btn-sm">Edit</a>
                                    <a href="#" class="btn btn-outline-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
