@extends('layouts.app')

<style>
    html,
    body {
        background-image: url(https://images.pexels.com/photos/326311/pexels-photo-326311.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    }
</style>
<?php
use App\materials;
use App\menus_materials;
use App\menu;
?>
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">

            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-4">

                    {{-- </div>
                    <div class="col-6 col-md-4">
                            <a class="btn btn-secondary btn-sm" href="/refme/{{Auth::user()->id}}"> Back</a>
                    </div> --}}
                    <div class="col-6 col-md-4">

                    </div>
                </div>
            </div>
        </div>

        <div class="pull-right">

        </div>


<!-- //ค้นหาเเละกลับ -->
<div class="pull-right">
   <!-------<a class="btn btn-success" href="{{ route('addmaterial.create') }}">Add Raw Material</a>----->

   <form action="/search">

    <div class="container">
            <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm">

                </div>
                <div class="col-sm">

                </div>
            </div>
        </div>


       </form>
                   </div>
                   </div>
                   </div><br>

                   @if ($message = Session::get('success'))
                   <div class="alert alert-success">
                   <p>{{ $message }}</p>
                   </div>
                   @endif

                   <table class="table table-bordered bg-white text-dark">
                   <tr>

                           <th>ตู้เย็นที่</th>
                           <th>ชื่อวัตถุดิบ</th>
                           <th>ชื่ออาหารที่สามารถทำได้</th>
                           <th>ปริมาณวัตถุดิบ</th>
                           <th>หน่วยวัตถุดิบ</th>
                           <th>เวลาที่เพิ่มวัตถุดิบ</th>
                           <th>เวลาที่แก้ไขวัตถุดิบ</th>
                           <th width="280px">Action</th>
                   </tr>

                   @foreach ($addmaterials as $addmaterial)
                   <tr>
                   <td>{{$addmaterial->id_ref}}</td>
                           <td>
                            <?php
                            $findmaterials = materials::find($addmaterial->material);
                            $findmenu = menus_materials::where('id_material',$addmaterial->material)->get();

                            ?>

                            {{$findmaterials->name_m}}
                            </td>
                            <td>
                                @foreach ($findmenu as $item)

                                <?php
                                 $data = menu::find($item->id_menu);
                                ?>
                                - {{$data->name_menu}} <br>
                                @endforeach
                            </td>
                           <td>{{ $addmaterial->amount}}</td>
                           <td>{{ $addmaterial->unit}}</td>
                           <td>{{ $addmaterial->created_at}}</td>
                           <td>{{ $addmaterial->updated_at}}</td>
                            <td>
                                <form action="{{ route('addmaterial.destroy',$addmaterial->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('addmaterial.edit',$addmaterial->id) }}">แก้ไข</a>



                                    @csrf
                                    @method('DELETE')

                                        <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $addmaterial->id}}">
                                    ลบวัตถุดิบ
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $addmaterial->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">ลบวัตถุดิบ</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                        คุณต้องการลบวัตถุดิบนี้จริงหรือไม่?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                        <button type="submit" class="btn btn-outline-danger">ลบ</button>
                                        </div>
                                        </div>
                                        </div>
                                    </div>

                                </form>

                            </td>

                   </tr>
                   @endforeach

                   </table>



@endsection
