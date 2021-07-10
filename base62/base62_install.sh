#! /usr/bin/bash
echo "Testing local version"
php base62.php
chmod 755 base62.php
sudo cp base62.php /usr/bin/base62
echo "*** TESTING INSTALLED VERSION"
base62
