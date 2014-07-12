<?php

include("../inc/config.inc.php");
include("../inc/hcdn.geoip.php");
include("../lib/geoip-api-php/src/geoipcity.inc");
include("../lib/geoip-api-php/src/geoipregionvars.php");

//$ip = $_SERVER["REMOTE_ADDR"];
$ip = $_SERVER["HTTP_X_REAL_IP"];
$ipver = ipVersion($ip);

if($ipver == 4)
{
  $gi = geoip_open($GEOIP_PATH . "/GeoLiteCity.dat", GEOIP_STANDARD);
  $record = geoip_record_by_addr($gi, $ip);

} elseif($ipver == 6)
{
  $gi = geoip_open($GEOIP_PATH . "/GeoLiteCityv6.dat", GEOIP_STANDARD);
  $record = geoip_record_by_addr_v6($gi, $ip);

} else
{
  // shouldn't get here, error out
  print "error, no IP";
  exit();
}

print $record->country_code . " " . $record->country_code3 . " " . $record->country_name . "\n";
print $record->region . " " . $GEOIP_REGION_NAME[$record->country_code][$record->region] . "\n";
print $record->city . "\n";
print $record->postal_code . "\n";
print $record->latitude . "\n";
print $record->longitude . "\n";
print $record->metro_code . "\n";
print $record->area_code . "\n";
print $record->continent_code . "\n";

geoip_close($gi);

?>
