@extends('layouts.app')

<style>
    html,
    body {
        background-image: url(https://images.pexels.com/photos/1054289/pexels-photo-1054289.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
    }
</style>

@section('content')
@foreach ($refs as $item)
<div class="container">
  <div class="row">
    <div class="col-sm">
      <div class="card border-danger">
        <h5 class="card-header">ตู้เย็นของฉัน</h5>

        <div class="card-body">
          <h5 class="card-title">ตู้เย็น:{{$item->id}}</h5>
          <p class="card-text">รายละเอียดตู้เย็น:{{$item->intro}}</p>
          <a href="/Addmater/show/{{$item->id}}" class="card-link">ดูวัตถุดิบในตู้เย็น</a>
          <a href="/Addmater/create/{{$item->id}}" class="card-link">เพิ่มวัตถุดิบเข้าตู้เย็น</a>

          <form action="{{ route('ref.destroy',$item->id) }}" method="POST">
            <a class="btn btn-primary" href="{{ route('ref.edit',$item->id)}}">แก้ไขตู้เย็น</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">ลบตู้เย็น</button>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>


@endforeach


<div class="container">
    <a class="btn btn-primary" href="{{ route('home') }}">ย้อนกลับ</a>
</div>

@endsection
