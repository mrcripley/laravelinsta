@extends('layouts.app')

@section('content')


    <div class="container">
    <form action="../{{ $user->id }}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PATCH')
                 <div class="row">
                     <div class="col">

                            <div class="row">
                            <h1>Edit profile</h1>
                            </div>

                            <div class="form-group row">
                            <label for="title" class="col-form-label">Title </label>
                          
                                <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" title="title" value="{{ old('title') ?? $user->profile->title }}"  autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                    </div>
                 </div>

                 <div class="row">
                     <div class="col ">

                            <div class="form-group row">
                            <label for="description" class="col-form-label">Description </label>
                          
                                <input id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror" title="description" value="{{ old('description') ?? $user->profile->description }}"  autocomplete="description" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                    </div>
                 </div>

                 <div class="row">
                     <div class="col">

                            <label for="url" class="col-form-label">url </label>
                            <div class="form-group row">
                          

                                <input id="url" name="url" type="text" class="form-control @error('url') is-invalid @enderror" title="url" value="{{ old('url') ?? $user->profile->url }}"  autocomplete="url" autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                    </div>
                 </div>
                 <div class="row">
                            <label for="image" class="col-md-4 col-form-label">Post image</label>
                            <input type="file" class="form-control-file" id="image" name="image">

                            @error('image')
                                    
                                    <strong>{{ $message }}</strong>
                                     
                                @enderror
                        </div>
                 
                        
                            <div class="row pt-4">
                                <button class="btn btn-primary">Save Profile</button>                            


                                </div>
            
            
            
            
            </form>


    </div>



@endsection
