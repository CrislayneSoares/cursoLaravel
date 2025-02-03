@extends('layouts')
@section('content')

@endsection
    <body>
        <h1>Página inicial</h1>
        <!-- <p>Data local: {{ \Carbon\Carbon::now()-> format('d/m/Y H:i:s') }} </p> -->
         <a href="{{ route('courses.show') }}">Visualizar</a>
    </body>

