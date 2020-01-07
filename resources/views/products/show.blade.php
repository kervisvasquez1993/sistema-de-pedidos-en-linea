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
                                <img src="{{$product->featured_image_url}}" alt="Circle Image" class="img-raised img-fluid">
                            </div>
                            <div class="name">
                                <h3 class="title">{{$product->name}}</h3>
                                <h6>{{$product->category->name}}</h6>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="description text-center">
                    <p>{{ $product->long_description}}</p>
                </div>
                <div class="text-center">
                <button class="btn btn-primary btn-round" data-toggle="modal" data-target="#modalAddCart">
                    <i class="material-icons"> add</i>
                    Añadir al carrito
                </button>
                                <!-- Modal Core -->

                </div>

                <div class="tab-content tab-space">
                    <div class="active text-center gallery" id="studio">
                        <div class="row">
                            @foreach($images as $image)
                            <div class="col-md-3 card">
                                <img src="{{$image->url}}">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalAddCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Seleccione la cantidad</h4>
                </div>
                <form action="{{url('/cart')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <div class="modal-body">
                        <input type="number" name="quantity" value="1" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-info btn-simple">Añadir al carrito</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection
