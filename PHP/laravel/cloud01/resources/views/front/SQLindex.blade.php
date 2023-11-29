@extends("admin.app2")
@section("title","會員列表")
@section("context")
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css導入 -->
    <link rel="stylesheet" type="text/css" href="/css/form.css">
    <!-- 引入 SweetAlert2 样式 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


    <title>table</title>

</head>

<body>

    <div class="button-container">
        <a href="/member/add" role="button">新增</a>
        <a href="/member/delete" role="button">刪除</a>
        <!-- <button onclick="deleteRow()">刪除</button> -->
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
                <th></th>
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
                <td>
                    <div class="button-container" style="margin-bottom: 10px;">
                        <button onclick="deleteMember({{$data->userid}})">刪除</button>
                        <!-- // TODO:如果用$data 原先單一資料表正常但如果做過join會錯誤需要在$data指定userid過去 -->
                        <a href="/member/edit/{{$data->userid}}" role="button">修改</a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    {{ $list->links() }}
    <!-- 要在app/Providers/AppServiceProvider加入boorstamp使用 -->

    <!-- 引入 SweetAlert2 脚本 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- 在需要的地方调用 SweetAlert2 -->
    <script>
        function showAlert() {
            // 使用 SweetAlert2 创建弹框
            Swal.fire({
                icon: 'success',
                title: 'Custom Alert',
                text: '111This is a custom alert message!'
            });
        }

        function deleteMember(userData) {

            Swal.fire({
                title: '確認刪除？',
                //! html 這邊使用是為了能夠使用<br>這類html語法如果不需要則可以直接用 text:顯示單純文字
                //-同時如果要引用變數 不可以用分號' 要使用`才可以順利引用
                //-如果要用text就變成        text: userData.username + '5555',
                html: `ID:${userData.userid}<br>Name:${userData.username}<br><span style="color:red; font-weight:bold;">刪除後將無法還原!</span>`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '確認刪除',
                cancelButtonText: '取消',

            }).then((result) => {
                if (result.isConfirmed) {
                    // 使用者點擊 "確認刪除"
                    // 在執行實際的刪除操作使用ajax呼叫路由並傳userid過去
                    location.href = "member/delete/" + userData;

                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    // 使用者點擊 "取消"
                    console.log('取消刪除');
                }
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

    <!-- 分頁 -->
    <br><br><br>






</body>



</html>
@section("context")