<?php

$dir = 'samples';
$files = scandir($dir);

echo '<h3>Sonic Pi Samples...</h3>';

foreach ($files as $key => $value) {

	$pos = strpos($value,'.');

	if ($pos > 0) {
		$l = strlen($value);
		$ext = substr($value, ($l - $pos - 1) * -1);
		$filename = substr($value,0, $pos);
		if ($ext == 'mp3') {


echo <<<END

<audio id="$value" src="./$dir/$value"></audio>
<button style="background: #0f0" onclick="document.getElementById('$value').play()">Play</button>
<button style="background: #f00" onclick="document.getElementById('$value').pause()">Stop</button>
<span style="font-size: 16pt">$filename</span>
<br>

END;


		}
	}

}


?>