@extends('layouts.app')

<style>
    html,
    body {
        background-image: url(https://wallpaperplay.com/walls/full/1/6/2/93324.jpg);
    }
</style>
<?php
use App\menu;
?>

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
        <th>ของที่ขาด</th>
    </tr>
    @foreach ($data as $data1)
    <tr>
        <td class="table-info">{{ $data1 ->name}}</td>
        <td>{{ $data1 ->menu_ing}}</td>
        <td>{{ $data1->formula}}</td>
        <td>
                {{$data1->key_word}}
            <?php
            $find = menu::where('menu_ID',$data1->menu_ID)->get();

            ?>

            @if($find[0] == $data[0])
            {{$find[1]->key_word}}
            {{$find[2]->key_word}}
            {{$find[3]->key_word}}
            @elseif($find[1] == $data[0])
            {{$find[0]->key_word}}
            {{$find[2]->key_word}}
            {{$find[3]->key_word}}
            @elseif($find[2] == $data[0])
            {{$find[0]->key_word}}
            {{$find[1]->key_word}}
            {{$find[3]->key_word}}
            @elseif($find[3] == $data[0])
            {{$find[0]->key_word}}
            {{$find[1]->key_word}}
            {{$find[2]->key_word}}

            @endif



            {{-- @foreach ($find as $item)
            @if($item[0] != $find[0])
            {{$find[1->key_word}}
            @endif

            {{-- {{$item->key_word}} --}}
            {{-- @endforeach --}}
        </td>

    </tr>
    @endforeach
</table>
<div class="alert alert-success" role="alert">
    เปอร์เซ็นที่จะทำได้  %
  </div>

<!-- //ปุ่มกลับ -->
<div class="pull-right">
    <a class="btn btn-primary" href="/search_rw">ย้อนกลับ</a>
</div>

@endsection
