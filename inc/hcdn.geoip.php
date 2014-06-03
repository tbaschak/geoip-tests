<?php

/*
  HenchCDN PHP GeoIP Include

  Written by Theodore Baschak, June 2014

*/

function ipVersion($txt) {
  return strpos($txt, ":") === false ? 4 : 6;
}

?>
