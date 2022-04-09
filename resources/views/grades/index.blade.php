@extends('layouts.app')
<x-datatables />
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card p-3">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($collection as $item)
                            <tr>
                                <td>{{ $item->name }} <br> <small>
                                        @foreach ($item->teachers as $guru)
                                            <a href="https://wa.me/{{ $guru->phone }}"> {{ $guru->name }}</a>,
                                        @endforeach
                                    </small></td>
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
