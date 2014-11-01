<?php
/* twitter.php */
 
require_once("twitteroauth.php"); //ここのパスは適宜に変更
  
// さっきメモしたやつを変数に代入
$consumerKey = "g1eRG99ViarK4uD4siv59Q"; //Consumer key
$consumerSecret = "Oog82kDwCFmQHhSNwgHZcOA7iOrn5vG5icperjIg9c"; //Consumer secret
$accessToken = "144510140-lQOpqOLBaVsTBq9jarVGxezyGD0qjzyEmXrHiD4N"; //Access token
$accessTokenSecret = "wzSvkF22DZ0JnZ7JYPCqcERVskK0qWMxVDF9Ooz3JJ2SY"; //Access token secret
  
$obj = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
$request = $obj -> OAuthRequest('https://api.twitter.com/1.1/statuses/user_timeline.json', 'GET', array('count'=>'1')); //ここの count で取得するツイート数をいじれます。とりあえず 4 つ。
echo $_GET['callback'] . '(' . $request . ')';
