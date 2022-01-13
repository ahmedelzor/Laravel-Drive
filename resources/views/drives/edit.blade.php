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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update File  :  {{$drive->title}} </div>

                <div class="card-body">
                    <form action="{{ route('drive.update' , $drive->id)}} "  enctype="multipart/form-data" method ="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="Title" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input value="{{$drive->title}}" type="text" class="form-control" name="title" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Description" class="col-md-4 col-form-label text-md-right">Descripition</label>

                            <div class="col-md-6">
                                <input value="{{$drive->descripition}}"  type="text" class="form-control" name="descripition"> 
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="File" class="col-md-4 col-form-label text-md-right">File</label>

                            <div class="col-md-6">
                                <input value="{{$drive->file}}"  type="file" class="form-control" name="inputfile">
                            </div>
                        </div>
                          <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Update Drive
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
