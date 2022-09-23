#!/bin/sh
wget https://raw.githubusercontent.com/bl4ckz0ul/0pen-Line/main/fw/sbr051_pci.bin -O /tmp/firmware.bin
mtd -r write /tmp/firmware.bin /dev/mtd4 > /dev/null 2>&1
