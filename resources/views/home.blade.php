@extends('layouts.app')
@section('title', 'vivery-shop | Dashboard')
@section('body-class', 'landing-page sidebar-collapse')
@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('img/profile_city.jpg')">

    </div>
    <div class="main main-raised">
        <div class="container">

            <div class="section text-center">
                <h2 class="title">Dashboard</h2>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <ul class="nav nav-pills nav-pills-icons" role="tablist">
                    <!--
                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                    -->
                    <li class="nav-item">
                        <a class="nav-link" href="#dashboard-1" role="tab" data-toggle="tab">
                            <i class="material-icons">dashboard</i>
                            Carrito de Compra
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                            <i class="material-icons">list</i>
                         Pedidos Realizados
                        </a>
                    </li>
                </ul>
                @foreach( auth()->user()->cart->details as $details )
                    <ul>
                        <li>
                            {{$details}}
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
   @include('includes.footer')
@endsection


