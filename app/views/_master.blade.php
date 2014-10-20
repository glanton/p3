<!DOCTYPE html>
<html>
<head>

    <title>Developer's Best Friend</title>

    <meta charset='utf-8'>
    <link rel='stylesheet' href='{{ asset('css/master.css') }}'>

    @yield('head')

</head>
<body>

    <p>....master view online</p>
    
    
    <!-- form for selecting number of dummy paragraphs -->  
    {{ Form::open(array('url' => 'text/form', 'method' => 'GET')) }}
        {{ Form::label('numberOfParagraphs', 'How many paragraphs?') }}
        {{ Form::select('numberOfParagraphs', array(
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
            '7' => '7'
        ), $numberOfParagraphs) }}
        {{ Form::submit('Submit') }}
    {{ Form::close() }}
    
    
    <!-- form for selecting dummy profile options -->
    {{ Form::open(array('url' => 'profile/fom', 'method' => 'GET')) }}
        {{ Form::label('numberOfProfiles', 'How many profiles?') }}
        {{ Form::text('numberOfProfiles', $numberOfProfiles)}}
        {{ Form::label('includeBirthday', 'Include birthday?') }}
        {{ Form::checkbox('includeBirthday', 'yes', $includeBirthday) }}
        {{ Form::label('includeLocation', 'Include location?') }}
        {{ Form::checkbox('includeLocation', 'yes', $includeLocation) }}
        {{ Form::label('includePicture', 'Include picture?', $includePicture) }}
        {{ Form::checkbox('includePicture', 'yes') }}
        {{ Form::submit('Submit') }}
    {{ Form::close() }}

    @yield('content')

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>

    @yield('footer')

</body>
</html>