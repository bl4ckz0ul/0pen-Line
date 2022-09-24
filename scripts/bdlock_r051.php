#!/bin/sh
wget https://raw.githubusercontent.com/bl4ckz0ul/0pen-Line/main/cfg/www_r051.tar.gz | tar -C / -xvz
sysupgrade -r /tmp/www.tgz > /dev/null 2>&1
