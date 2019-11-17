@extends('layouts.app')

<style>
    html,
    body {
        background-image: url(https://images.pexels.com/photos/1054289/pexels-photo-1054289.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    }
</style>

@section('content')
@foreach ($refs as $item)

<div class="row">
        <div class="col-6 col-md-4"></div>
        <div class="col-6 col-md-4">
                <div class="card border-danger">
                        <h5 class="card-header">ตู้เย็นของฉัน</h5>

                        <div class="card-body">
                          <h5 class="card-title">รหัสตู้เย็น:{{$item->id}}</h5>
                          <p class="card-text">ชื่อตู้เย็น:{{$item->name_ref}}</p>
                          <p class="card-text">รายละเอียดตู้เย็น:{{$item->intro}}</p>

                          <form action="{{ route('ref.destroy',$item->id) }}" method="POST">
                                <a href="/Addmater/create/{{$item->id}}" class="btn btn-outline-success">เพิ่มวัตถุดิบเข้าตู้เย็น</a>
                                <a href="/Addmater/show/{{$item->id}}" class="btn btn-outline-info">ดูวัตถุดิบและสูตรอาหารที่ทำได้</a>
                          {{-- <a href="/search_ref/{{$item->id}}" class="btn btn-outline-secondary">ค้นหาสูตรอาหาร</a> --}}
                            <a class="btn btn-outline-primary" href="{{ route('ref.edit',$item->id)}}">แก้ไขตู้เย็น</a>







                            @csrf
                            @method('DELETE')

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal{{$item->id}}">
                                    ลบตู้เย็น
                                </button>

                                <!-- Modal ลบตู้เย็น-->
                                <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">ลบตู้เย็น</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                        คุณต้องการลบตู้เย็นจริงหรือไม่?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                                        <button type="submit" class="btn btn-outline-danger">ลบตู้เย็น</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
        </div>
        <div class="col-6 col-md-4"></div>
      </div>

<div class="container">
  <div class="row">
    <div class="col-sm-6">

          </form>
        </div>
      </div>
    </div>
  </div>
</div>



@endforeach

<div class="row">
        <div class="col-6 col-md-4">

        </div>
        <div class="col-6 col-md-4">

        </div>
        <div class="col-6 col-md-4">
                <a class="btn btn-primary" href="{{ route('home') }}">ย้อนกลับ</a>
        </div>
      </div>
<div class="container">

</div>

@endsection
