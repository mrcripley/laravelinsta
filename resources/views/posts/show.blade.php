@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
            <img src="../storage/{{ $post->image }}" alt="" class="w-100">
            </div>


            <div class="col-4">

                <div>


                </div>

                <div class="d-flex pt-4 align-items-baseline">
                    <div class="font-weight-bold">

                    <img src="../storage/{{ $post->user->profile->profileImage() }}" style="max-width: 50px;"  class="w-100 rounded-circle">


                        <a href="../profile/{{ $post->user->id }}">
                              <span class="text-dark"> {{ $post->user->username }}</span>
                        </a>

                    </div>


                        <a class="pl-4 font-weight-bold" href="">Follow</a>
                    @can ('delete', $post)
                    <form id="myForm" class="ml-auto" action="{{ url('/p', ['id' => $post->id]) }}" method="post">
                        <button id="submit-button" class="confirm btn btn-danger" type="submit" value="Delete post">DELETE</button>
                        @method('delete')
                        @csrf
                    </form>
                    @endcan

                </div>






                <div class="pt-2 d-flex font-weight-bold">
                    <a href="../profile/{{ $post->user->id }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a>





                </div>
               {{ $post->caption }}
            </div>






        </div>






    </div>






@endsection
