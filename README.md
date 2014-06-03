geoip-tests
===========

PHP GeoIP Tests

Setup
-----

``` bash
git clone https://github.com/henchman21/geoip-tests.git
cd geoip-tests
git submodule init
git submodule update
```

Getting the Maxmind GeoLite GeoIP Data
--------------------------------------

``` bash
cd geoip-tests
mkdir GeoIP
cd GeoIP
wget http://geolite.maxmind.com/download/geoip/database/GeoLiteCountry/GeoIP.dat.gz http://geolite.maxmind.com/download/geoip/database/GeoIPv6.dat.gz http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz http://geolite.maxmind.com/download/geoip/database/GeoLiteCityv6-beta/GeoLiteCityv6.dat.gz http://download.maxmind.com/download/geoip/database/asnum/GeoIPASNum.dat.gz http://download.maxmind.com/download/geoip/database/asnum/GeoIPASNumv6.dat.gz
for i in *.gz; do gunzip $i; done
```


Acknowledgements
----------------

This product includes GeoLite data created by MaxMind, available from
<a href="http://www.maxmind.com">http://www.maxmind.com</a>.
