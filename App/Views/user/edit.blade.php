@extends('layout.main')
@section('content')

<form action="{{ route('edit-user/' . $users->id) }}" method="post">
    <h2>Sửa người dùng</h2>
<a href="{{route ('list-user')}}" class="btn btn-sm btn-primary my-2">Danh sách người dùng</a>
    @if (isset($_SESSION['errors']) && isset($_GET['msg']))
        @foreach ($_SESSION['errors'] as $err)
            <div class="alert alert-danger" role="alert">{{$err}}</div>
        @endforeach
    @endif
    @if  (isset($_SESSION['success']) && isset($_GET['msg']))
            <div class="alert alert-success" role="alert">{{$_SESSION['success']}}</div>
    @endif
<div class="my-3">
  <label for="name" name="name">Tên người dùng</label>
  <input type="text" name="name" class="form-control form-control-sm" id="name" value="{{$users->name}}">
</div>
<button name="edit" type="submit" value="edit" class="btn btn-sm btn-success">Sửa</button>
</form>
@endsection
