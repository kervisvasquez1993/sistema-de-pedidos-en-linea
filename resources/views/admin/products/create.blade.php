@extends('layouts.app')
@section('title', 'bienvenido a vivery-shop')
@section('body-class', 'landing-page sidebar-collapse')
@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('img/profile_city.jpg')">

    </div>
    <div class="main main-raised">
        <div class="container">

            <div class="section text-center">
                <h2 class="title">Registrar nuevo Producto</h2>
                <form action="{{url('/admin/products')}}" method="post">
                    {{csrf_field()}}
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre del Producto</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Precio del producto</label>
                            <input type="number" class="form-control" name="price">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Categoria del producto</label>
                            <select name="category_id"  class="form-control">
                                <option value="0">General</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">
                                        {{$category->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Descripción corta</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                    </div>


                    <textarea class="form-control" placeholder="Descripcion extensa del producto" rows="5" name="long_description"></textarea>
                    <button class="btn btn-primary">Registrar producto</button>
                    <a href="{{url('admin/products')}}" class="btn btn-default">Cancelar</a>


                </form>

            </div>

        </div>
    </div>
    @include('includes.footer')
@endsection
