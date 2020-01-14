@extends('layouts.app')
@section('title', 'Registrar nueva Categoria')
@section('body-class', 'landing-page sidebar-collapse')
@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('img/profile_city.jpg')">

    </div>
    <div class="main main-raised">
        <div class="container">

            <div class="section text-center">
                <h2 class="title">Registrar nueva Categoria</h2>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{url('/admin/categories')}}" method="post">
                    {{csrf_field()}}
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre de la categoria</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <textarea class="form-control" placeholder="Descripción corta" rows="5" name="description"></textarea>
                    <button class="btn btn-primary">Registrar Nueva Categoria</button>
                    <a href="{{url('/admin/categories')}}" class="btn btn-default">Cancelar</a>


                </form>

            </div>

        </div>
    </div>
    @include('includes.footer')
@endsection
