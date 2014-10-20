@extends ('_master')


@section('head')
    
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