@extends('layouts.app')
@section('body-class', 'profile-page sidebar-collapse')
@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/city-profile.jpg');"></div>
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                            <div class="avatar">
                                <img src="{{$category->featured_image_url}}" alt="Imagen Reprensentativa de la {{$category->name}}" class="img-raised img-fluid">zaq
                            </div>

                            <div class="name">
                                <h3 class="title">{{$category->name}}</h3>


                            </div>
                            @if (session('notification_cart'))
                            <div class="alert alert-success" role="alert">

                                <a href="{{url('/home')}}">{{ session('notification_cart') }}</a>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="description text-center">
                    <p>{{ $category->description}}</p>
                </div>


            </div>
        </div>
    </div>


    @include('includes.footer')
@endsection
