@extends('layouts.app')

@section('content')

@if (Auth::user()->role==1)

@if ($errors->any())
        <div class="container col-md-6">
            
        <div class="alert alert-danger mx-auto w-50">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            </div>
                        @endif
      
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New File</div>

                <div class="card-body">
                    <form action="{{ route('drive.store')}} "  enctype="multipart/form-data" method ="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="Title" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="title" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Description" class="col-md-4 col-form-label text-md-right">Descripition</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="descripition"> 
                             </div>
                        </div>

                        <div class="form-group row">
                            <label for="File" class="col-md-4 col-form-label text-md-right">File</label>

                            <div class="col-md-6">
                                <input  type="file" class="form-control" name="inputfile">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="usersid"  class="col-md-4 col-form-label text-md-right">User ID</label>

                            <div class="col-md-6">
                                <input  type="hidden" value="{{ Auth::user()->id }}" class="form-control" name="usersid">
                            </div>
                        </div> -->
                          <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Add Drive
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@else
   <img src="https://cdn4.vectorstock.com/i/1000x1000/29/48/not-authorized-rubber-stamp-vector-11512948.jpg" style="width:100%;height: 100vh;" alt="">
@endif
@endsection
