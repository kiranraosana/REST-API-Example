<?php

$api_url = 'http://example.com/exampleweb/api/v1';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// print_r($response_data); die();

foreach ($response_data as $data) {
        echo "name: ".$data->title;
        echo "<br /> <br />";
        echo "body: ".$data->description;
        echo "<br /> <br />";
        echo "URL: ".$data->url;
        echo "<br /> <br />";
        echo "URL: ".$data->date;
        echo "<br /> <br />";
}
?>
