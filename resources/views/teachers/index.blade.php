@extends('layouts.app')
<x-datatables />
@section('content')
    <div class="row">
        <a class="btn btn-primary" href="{{ route('grades.choose') }}">Pilih kelas</a>
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
                                <td>
                                    <ul>
                                        @foreach ($item->grades as $grade)
                                            <li>{{ $grade->name }}</li>
                                        @endforeach
                                    </ul>
                                </td>
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
