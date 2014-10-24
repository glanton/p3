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
        <div class="titleBlock">
            <div class="title">
                <h1><span class="litFont">Lit</span><span class="sumFont">sum</span></h1>
            </div> 
            <div class="litSumSub">Test your website. Write a classic.</div>
        </div>
        
        <div class="description">
            Mine the masterpieces of the English language for your web development needs. Specify how many dummy paragraphs you require, and let Litsum forge a new classic. 
        </div>
    </div>
       
        
    <div class="right">
        <div class="titleBlock">
            <div class="title alignRight">
                <h1 class="alignRight"><span class="proFont">proProfile</span></h1>
            </div> 
            <div class="proProfileSub alignRight">Save time and make people.</div>
        </div>
        
        <div class="description">
            Why corral data from real people to test profiles when you can generate people on the fly? Tell proProfile  what you need and let a crowd populate in seconds.
        </div>            
    </div>
    
    
    <div class="selection">
    
        <div class="tab" id="textFormTab">Paragraphs</div>
        <div class="tab" id="profileFormTab">Profiles</div>
    
        <!-- form for selecting number of dummy paragraphs -->  
        {{ Form::open(array('class' => 'formSection', 'id' => 'textForm', 'url' => 'text/form', 'method' => 'GET')) }}
            {{ Form::input('number', 'numberOfParagraphs', $numberOfParagraphs, array('id' => 'numberOfParagraphs', 'max' => '50')) }}
            {{ Form::label('numberOfParagraphs', 'Number of Paragraphs') }}
            <br>
            {{ Form::submit('Submit') }}
        {{ Form::close() }}
        
        
        <!-- form for selecting dummy profile options -->
        {{ Form::open(array('class' => 'formSection', 'id' => 'profileForm', 'url' => 'profile/form', 'method' => 'GET')) }}
            {{ Form::input('number', 'numberOfProfiles', $numberOfProfiles, array('id' => 'numberOfProfiles', 'max' => '50')) }}
            {{ Form::label('numberOfProfiles', 'Number of Profiles') }}
            <br>
            <div class="checkCol">
                {{ Form::checkbox('includeBirthday', 'true', $includeBirthday, array('id' => 'includeBirthday')) }}
                {{ Form::label('includeBirthday', 'Birthdate') }}
                <br>
                {{ Form::checkbox('includePicture', 'true', $includePicture, array('id' => 'includePicture')) }}
                {{ Form::label('includePicture', 'Profile Picture') }}
            </div>
            <div class="checkCol">
                {{ Form::checkbox('includeLocation', 'true', $includeLocation, array('id' => 'includeLocation')) }}
                {{ Form::label('includeLocation', 'City/Country') }}
                <br>
                {{ Form::checkbox('includeFavoriteQuote', 'true', $includeFavoriteQuote, array('id' => 'includeFavoriteQuote')) }}
                {{ Form::label('includeFavoriteQuote', 'Favorite Quote') }}
            </div>
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