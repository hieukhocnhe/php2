@extends('layout.main')
@section('content')

<form action="{{ route('post-product') }}" method="post">
    <h2>Thêm sản phẩm</h2>
<a href="{{route ('list-product')}}" class="btn btn-sm btn-primary my-2">Danh sách sản phẩm</a>
    @if (isset($_SESSION['errors']) && isset($_GET['msg']))
        @foreach ($_SESSION['errors'] as $err)
            <div class="alert alert-danger" role="alert">{{$err}}</div>
        @endforeach
    @endif
    @if  (isset($_SESSION['success']) && isset($_GET['msg']))
            <div class="alert alert-success" role="alert">{{$_SESSION['success']}}</div>
    @endif
<div class="my-3">
  <label for="name" name="name">Tên sản phẩm</label>
  <input type="text" name="name" class="form-control form-control-sm" id="name">
</div>
<div class="mb-3">
  <label for="price" name="price" >Giá</label>
  <input type="text" name="price" class="form-control form-control-sm" id="price">
</div>
<button name="add" type="submit" value="add" class="btn btn-sm btn-success">Thêm</button>
</form>
@endsection
