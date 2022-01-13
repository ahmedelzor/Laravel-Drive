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
    <div class="card-header text-left"> {{ $drive->title}}</div>
                    <div class="media my-5">
                    <img src='{{ asset("upload/$drive->file") }}'class="mr-3 ml-3" alt="...">
                <div class="media-body mt-4">
                <h5 class="mt-0"> {{ $drive->title}}</h5>
                <p> {{ $drive->descripition}}</p>
                <th><a href=" {{ route('drive.edit' ,  $drive->id )}} "><i class="far fa-edit text-success" style ="font-size:25px"></i></a></th>
                <th><a href=" {{ route('drive.destroy' ,  $drive->id )}} "><i class="far fa-trash-alt text-danger" style ="font-size:25px"></i></a></th>
                <th><a href=" {{ route('drive.download' ,  $drive->id )}} "><i class="far fa-save text-Primary" style ="font-size:25px"></i></a></th>
                </div>
                </div>
    </div>
</div>

@endsection
