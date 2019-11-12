@extends('layouts.app')

<style>
    html,
    body {
        background-image: url(https://wallpaperplay.com/walls/full/1/6/2/93324.jpg);
    }
</style>

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm">

    </div>
    <div class="col-sm">
    <p><a  class="text-dark bg-warning"><h2>Menu Search</h2></a></p>

    </div>
    <div class="col-sm">

    </div>
  </div>
</div>

<table class="table table-bordered bg-white">
    <tr class="table-danger " >
        <th>ชื่อเมนูอาหาร</th>
        <th>ส่วนผสม</th>
        <th>ขั้นตอนการทำ</th>
      <!--<th>เปอร์เซ็นที่จะทำได้{{$result}}</th>-->
    </tr>
    @foreach ($data as $data1)
    <tr>
        <td class="table-info">{{ $data1 ->name}}</td>
        <td>{{ $data1 ->menu_ing}}</td>
        <td>{{ $data1->formula}}</td>


    </tr>
    @endforeach
</table>
<div class="alert alert-success" role="alert">
    เปอร์เซ็นที่จะทำได้ {{$result}} %
  </div>

<!-- //ปุ่มกลับ -->
<div class="pull-right">
    <a class="btn btn-primary" href="/search_rw">ย้อนกลับ</a>
</div>

@endsection
