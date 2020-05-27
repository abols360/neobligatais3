<html>
<head>
<style>
body  {
     
  background-image: url("Backg.jpg");
  background-size: cover;
  background-attachment: scroll;
}
</style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Citāti</h1>

    <?php

require 'vendor/autoload.php';
$client = new \GuzzleHttp\Client([
 'base_uri' => 'https://api.quotable.io/',
]);
$response = $client->get('random');
$quote = json_decode($response->getBody(), TRUE);
print
"<h3>".$quote['content']."</h3><br>".$quote['author'];
?>
<h3>Citi slaveni citāti</h3>
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="twan.jpg" alt="MArks Tvens" style="width:60%;">
      </div>

      <div class="item">
        <img src="buda.jpg" alt="Buda" style="width:60%;">
      </div>
    
      <div class="item">
        <img src="arno.jpg" alt="Arnolds Švarcneigers" style="width:60%;">
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div>
</body>
</html>

