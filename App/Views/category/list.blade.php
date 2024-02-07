@extends('layout.main')
@section('content')
<h5>
    Danh sách danh mục
</h5>
<a href="{{route ('add-category')}}" class="btn btn-sm btn-primary my-2">Thêm danh mục</a>
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $value)
            <tr class="">
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>
                    <a href="{{route ('detail-category/'. $value->id)}}" class="btn btn-sm btn-warning">Sửa</a>
                    <a href="{{route ('delete-category/'. $value->id)}}" class="btn btn-sm btn-danger">Xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection