@extends('layouts.app')



@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Face Cook</h2>
            </div>




            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ref.create') }}"> Create New Refrigerator</a>

                <form action="/search">
                    <input type="text" placeholder="Search" name="search">
                    <button type="submit">ค้นหา</button>
                </form>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ "ลบสำเร็จ" }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID Refrigerator</th>
            <th>User ID</th>
            <th>Refrigerator Introduction</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $data)
        <tr>
            <td>{{ $data->id_ref}}</td>
            <td>{{ $data->user_id}}</td>
            <td>{{ $data->intro}}</td>
            <td>
                <form action="" method="POST">
                    <a class="btn btn-primary" href="">Edit</a>

                    @csrf
                    @method('DELETE')


                    <button type="submit" class="btn btn-danger" >Delete</button>


                </form>

            </td>

        </tr>
        @endforeach
    </table>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>
    </div>
@endsection

