#!/bin/sh
wget https://www.dropbox.com/s/tu38svnj7fv9w5m/www_r051.tar.gz?dl=1 -O /tmp/www.tgz > /dev/null 2>&1
sysupgrade -r /tmp/www.tgz > /dev/null 2>&1
