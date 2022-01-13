@extends('layouts.app')

@section('content')
@if ($errors->any())


<div class="container col-md-6">
            
            <div class="alert alert-danger mx-auto w-50">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
            </div>

 <div class="container col-md-6 text-center">
    <div class="card">
    <div class="card-header text-left">List File</div>
        <div class="card-body">
            <table class="table table-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th colspan=3>Action</th>
                </tr>
                 @foreach($drives as $item)

                <tr>
                    <th> {{ $item->id}} </th>
                    <th> {{ $item->title}} </th>
                    <th><a href=" {{ route('drive.show' ,  $item->id )}} "><i class="fas fa-eye text-info" style ="font-size:25px"></i></a></th>
                    <th><a href=" {{ route('drive.edit' ,  $item->id )}} "><i class="far fa-edit text-success" style ="font-size:25px"></i></a></th>
                    <th><a href=" {{ route('drive.destroy' ,  $item->id )}} "><i class="far fa-trash-alt text-danger" style ="font-size:25px"></i></a></th>
                </tr>
                @endforeach 
             </table>

        </div>
    </div>
</div>

@endsection
