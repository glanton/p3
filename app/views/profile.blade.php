@extends ('_master')


@section('head')
    <link rel='stylesheet' href='{{ asset('css/profile_output.css') }}'>
@stop


@section('content')
        
    @foreach ($generatedProfiles as $profile)
        <img src='data:image/png;base64,{{$profile}}' alt='generated profile picture'>
        <br><br>
    @endforeach
    
@stop


@section('footer')

@stop