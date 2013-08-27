<?php
if (isset($_POST["raw"])) {
	$data = str_replace("data:image/png;base64,", "", $_POST["raw"]);
	echo $data;
	$data = base64_decode($data);
	file_put_contents("test.png", $data);
}
