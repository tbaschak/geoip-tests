<?php
$list = array(
	"asn" => "asn.php",
	"city" => "city.php",
	"country" => "country.php"
	);
?>
<h1>List of tests</h1>
<ul>
<?php
foreach ($list as $i => $value) {
	printf("<li><a href='%s'>%s</a></li>\n", $value, $i);
}
?>
</ul>
