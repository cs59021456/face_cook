@extends('layouts.app')

<style>
    html,
    body {
        background-image: url(https://wallpaperplay.com/walls/full/1/6/2/93324.jpg);
    }
</style>
<?php
use App\menu;
use App\menus_materials;
use App\materials;



?>

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm">

    </div>
    <div class="col-sm">
    <p><a  class="text-dark bg-warning"><h2>ค้นหาสูตรอาหารจากวัตถุดิบ</h2></a></p>

    </div>
    <div class="col-sm">

    </div>
  </div>
</div>

{{-- ตารางที่แสดงสูตรอาหาร --}}
<table class="table table-bordered bg-white">
    <tr class="table-danger " >
        <th>ชื่อเมนูอาหาร</th>
        <th>ส่วนผสม</th>
        <th>ขั้นตอนการทำ</th>
        <th>ของที่ขาด</th>
        <th>เปอร์เซ็นที่จะทำได้</th>



    </tr>

    @foreach ($data as $data1)

    <?php
    $findmenus_materials = menus_materials::where('id_material',$data1 ->id)->get();
    ?>
    @endforeach
    @foreach ($findmenus_materials as $item)
    <tr>
        {{-- ชื่อเมนู --}}
        <td class="table-info">
            <?php
                $findnamemenu = menu::find($item ->id_menu);
            ?>
        {{  $findnamemenu->name_menu}}
        </td>
        {{-- ส่วนประกอบเมนู --}}
        <td>{{ $findnamemenu->menu_ing}}</td>
        {{--วิธีทำ--}}
        <td>{{ $findnamemenu->formula}}</td>







{{-- ของที่ขาด --}}
        <td>



                    <?php
                    //$findmenu = menus_materials::where([['id_material', 'not like', "%$item->id_material%"],['id_menu',$findnamemenu->id]])->get();
                    //$findmenu = menus_materials::where([['id_material', 'Like', "%$item->id_material%"],['id_menu',$findnamemenu->id]])->get();

                    // หาสิ่งที่ขาด
                    $findmenu = menus_materials::where('id_menu',$findnamemenu->id)->get();
                    ?>

                        {{-- {{ $data1->id   }} --}}



                        <?php
                        $i = 100;
                       ?>
                @foreach ($findmenu as $item1)
                    {{-- {{$item1->id_material}} --}}

                    @if($item1->id_material == $data[0]->id)
                    <?php
                    $i = $i - 25;
                    ?>

                    @elseif($item1->id_material == $data[1]->id)
                    <?php
                    $i = $i - 25;
                    ?>

                    @elseif($item1->id_material == $data[2]->id)
                    <?php
                    $i = $i - 25;
                    ?>

                    @elseif($item1->id_material == $data[3]->id)
                    <?php
                    $i = $i - 25;
                    ?>
                    
                    {{-- {{$i}} --}}
                    @else
                        <?php
                        $namematerial = materials::find($item1->id_material);

                        ?>
                    {{-- {{$i}} --}}
                    - {{$namematerial->name_m}}
                    @endif

                @endforeach




        </td>
        <td>
                @if ($i ==  0)
                 {{ 100 }} %
                @elseif($i ==  25)
                 {{ 75 }} %
                @elseif($i ==  50)
                {{ 50 }} %
                @elseif($i ==  75)
                {{ 25 }} %
                @endif
        </td>

    </tr>
    @endforeach
</table>
{{-- <div class="alert alert-success" role="alert">
    เปอร์เซ็นที่จะทำได้  %
  </div> --}}

<!-- //ปุ่มกลับ -->
<div class="pull-right">
    <a class="btn btn-primary" href="/search_rw">ย้อนกลับ</a>
</div>



@endsection
