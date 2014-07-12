<?php

include("../inc/config.inc.php");
include("../inc/hcdn.geoip.php");
include("../lib/geoip-api-php/src/geoip.inc");

//$ip = $_SERVER["REMOTE_ADDR"];
$ip = $_SERVER["HTTP_X_REAL_IP"];
$ipver = ipVersion($ip);

if($ipver == 4)
{
  $giasn = geoip_open($GEOIP_PATH . "/GeoIPASNum.dat", GEOIP_STANDARD);
  $asn = geoip_name_by_addr($giasn, $ip);

} elseif($ipver == 6)
{
  $giasn = geoip_open($GEOIP_PATH . "/GeoIPASNumv6.dat", GEOIP_STANDARD);
  $asn = geoip_name_by_addr_v6($giasn, $ip);

} else
{
  // shouldn't get here, error out
  print "error, no IP";
  exit();
}

print "$ip has asn " . $asn . "\n";

geoip_close($giasn);

?>
