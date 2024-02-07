@extends('layout.main')
@section('content')
<h5>
    Danh sách người dùng
</h5>
<a href="{{route ('add-user')}}" class="btn btn-sm btn-primary my-2">Thêm người dùng</a>
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên người dùng</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $value)
            <tr class="">
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>
                    <a href="{{route ('detail-user/'. $value->id)}}" class="btn btn-sm btn-warning">Sửa</a>
                    <a href="{{route ('delete-user/'. $value->id)}}" class="btn btn-sm btn-danger">Xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection