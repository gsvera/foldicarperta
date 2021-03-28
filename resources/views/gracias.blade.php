@extends('layouts.plantilla')

@section('content')
<div class="banner-gracias text-center">
    <img class="icono-camion" src="assets/ICONOS/CAMION.png" alt="Icono camion">
    <h1 class="subtitle-thanks"><strong>¡GRACIAS POR ESCRIBIRNOS!</strong></h1>
    <p class="text-thanks text-center">Tu mensaje fue enviado correctamente y muy pronto será respondido, así que te 
    sugerimos estar al pendiente de tu bandeja de entrada o bandeja de correo no deseado (SPAM).</p>
    <br class="element-display">
    <a class="link-home" href="{{url('/')}}">Volver a la pagina de inicio</a>
</div>
@endsection