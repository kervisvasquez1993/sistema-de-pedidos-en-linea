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
                @if (session('notification'))
                    <div class="alert alert-success" role="alert">
                        {{ session('notification') }}
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
                <hr>
                <p class="text-center"> Tu carrito de compra presenta {{auth()->user()->cart->details->count()}} productos</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>SubTotal</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( auth()->user()->cart->details as $details )
                        <tr>
                            <td>
                                <img src="{{$details->product->featured_image_url}}" height="50">
                            </td>
                            <td class="text-center">
                                <a href="{{url('/products/'.$details->product->id)}}" target="_blank">{{$details->product->name}}</a>
                            </td>
                            <td> $ {{$details->product->price}}</td>
                            <td>{{$details->quantity}}</td>
                            <td> $ {{$details->quantity * $details->product->price }}</td>
                            <td class="td-actions">


                                <form action="{{url('/cart')}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input type="hidden" name="cart_dateil_id" value="{{$details->id}}">
                                    <a href="{{url('/products/'.$details->product->id)}}" target="_blank" rel="tooltip" title="Ver Productos" class="btn btn-warning btn-simple btn-xs">
                                        <i class="fa fa-info"></i>
                                    </a>
                                    <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>

                                </form>

                            </td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>

               <div class="text-center">
                   <form action="{{url('/order')}}" method="post">
                       {{csrf_field()}}
                    <button class="btn btn-primary btn-round">
                        <i class="material-icons">done</i>
                            Realizar Pedido
                        </button>
                   </form>
               </div>
            </div>
        </div>
    </div>
   @include('includes.footer')
@endsection


