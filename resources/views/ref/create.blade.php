@extends('layouts.app')

<style>
    html,
    body {
        background-image: url(https://images.pexels.com/photos/768943/pexels-photo-768943.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    }
</style>
@section('content')




<div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="card border-secondary">

      <div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="container">
            <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm">
                    <div class="pull-left">
                        <h2>เพิ่มตู้เย็นของคุณ</h2>
                    </div>
                </div>
                <div class="col-sm">

                </div>
            </div>
        </div>

    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('ref.store') }}" method="POST">
    @csrf

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>รายละเอียดของตู้เย็น:</strong>
            <input class="form-control" style="height:150px" name="intro" placeholder="รายละเอียด">
        </div>
    </div>




    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">บันทึก</button>

        <a class="btn btn-primary" href="{{ route('home') }}">ย้อนกลับ</a>

    </div>
    </div>
</form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
