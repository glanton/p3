@extends ('_master')


@section('head')
    
@stop


@section('content')
    
    <br><br>
    
    @foreach ($generatedParagraphs as $paragraph)
        @foreach ($paragraph as $sentence)
            {{ $sentence }}
        @endforeach
        <br><br>
    @endforeach
    
@stop


@section('footer')

@stop