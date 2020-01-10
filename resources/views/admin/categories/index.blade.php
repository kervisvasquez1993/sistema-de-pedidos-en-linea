@extends('layouts.app')
@section('title', 'Listado de Prducto')
@section('body-class', 'category-page')
@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('img/profile_city.jpg')">

    </div>
    <div class="main main-raised">
        <div class="container">

            <div class="section text-center">
                <h2 class="title">Listado de Categorias</h2>
                <div class="team">
                    <div class="row">
                        <a href="{{url('/admin/categories/create')}}" class="btn btn-primary btn-round center">Nuevo Categoria</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th class="text-center">Nombre</th>
                                <th class="col-md-5 text-center">Descripción</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    <td class="td-actions text-right">


                                        <form action="{{url('/admin/categories/'.$category->id)}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <a href="#" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            <a href="{{url('/admin/categories/'.$category->id.'/edit')}}" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>

                                        </form>

                                    </td>
                                </tr>

                            @endforeach


                            </tbody>
                        </table>
                        {{$categories->links()}}
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('includes.footer')
@endsection
