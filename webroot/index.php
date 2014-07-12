<?php

include("../inc/config.inc.php");
include("../inc/hcdn.geoip.php");

$list = array(
	"asn" => "asn.php",
	"city" => "city.php",
	"country" => "country.php"
	);

//$ip = $_SERVER["REMOTE_ADDR"];
$ip = $_SERVER["HTTP_X_REAL_IP"];
$ipver = ipVersion($ip);

?>
<h1>List of geoip-tests</h1>
<ul>
<?php

foreach ($list as $i => $value) {
	printf("<li><a href='%s'>%s</a></li>\n", $value, $i);
}

?>
</ul>

<?php

echo "<p>You are viewing this page over IPv".$ipver.".</p>";

?>
