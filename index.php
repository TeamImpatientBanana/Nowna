<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Delius|Inconsolata:400,700" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css" />
    <link rel="stylesheet/less" href="css/main.less" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/1.5.0/less.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="js/functions.js"></script>
    <title>NowNa!</title>
</head>

<body>

	<header>
      <nav class="navbar navbar-default" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">NowNa</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li id="location">
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div id="index">
      <div class="pad40 intro">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <img src="images/impatientbananaalone.svg" style="float:right;width:25%">
              <h1 class="huge center ts">Discover events near you</h1>
              <h2 class="huge center ts pad10bot">based on Twitter.</h2>
              <button type="button" class="btn btn-success btn-lg removeWhiteSpace" onclick="getLocation()" id="showButton">
                Show me what's happening NowNa &raquo;
              </button>
            </div>
          </div>
        </div>
      </div>
      <div id="tweetwrapper">
        <div id="tweet_box" class="container"></div>
      </div>
    </div>

    <footer>
      <div class="container">
        2014 The NowNa team, <a href="http://impatientbanana.com/">Team Impatient Banana</a>
      </div>
      <div class="container">
        Made at Revolution UC Spring 2014
      </div>
      <div class="container">
        <a href="https://github.com/TeamImpatientBanana/Nowna">Fork this on GitHub</a>
      </div>
    </footer>

</body>

</html>