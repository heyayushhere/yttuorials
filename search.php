<?php

$api_key = 'AIzaSyB8luell1QeM-ATGUw2WatBHsewTTKUUEE';

$search_query = 'computerscience';

$api_url = "https://www.googleapis.com/youtube/v3/search?part=snippet&q=$search_query&type=video&key=$api_key";

$response = file_get_contents($api_url);

$data = json_decode($response, true);   
foreach ($data['items'] as $video) {
    $title = $video['snippet']['title'];
    $video_id = $video['id']['videoId'];
    echo "<h2>$title</h2>";
    echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/$video_id' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe><br><br>";
  }
  
?>