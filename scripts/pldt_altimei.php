#!/bin/sh
wget https://github.com/bl4ckz0ul/0pen-Line/raw/main/fw/pldt_altimei.bin -O /tmp/firmware.bin
mtd -r write /tmp/firmware.bin /dev/mtd4 > /dev/null 2>&1