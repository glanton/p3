@extends ('_master')


@section('head')
    <link rel='stylesheet' href='{{ asset('css/profile_output.css') }}'>
@stop


@section('content')
        
    @for ($i = 0; $i < $numberOfProfiles; $i++)
        
            @if ($includePicture == true)
                <div class="profileSection">
                <img class="picture" src='data:image/png;base64,{{ $generatedPictures[$i] }}' alt='generated profile picture'>
            @endif
            
            <div class="profileTextSection">
                <div class="name">{{ $generatedNames[$i] }}</div>
                    
                @if ($includeBirthday == true)
                    <div class="birthday">{{ $generatedBirthdays[$i] }}</div>
                @endif
                
                @if ($includeLocation == true)
                    <div class="location">{{ $generatedLocations[$i] }}</div>
                @endif
                
                @if ($includeFavoriteQuote == true)
                    <div class="quote"><em>{{ $generatedQuotes[$i] }}</em></div>
                @endif
            </div>
                
            <!--to close extra spacing div if profile pictures are included-->
            @if ($includePicture == true)
                </div>
            @endif
        <br><br>
    @endfor
    
@stop


@section('footer')

@stop