#! /usr/bin/bash
echo "Testing local version"
php iping.php
chmod 755 iping.php
sudo cp iping.php /usr/bin/iping
echo "*** TESTING INSTALLED VERSION"
iping
