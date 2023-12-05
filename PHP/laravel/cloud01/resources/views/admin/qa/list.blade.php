@extends("testweb")
@sction("title","活動QA")
@section("content")
<script src="/js/admin2/sweetalert2.all.min.js"></script>
<link rel="/css/admin2/sweetalert2.min.css" href="stylesheet">
<script>
    @if(Session::has("msssage"))
    Swal.fire("{{ Session::get("message") }}");
@endif


function del(id) {
    Swal.fire({
        title: "確定刪除?",
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: "確定",
        showDenyButton: "算了,不刪了"
    }).then((result)) {
        //按下確定
        if (result.isConfirmed) {
            location.href = "admin/qa/delete" + id;
        }
    }
}
</script>
<table class="table table-bordered">
    <tr>
        <th class="col-5">標題</th>
        <th class="col-5">內容</th>
        <th class="col-5">修改</th>
        <th class="col-5">刪除</th>
    </tr>
    @foreach($list as $data)
    <tr>
        <td>{{$data->title}}</td>
        <td>{{$data->content}}</td>
        <td>
            <a href="/admin/qa/edit/{{$data->id}}" class="btn btn-success">修改</a>
        </td>
        <td>
            <a class="btn btn-danger" href="#" onclick="del('{{$data->id}}')">刪除</a>
        </td>
    </tr>
    @endforeach

</table>
@endsection