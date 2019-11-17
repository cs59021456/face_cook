@extends('layouts.app')

<style>
    html,
    body {
        background-image: url(https://images.pexels.com/photos/917494/pexels-photo-917494.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    }
</style>
@section('content')



<div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="card border-warning">

        <div class="card">
          <div class="card-header">

            <div class="container">
              <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                  <h2>แก้ไขโปรไฟล์</h2>
                </div>
                <div class="col-sm">

                </div>
              </div>
            </div>
          </div>

          <form action="{{'/user/update'}}" method="POST" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
        <div class="alert alert-danger">
            <strong>โอ๊ะโอ!</strong>กรุณากรอกข้อมูลวัตถุดิบให้ครบ
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ "กรุณากรอกให้ครบ" }}</li>
                @endforeach
            </ul>
        </div>
    @endif

            <div class="row">
                <div class="col">

                </div>
                <div class="col">
                    <label for="inputEmail4">ชื่อผู้ใช้</label>
                    <input type="text" class="form-control" id="inputEmail4" value="{{Auth::user()->name}}" name="name">

                    <label for="inputEmail4">ชื่อจริง</label>
                    <input type="text" class="form-control" id="inputEmail4" value="{{Auth::user()->first_name}}" name="first_name">

                    <label for="inputPassword4">นามสกุล</label>
                    <input type="text" class="form-control" id="inputPassword4" value="{{Auth::user()->last_name}}" name="last_name">


                </div>
                <div class="col">

                </div>
              </div>



            <div class="container">
              <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm">
                  <button type="submit" class="btn btn-success">บันทึก</button>
                  <a class="btn btn-primary" href="/showprofile">ย้อนกลับ</a>
                </div>
                <div class="col-sm">

                </div>
              </div>
            </div>
          </form>

        </div>





      </div>
    </div>
  </div>
</div>
</div>



@endsection
