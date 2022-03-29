@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ route('grades.selected') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="nama_guru" class="mb-2">Teacher Name</label>
                <select name="teacher_id" id="nama_guru" class="form-select">
                    @foreach ($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mt-3">
                <label class="mb-2">Grade/Kelas yang diampu</label>
                @foreach ($collection as $grade)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="grade_id[]"
                            value="{{ $grade->id }}">
                        <label class="form-check-label" for="flexCheckDefault">
                            {{ $grade->name }}
                        </label>
                    </div>
                @endforeach
                </select>
            </div>

            <button class="btn btn-primary" type="submit">Terapkan</button>
        </form>
    </div>
@endsection
