@extends('layouts.app')
<x-datatables />
<x-new-modal id="formUpload">
    <x-slot name="title">Import Students </x-slot>
    <x-slot name="body">
        <form action="{{ route('student.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="file" name="file" />
    </x-slot>
    <x-slot name="footer">
        <button class="btn btn-primary" type="submit">Import</button>
        </form>
    </x-slot>
</x-new-modal>

<x-new-modal id="formatKelas">
    <x-slot name="title">Title</x-slot>
    <x-slot name="body">
        1. Sebelum melakukan import pastikan untuk Download Sample terlebih dahulu <br>
        2. Sesuaikan Nama Siswa dengan ID kelas nya masing-masing <br>
        3. Berikut adalah ID kelas yang bisa di terapkan di institusi/lembaga anda
        <table class="table table-responsive table-striped table-s">
            <tr>
                <th>Grade</th>
                <th>ID</th>
            </tr>
            @foreach ($grades_id as $item)
                <tr>
                    <td>
                        {{ $item->name }}
                    </td>
                    <td>
                        <button class="btn btn-outline-success"> {{ $item->id }}</button>
                    </td>
                </tr>
            @endforeach
        </table>
    </x-slot>
    <x-slot name="footer">
        close
    </x-slot>
</x-new-modal>

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="btn btn-primary mb-2" data-toggle="modal" data-target="#formUpload">Import</div>
            <button class="btn btn-outline-primary mb-2">Download Sample</button>
            <div class="btn btn-outline-primary mb-2" data-toggle="modal" data-target="#formatKelas">Panduan</div>
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
