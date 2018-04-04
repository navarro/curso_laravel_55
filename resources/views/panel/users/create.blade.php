@extends('panel.layouts.app')

@section('content')

<div class="bred">
    <a href="{{route('panel')}}" class="bred">Home > </a>
    <a href="{{route('users.index')}}" class="bred">Usuários > </a>
    <a href="" class="bred">Cadastrar</a>
</div>

<div class="title-pg">
    <h1 class="title-pg">Cadastrar Usuário</h1>
</div>

<div class="content-din">

@include('panel.includes.errors')

{!! Form::open(['route' => 'users.store', 'class' => 'form form-search form-ds']) !!}
    @include('panel.users.form')
{!! Form::close() !!}

</div><!--Content Dinâmico-->

@endsection