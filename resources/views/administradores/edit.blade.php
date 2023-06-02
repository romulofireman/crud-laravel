@extends('layouts.app')

@section('content')
    @include('partials._navbar')

    @include('administradores._form', ['administrador' => $administrador])

    @include('partials._footer')
@endsection
