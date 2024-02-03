@extends('layout.main')
@section('content')

<form action="{{ route('post.product') }}" method="post">
<label for="name">Tên sản phẩm</label>
<input type="text" name="name" id="name">
<label for="price">Giá</label>
<input type="text" name="price" id="price">
<button name="add" type="submit" value="add">Thêm</button>
</form>
@endsection
