@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ route('grades.selected') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="nama_guru" class="mb-2">Teacher Name</label>
                <select name="teacher_id" id="teacher" class="form-control">
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mt-3">
                <label class="mb-2">Grade/Kelas yang diampu</label>
                <select class="form-control" id="grade" name="grade_id[]" multiple="multiple">
                    @foreach ($collection as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-primary" type="submit">Terapkan</button>
        </form>
    </div>
@endsection
