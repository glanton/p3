<!DOCTYPE html>
<html>
<head>

    <title>Litsum | Pro Profile</title>

    <meta charset='utf-8'>
    <link rel='stylesheet' href='{{ asset('css/master.css') }}'>

    @yield('head')

</head>
<body>
    
    <div id="wrap">
    <div id="main">
        
        
    <div class="left">
        <div class="title">
            <h1><span class="litFont">Lit</span><span class="sumFont">sum</span></h1>
        </div> 
        <div class="litSumSub">Test your website. Write a classic.</div>
    </div>
       
        
    <div class="right">
        <div class="title alignRight">
            <h1 class="alignRight"><span class="proFont">proProfile</span></h1>
        </div> 
        <div class="proProfileSub alignRight">Save time and make people.</div>
    </div>
    
    
    <div class="selection">
    
        <div class="tab" id="textFormTab">Paragraphs</div>
        <div class="tab" id="profileFormTab">Profiles</div>
    
        <!-- form for selecting number of dummy paragraphs -->  
        {{ Form::open(array('class' => 'formSection', 'id' => 'textForm', 'url' => 'text/form', 'method' => 'GET')) }}
            {{ Form::label('numberOfParagraphs', 'How many paragraphs?') }}
            <br>
            {{ Form::select('numberOfParagraphs', array(
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7'
            ), $numberOfParagraphs) }}
            <br>
            {{ Form::submit('Submit') }}
        {{ Form::close() }}
        
        
        <!-- form for selecting dummy profile options -->
        {{ Form::open(array('class' => 'formSection', 'id' => 'profileForm', 'url' => 'profile/form', 'method' => 'GET')) }}
            {{ Form::label('numberOfProfiles', 'How many profiles?') }}
            <br>
            {{ Form::input('number', 'numberOfProfiles', $numberOfProfiles, ['max' => 30]) }}
            <br>
            {{ Form::label('includeBirthday', 'Include birthday?') }}
            {{ Form::checkbox('includeBirthday', 'yes', $includeBirthday) }}
            <br>
            {{ Form::label('includeLocation', 'Include location?') }}
            {{ Form::checkbox('includeLocation', 'yes', $includeLocation) }}
            <br>
            {{ Form::label('includePicture', 'Include picture?', $includePicture) }}
            {{ Form::checkbox('includePicture', 'yes') }}
            <br>
            {{ Form::submit('Submit') }}
        {{ Form::close() }}
            
    </div>
    
    
    <div class="content">
    
        <div class='generatedContentSection'>
            <div class='generatedContent'>
                @yield('content')
            </div>  
        </div>
        
    </div>
      
      
    </div>  
    </div>
    
    
    <!-- Sticky Footer... be sure to credit in readme.md -->
    <div id="footer">
        <div id="footerText">
            Alex Friberg | <a href="http://p1.alexf.me/">dwa15 portfolio</a>
        </div>
    </div>

    
    <!-- scripts: jQuery from Google and local script for switching forms -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' type='text/javascript'></script>
    <script src='{{ asset('scripts/master.js') }}' type='text/javascript'></script>

    @yield('footer')

</body>
</html>