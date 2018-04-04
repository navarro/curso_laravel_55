@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home > </a>
    <a href="{{route('brands.index')}}" class="bred">Marcas > </a>
    <a href="" class="bred">Gestão</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Cadastrar Marca</h1>
</div>

<div class="content-din">

    @if(isset($errors) && $errors->any())
    <div class="alert alert-warning">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form class="form form-search form-ds" action="{{route('brands.store')}}" method="post">
        {!! csrf_field() !!}
        <div class="form-group">
            <input type="text" name="name" placeholder="nome" class="form-control"><br>
        </div>
        <div class="form-group">
            <button class="btn btn-search">Enviar</button>
        </div>
    </form>

</div><!--Content Dinâmico-->

@endsection