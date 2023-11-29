<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            width: 10%;
            /* 調整表單寬度 */
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
        }

        button {
            padding: 10px;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
    <title>Member List</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>City</th>
                <th>Address</th>

            </tr>
        </thead>
        <tbody>
            @foreach($list as $data)
            <tr>
                <td class="text-center">{{$data->userid}}</td>
                <td class="text-center">{{$data->username}}</td>
                <td class="text-center">{{$data->mobile}}</td>
                <td class="text-center">{{$data->email}}</td>
                <td class="text-center">{{$data->city}}</td>

                <td class="text-center">{{$data->address}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
    <ul class="pagination">
        {{ $list->links() }}
    </ul>
</body>

</html>
 -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 引入 Bootstrap 的 CSS 文件 -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <title>Member List</title>
</head>

<body>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $data)
                <tr>
                    <td>{{$data->userid}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$data->mobile}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->city}}</td>
                    <td>{{$data->address}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- 分頁 -->
        <div class="d-flex justify-content-center">
            {{ $list->links() }}
            <!-- app\Providers\AppServiceProvider.php 需要加入usebootstrap -->
        </div>
    </div>

    <!-- 引入 Bootstrap 的 JS 文件，如果需要的话 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>