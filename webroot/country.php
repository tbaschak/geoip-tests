<?php

include("../inc/config.inc.php");
include("../inc/hcdn.geoip.php");
include("../lib/geoip-api-php/src/geoip.inc");

//$ip = $_SERVER["REMOTE_ADDR"];
$ip = $_SERVER["HTTP_X_REAL_IP"];
$ipver = ipVersion($ip);

if($ipver == 4)
{
  $gi = geoip_open($GEOIP_PATH . "/GeoIP.dat", GEOIP_STANDARD);
  $cc = geoip_country_code_by_addr($gi, $ip);
  $flag = strtolower($cc);
  $country = geoip_country_name_by_addr($gi, $ip);

} elseif($ipver == 6)
{
  $gi = geoip_open($GEOIP_PATH . "/GeoIPv6.dat", GEOIP_STANDARD);
  $cc = geoip_country_code_by_addr_v6($gi, $ip);
  $flag = strtolower($cc);
  $country = geoip_country_name_by_addr_v6($gi, $ip);

} else
{
  // shouldn't get here, error out
  print "error, no IP";
  exit();
}

printf("<img src='flag/png/%s.png'>%s", $flag, $country);

geoip_close($gi);

?>
