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
        <h2>Student index</h2>
        <p>The .table-striped class adds zebra-stripes to a table:</p>
        <div class="text-end mb-2">
            <?php
            // $url = route('students.create');
            // dd($url);
            ?>
            {{-- <a href="http://localhost/students/create" class="btn btn-primary">新增</a> --}}
            <a href="{{ route('students.create') }}" class="btn btn-primary">新增</a>
            <a href="{{ route('students.create') }}" class="btn btn-info">excel</a>

        </div>
        @php
            // dd($data);
        @endphp

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>opt🪄</th>
                </tr>
            </thead>
            <tbody>
                {{-- <tr>
                    <td>1</td>
                    <td>amy</td>
                    <td>
                        <a href="http://localhost/students/1/edit" class="btn btn-success">修改</a>
                        <button type="button" class="btn btn-danger">刪除</button>
                    </td>
                </tr> --}}
                <tr>
                    <td>1</td>
                    <td>amy</td>
                    <td>
                        <a href="{{ route('students.edit', ['student' => 1]) }}" class="btn btn-success">修改</a>
                        <button type="button" class="btn btn-danger">刪除</button>
                    </td>
                </tr>
                {{-- blade --}}
                @foreach ($data as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>
                            <a class="btn btn-success" href="{{route('students.edit',['student' => $value['id']])}}">修改</a>
                        </td>
                    </tr>
                @endforeach

                {{-- 原生php --}}
                <?php foreach ($data as $key => $value) :?>

                <?php endforeach;?>

            </tbody>
        </table>
    </div>

</body>

</html>
