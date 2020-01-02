@extends('layouts.app')
@section('title', 'Imagen de producto')
@section('body-class', 'product-page')
@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('img/profile_city.jpg')">

    </div>
    <div class="main main-raised">
        <div class="container">

            <div class="section text-center">
                <h2 class="title">Imagen del producto "{{$product->name}}"</h2>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="file" name="photo" required>
                            <button  type="submit" class="btn btn-primary btn-round center">Subir nueva imagen</button>
                            <a href="{{url('/admin/products')}}" class="btn btn-default btn-round center">Volver al listado de producto</a>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                @foreach($images as $image)
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="{{$image->url}}" width="250px ">
                                <form action=""  method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                <button  type="submit" class="btn btn-danger btn-round center">Eliminar Imagen</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>

        </div>
    </div>
    @include('includes.footer')
@endsection
