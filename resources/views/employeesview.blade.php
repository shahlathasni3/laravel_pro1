<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a href="add/" class="btn btn-primary">Add data</a>
        <table class="table table-border">
            <thead>
                <tr>
                    <th>id</th>
                    <th>first_name</th>
                    <th>last_name</th>
                </tr>
            </thead>
            @foreach($employees as $row)
            <tr>
                
                <td>{{$row->id}}</td>
                <td>{{$row->first_name}}</td>
                <td>{{$row->last_name}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>