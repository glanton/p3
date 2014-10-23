@extends ('_master')


@section('head')
    
@stop


@section('content')
    
    @foreach ($generatedParagraphs as $paragraph)
        <p>
        @foreach ($paragraph as $sentence)
            {{ $sentence }}
        @endforeach
        </p>
    @endforeach
    
@stop


@section('footer')

@stop