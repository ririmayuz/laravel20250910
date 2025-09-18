<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>學生資料總表</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <div class="text-end mb-3">
            <a class="btn btn-success" href="{{ route('students.create') }}">新增</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>phone</th>
                    <th>hobbies</th>
                    <th>opt</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->phoneRelation->phone ?? '' }}</td>
                        <td>{{ $value->hobbyString ?? '' }}</td>
                        <td>
                            <form action="{{ route('students.destroy', ['student' => $value->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <a class="btn btn-info"
                                    href="{{ route('students.edit', ['student' => $value->id]) }}">修改</a>
                                <button type="submit" class="btn btn-secondary">刪除</button>
                            </form>
                             {{-- <a class="btn btn-danger"
                                href="">del</a> --}}
                            {{-- <a class="btn btn-danger">delete</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
