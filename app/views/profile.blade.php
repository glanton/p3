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
@stop


@section('footer')

@stop