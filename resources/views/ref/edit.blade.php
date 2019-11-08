@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>แก้ไขรายละเอียดตู้เย็น</h2>
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

    <form action="{{ route('ref.update',$refs->id) }}" >
        @csrf
        @method('PUT')

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>รายละเอียดตู้เย็น:</strong>
                    <textarea class="form-control" style="height:150px" name="intro" placeholder="{{$refs->intro}}"></textarea>
                </div>
            </div>




            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">บันทึก</button>
              <a class="btn btn-primary" href="{{ route('home') }}">ย้อนกลับ</a>
            </div>



        </div>

    </form>
@endsection
