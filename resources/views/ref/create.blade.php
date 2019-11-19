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
      <div class="card border-danger">

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



<form action="{{ route('ref.store') }}" method="POST">
    @csrf

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>โอ๊ะโอ้ว!</strong> กรุณาใส่ข้อมูลให้ครบด้วยนะจ๊ะ.<br><br>
        <ul>
            @foreach ($errors->all() as $error)

            @endforeach
        </ul>
    </div>
    @endif






    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ชื่อตู้เย็น:</strong>
                <input class="form-control" style="height:150px" name="name_ref" placeholder="ชื่อตู้เย็น">
            </div>
        </div> --}}


        <div class="form-group row">
            <label for="name_ref" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อตู้เย็น:') }}</label>

            <div class="col-md-6">
                <input id="name_ref" type="name_ref" class="form-control @error('name_ref') is-invalid @enderror" name="name_ref"  autocomplete="current-name_ref">

                @error('name_ref')
                    <span class="invalid-feedback text-danger" role="alert" >
                        <strong>{{ "กรุณากรอกชื่อตู้เย็น" }}</strong>
                    </span>
                @enderror
            </div>
        </div>




        <div class="form-group row">
            <label for="intro" class="col-md-4 col-form-label text-md-right">{{ __('รายละเอียดของตู้เย็น:') }}</label>

            <div class="col-md-6">
                <input id="intro" type="intro" class="form-control @error('intro') is-invalid @enderror" name="intro"  autocomplete="current-intro">

                @error('intro')
                    <span class="invalid-feedback text-danger" role="alert" >
                        <strong>{{ "กรุณากรอกรายละเอียดตู้เย็น" }}</strong>
                    </span>
                @enderror
            </div>
        </div>



    {{-- <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>รายละเอียดของตู้เย็น:</strong>
            <input class="form-control" style="height:150px" name="intro" placeholder="รายละเอียด">
        </div>
    </div> --}}




    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-success">บันทึก</button>

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
