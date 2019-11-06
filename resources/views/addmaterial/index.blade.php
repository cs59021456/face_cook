 @extends('layouts.app')



 @section('content')
 <div class="row">
     <div class="col-lg-12 margin-tb">
         <div class="pull-left">

             <div class="container">
                 <div class="row">
                     <div class="col-sm">

                     </div>
                     <div class="col-sm">
                         <h2>รายการวัตถุดิบในตู้เย็น</h2>
                     </div>
                     <div class="col-sm">

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
                <input type="text" placeholder="Search" name="search">
                    <button type="submit"class="btn btn-primary btn-sm">ค้นหา</button> <a class="btn btn-secondary btn-sm" href="{{ route('home') }}"> Back</a>

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
                            <th>ปริมาณวัตถุดิบ</th>
                            <th>หน่วยวัตถุดิบ</th>
                            <th>เวลาที่เพิ่มวัตถุดิบ</th>
                            <th>เวลาที่แก้ไขวัตถุดิบ</th>
                            <th width="280px">Action</th>
                    </tr>
                    @foreach ($data as $data)
                    <tr>
                            <td>{{ $data ->id_ref}}</td>
                            <td>{{ $data->material}}</td>
                            <td>{{ $data->amount}}</td>
                            <td>{{ $data->unit}}</td>
                            <td>{{ $data->created_at}}</td>
                            <td>{{ $data->updated_at}}</td>
                    <td>
                        <form action="{{ route('addmaterial.destroy',$data->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('addmaterial.show',$data->id_ref) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('addmaterial.edit',$data->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                    </table>

@endsection
