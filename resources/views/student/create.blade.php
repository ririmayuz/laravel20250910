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
        <h2>Student Create form</h2>
        <form action="{{ route('students.store') }}" method="post">
            @csrf
            <div class="mb-3 mt-3">
                <label for="name">Name:</label>
                <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>

            <button type="submit" class="btn btn-primary">送出</button>
        </form>
    </div>

</body>

</html>
