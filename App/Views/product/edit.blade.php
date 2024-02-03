@extends('layout.main')
@section('content')

<form action="{{ route('edit.product/' . $products->id) }}" method="post">
<label for="name">Tên sản phẩm</label>
<input type="text" name="name" id="name" value={{$products->name}}>
<label for="price">Giá</label>
<input type="text" name="price" id="price" value={{$products->price}}>
<button name="edit" type="submit" value="edit">Sửa</button>
</form>
@endsection
