<!DOCTYPE html>
<html>
<head>
    <title>users - dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-container {
            margin: 20px;
        }
        .table {
            width: 100%;
        }
        th {
            background-color: #333;
            color: white;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn-create {
            display: block;
            width: 30%;
            padding: 10px 20px;
            background-image: linear-gradient(45deg, #32a852, #28a745, #32a852);
            color: white;
            text-align: center;
            border-radius: 5px;
            font-size: 1.2em;
            margin: 10px 0;
            text-decoration: none;
            transition: all 0.7s ease; /* トランジションの時間と種類を調整 */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            border: none; /* ボーダーを削除 */
            overflow: hidden; /* オーバーフローを隠す */
            position: relative; /* 相対位置 */
        }
        .btn-create::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(45deg, #34e89e, #0f3443);
            transition: all 0.7s ease;
            z-index: -1;
        }
        .btn-create:hover::before {
            left: 100%;
        }
        .btn-create:hover {
            color: #fff;
            background-image: linear-gradient(45deg, #34e89e, #0f3443);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
            transform: scale(1.05); /* ホバー時に少し大きく */
        }
    </style>
</head>
<body>
<div class="table-container">
    <table class="table table-bordered">
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
                <td>
                    <a href="{{ url('/edit/' . $user->id) }}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ url('/delete/' . $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <a href="{{ url('/create') }}" class="btn btn-create btn-primary">Create</a>
    </div>
</div>
</body>
</html>
