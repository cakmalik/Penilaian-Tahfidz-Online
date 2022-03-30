@extends('layouts.app')
<x-datatables />
@section('content')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add
    </button>
    <x-modal title="Add Exam Category">
        <livewire:create-exam-category />
    </x-modal>
    <div class="row mt-2">
        <div class="col-12">
            <div class="card p-3">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            {{-- <th>Grade</th> --}}
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($collection as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                {{-- <td>{{ $student->grade_id }}</td> --}}
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
