<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 引入 SweetAlert2 样式 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .button-container {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            /* 增加底部間距 */
        }

        button,
        a {
            padding: 10px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            /* 移除連結的下劃線 */
            color: #fff;
            background-color: #007bff;
            border: 1px solid #007bff;
            border-radius: 5px;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            /* 調整表格寬度 */
        }

        th,
        td {
            border: 2px solid #000;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <title>table</title>

</head>




<body>

    <div class="button-container">
        <a href="/member/add" role="button">新增</a>
        <button onclick="deleteRow()">刪除</button>
        <button onclick="editRow()">修改</button>
    </div>
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

    <!-- 引入 SweetAlert2 脚本 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- 在需要的地方调用 SweetAlert2 -->
    <script>
        function showAlert() {
            // 使用 SweetAlert2 创建弹框
            Swal.fire({
                icon: 'success',
                title: 'Custom Alert',
                text: 'This is a custom alert message!'
            });
        }
    </script>


    @if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
    <script>
        function showAlert1() {
            // 使用 SweetAlert2 创建弹框
            Swal.fire({
                icon: 'success',
                title: 'Custom Alert',
                text: '{{ Session::get("message") }}'
            });
        }
        showAlert1();
    </script>
    @endif




    <!-- 调用 showAlert 函数，例如在按钮点击事件中 -->
    <button onclick="showAlert()">Show Alert</button>

</body>



</html>