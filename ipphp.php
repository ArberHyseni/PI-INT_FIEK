<!DOCTYPE html>

<html lang = "en">
<head>
	<title> PHP read from JS SCRIPT</title>
    <meta charset = "utf-8" />
	<style>
	input[type=text], select {
		padding: 10px 15px;
		margin: 6px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
}
input[type=button] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 50px;
  margin: 4px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=button]:hover {
  background-color: #45a049;
}

body {
        font-family: Arial;
        font-size: 0.95em;
        color: #929292;
    }

    .report-container {
        border: #E0E0E0 1px solid;
        padding: 20px 40px 40px 40px;
        border-radius: 2px;
        width: 550px;
        margin: 0 auto;
        background-color: whitesmoke;
		margin-top: 40px;
		}
		

    .weather-icon {
        vertical-align: middle;
        margin-right: 20px;
    }

    .weather-forecast {
        color: #212121;
        font-size: 1.2em;
        font-weight: bold;
        margin: 20px 0px;
    }

    span.min-temperature {
        margin-left: 15px;
        color: #929292;
    }

    .time {
        line-height: 25px;
    }
	</style>
</head>
    
	<body>
        <h3>Enter a domain name: </h3>
		<form>
		<input type="text" placeholder="Enter domain name" size="38" id="url" />
		<input type="button" value="Resolve !"
				onclick="request('ajaxdemo',
								'echoip.php?'+document.getElementById('url').value);" />
		<p>IP:</p> <span id="ajaxdemo"></span>
		</form>
		<span class="ajaxdemo"></span>
        <div id="result">
        </div>

		<script type="text/javascript">
		// start an ajax request
			function request(domId, query)
			{
			var ajaxObject = new XMLHttpRequest();
			if (!ajaxObject)
				return false;
			ajaxObject.onreadystatechange = function()
				{
					if (ajaxObject.readyState == 4 && ajaxObject.status == 200)
					document.getElementById(domId).innerHTML = ajaxObject.responseText;
				};
			ajaxObject.open('GET', encodeURI(query), true);
			ajaxObject.send(null);
			return true;
			}
		</script>
		<?php
			$apiKey = "b719ae191a4ead510b53b6baba924812";
			$cityId = "786714";
			$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

			$ch = curl_init();

			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_VERBOSE, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$response = curl_exec($ch);

			curl_close($ch);
			$data = json_decode($response);
			$currentTime = time();
		?>

		<div class="report-container">
        <h2><?php echo $data->name; ?> Weather</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;C<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;C</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>


		</div>
    </body>
</html>