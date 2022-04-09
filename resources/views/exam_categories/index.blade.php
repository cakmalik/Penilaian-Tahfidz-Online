@extends('layouts.app')
<x-datatables />
@section('content')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buatCategori">
        Add
    </button>
    <x-new-modal id="buatCategori">
        <x-slot name="title">Buat kategori Ujian</x-slot>
        <x-slot name="body">
            <livewire:create-exam-category />
        </x-slot>
        <x-slot name="footer">
            <button class="btn btn-primary" type="submit">Buat</button>
            </form>
        </x-slot>
    </x-new-modal>
    <div class="row mt-2">
        <div class="col-12">
            <div class="card p-3">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Kelas</th>
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
