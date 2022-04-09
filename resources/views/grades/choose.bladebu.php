<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
</head>

<body>

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
                @foreach ($collection as $grade)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="flexCheckDefault{{ $grade->id }}"
                            name="grade_id[]" value="{{ $grade->id }}">
                        <label class="form-check-label" for="flexCheckDefault{{ $grade->id }}">
                            {{ $grade->name }}
                        </label>
                    </div>
                @endforeach
                </select>
            </div>

            <button class="btn btn-primary" type="submit">Terapkan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#teacher").select2({
                placeholder: "Please Select"
            });

            // $("#kota2").select2({
            //     placeholder: "Please Select"
            // });
        });
    </script>

</body>

</html>
