<!DOCTYPE html>
<html>
<head>
    <title>Static</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- for mobile, yo -->
    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"> <!-- required for animations -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/app.css"> <!-- user css -->
</head>
<body>
<div class="root-body">
<div class="padding-container">
    <div class="padding-wrapper">
        <iframe src="http://www.arrstatus.com/embed/pages/embed_0.html" frameborder="0" scrolling="no"></iframe>
        <iframe src="http://www.arrstatus.com/embed/pages/embed_11.html" frameborder="0" scrolling="no"></iframe>
        <!-- This is just for spacing -->
    </div>
</div>
<div class="search-bar-container">
    <div class="search-bar-wrapper">
        <form class="uptilt-form" method="get" >
            <div class="input-group">
                <input type="text" id="uptilt-input" autofocus />
                <label for="uptilt-input">Google knows everything...</label>
            </div>
            <button type="submit" class="ut-button ut-search-submit">Search for it<i class="fa fa-lg fa-arrow-circle-right"></i></button>
        </form>
    </div>
</div> <!-- search bar container -->
<div class="middle-section">
    <div class="rss-container">
        <div class="rss-wrapper">
            <h4>{!! $feed->get_title() !!}</h4>
            <p>RSS Feed</p>
            <hr>
            <div class="rss-articles-wrap">
                @foreach($feed->get_items() as $item)
                    <div class="rss-article">
                        <div class="article-title">
                            <h5>{!! $item->get_title() !!}</h5>
                            <small>{!! $item->get_date() !!}</small>
                        </div>
                        <div class="article-body">
                            {!! $item->get_content() !!}
                        </div>
                        <div class="article-footer">

                        </div>
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
    </div> <!-- rss-container -->
    <div class="lodestone-container">
        <div class="lodestone-wrapper">
            <h4 class="character-name"></h4>
            <div class="character-joblv"></div>
            <div class="character-portrait"></div>
            <div class="character-gcinfo"></div>
            <hr>
            <div class="character-class-wrap">
                <div class="character-classes"></div>
            </div>
            <hr>
            <div class="character-minion-wrap">
                <div class="character-minions"></div>
            </div>
            <hr>
            <div class="character-mount-wrap">
                <div class="character-mounts"></div>
            </div>
            <hr>
        </div>
    </div> <!-- lodestone-container -->
</div> <!-- middle-section -->
</div> <!-- root-body -->

<!-- END OF BODY DUDE. STOP GENERAL CONTENT HERE. -->

<!-- This is where you put the modals man. -->
<div class="root-modals">
    <!-- Modal Content -->
</div> <!-- root-modals -->

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> <!-- required -->
<script src="assets/js/compiled.js"></script> <!-- user js sheet -->
<script src="assets/js/app.js"></script> <!-- user js sheet -->
<!-- Scripts -->
</body>
</html>