@extends('layouts.app')

<style>
    html,
    body {
        background-image: url(https://images.pexels.com/photos/1323550/pexels-photo-1323550.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    }
</style>
@section('content')


    <div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="card border-info">

      <div class="card text-center">
        <div class="card-header">
          โปรไฟล์ผู้ใช้
        </div>
        <div class="card-body">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username:</strong>
                    {{ Auth::user()->name}}
                </div>
            </div>

    <div class="center">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>อีเมล:</strong>
                {{ Auth::user()->email }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ชื่อจริง:</strong>
                {{Auth::user()->first_name}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>นามสกุล:</strong>
                {{ Auth::user()->last_name}}
            </div>
        </div>
        <a class="btn btn-primary" href="/edituser">แก้ไข</a>
            <a class="btn btn-primary" href="{{ route('home') }}">ย้อนกลับ</a>





        </div>
      </div>
    </div>
  </div>
</div>

@endsection

