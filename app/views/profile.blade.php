@extends ('_master')


@section('head')
    <link rel='stylesheet' href='{{ asset('css/profile_output.css') }}'>
@stop


@section('content')
    ...profile response data: 
    {{{ $numberOfProfiles }}}
    {{{ $includeBirthday }}}
    {{{ $includeLocation }}}
    {{{ $includePicture }}}
    <br><br>
    <p>dummy profile data displayed here</p>
        
    @foreach ($generatedProfiles as $profile)
        <img src='data:image/png;base64,{{$profile}}'>
        <br><br>
    @endforeach
@stop


@section('footer')

@stop