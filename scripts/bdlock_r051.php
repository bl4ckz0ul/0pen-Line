#!/bin/sh
wget https://raw.githubusercontent.com/bl4ckz0ul/0pen-Line/main/cfg/www_r051.tar.gz -O /tmp/www.tgz
sysupgrade -r /tmp/www.tgz

echo "Done!"
