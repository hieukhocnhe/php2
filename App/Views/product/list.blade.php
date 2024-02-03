@extends('layout.main')
@section('content')
<h5>
    Danh sách sản phẩm
</h5>
<a href="{{route ('add-product')}}">Thêm sản phẩm</a>
<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $value)
            <tr class="">
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{number_format($value->price)}}</td>
                <td>
                    <a href="{{route ('detail-product/'. $value->id)}}">Sửa</a>
                    <a href="{{route ('delete-product/'. $value->id)}}">Xóa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection