@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}"  class="rounded-circle w-100" alt="">


            </div>

            <div class="col-9 p-5">
                   <div class="d-flex align-items-center">

                   <h1>{{ $user->username }}</h1>
                       <div id="app" class="pl-3">
                           <follow-button user-id="{{ $user->id }}"></follow-button>
                       </div>



                       <div class="ml-auto">
                   @can ('update', $user->profile)
                   <a class="pl-3 " href="../p/create">Add New Post</a>
                   @endcan

                </div>

                   </div>

                   @can ('update', $user->profile)
                      <a class="text-decoration-none" href="../profile/{{ $user->id }}/edit">Edit Profile</a>
                   @endcan

                    <div class="d-flex ">
                            <div class="pr-3"><strong>153</strong> posts</div>
                            <div class="pr-3"><strong>23k</strong> followers</div>
                            <div class="pr-3"><strong>212</strong> following</div>
                    </div>
                 <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
                    <div>{{ $user->profile->description }}</div>
                    <div class="font-weight-bold"> <a href="#">{{ $user->profile->url }}</a></div>

            </div>


        </div>






            <div class="row pt-4">




                @foreach($user->posts as $post)

                <div class="pt-3 col-4 d-flex justify-content-around">
                    <a href="../p/{{ $post->id }}">
                        <img class="w-100"  src="../storage/{{ $post->image }}" alt="">

                    </a>


                </div>


                @endforeach



            </div>


    </div>



@endsection
