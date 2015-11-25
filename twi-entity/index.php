<?php
require_once('TwitterAPIExchange.php');
$settings = array(
    'oauth_access_token' => "350033240-B2ixMMHiaBND7rVmjQecD3YvgZjbHzjpTcwWDPBp",
    'oauth_access_token_secret' => "JQzLpg3YFSHHOFyIbmM4dzl73jzCXWWcdHLtjZGG99k",
    'consumer_key' => "zFs5cu1pKaD8nwZeMdrA",
    'consumer_secret' => "5AOdK204ZZ14wby0NMg29YFE48Me9Zwkf81OpJ1xQ"
);
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=mila kunis';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest();

echo $response;
