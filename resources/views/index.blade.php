<!DOCTYPE html>
<html>
<head>
    <title>users - dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th colspan="2">operation</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td>edit</td>
            <td>delete</td>
        </tr>
          
        @endforeach
    </tbody>
</table>
</body>
<style>
    table {
        border-collapse: collapse;
        width: 80%;
    }
    th {
        background-color: #333;
        color: white;
    }
    th, td {
        text-align: left;
        padding: 4px;
        border: 1px solid #333;
    }
    td {
        border: 1px solid #333;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
</html>

