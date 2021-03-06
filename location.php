<?php
require_once('config.php'); //contains $settings variable for the API
require_once('helper_functions.php');

if(isset($_POST['latitude']) && isset($_POST['longitude'])) {
  $url = "https://api.twitter.com/1.1/search/tweets.json";
  $requestMethod = "GET";

	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];

  $getfield = '?q=&geocode='.$latitude.','.$longitude.',1mi&result_type=recent';

  $twitter = new TwitterAPIExchange($twitterSettings);
  $resp = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();
  $tjson = json_decode($resp, true);

  $val = 0;
  foreach ($tjson['statuses'] as $status) {
    if ($status['coordinates'] === null)
      next;
    $val++;
?>
<div class="row tweetwrapper">
  <div class="col-sm-12">
    <div class="pull-left">
      <img src="<?php echo $status['user']['profile_image_url']; ?>"
        alt="<?php echo $status['user']['screen_name']; ?>"
        title="<?php echo $status['user']['screen_name']; ?>"
        class="img-responsive img-thumbnail avatar" />
      </div>
      <span class="tweet" title="<?php echo $status['created_at']; ?>">
        <a href="https://twitter.com/<?php echo $status['user']['screen_name']; ?>">
          @<?php echo $status['user']['screen_name']; ?>
        </a>
        <br/>
        <?php echo linkify($status['text']);
        ?>
        <br/>
        <small><?php echo $status['created_at']; ?></small>
      </span>
    </div>
</div>

<?php
  }
}
else {
  echo "<script>alert('Something went wrong with the AJAX request!')</script>";
}
?>