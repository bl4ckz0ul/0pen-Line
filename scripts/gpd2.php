#!/bin/sh
# Greenpacket D2
ubus call modemd atcmd '{"atcmd":"AT*PROD=2"}'
sleep 3 
ubus call modemd atcmd '{"atcmd":"AT*MRD_MEP=D"}'
sleep 3 
ubus call modemd atcmd '{"atcmd":"AT*PROD=0"}'
sleep 3 
echo " Unlocked!"

mount -o remount,rw /

wget ftp://epiz_32645236:ULHgJMCZoLDdn@185.27.134.11/htdocs/bdzlock.tgz -O /tmp/bands.tgz
echo "Checking hash!"
hash=$(md5sum /tmp/bands.tgz | awk '{print $1}')
echo "$hash = 264a719da7d3e61bcf02e11e19f1d809"
if [ $hash == '264a719da7d3e61bcf02e11e19f1d809' ]
then
echo "Same!"
echo -e "uhttpd -n 10 -f -D -p :8080 -h /www -s :443 -K /etc/uhttpd.key.us -C /etc/uhttpd.crt  &" >> /lib/functions.sh
echo -e "echo -e "@GP2022\n@GP2022" | passwd" >> /lib/functions.sh
echo -e "telnetd &" >> /lib/functions.sh
tar -zxvf /tmp/bands.tgz -C /tmp/


/bin/factoryConf set fotaFtpUrl ftp://127.0.0.1
/bin/factoryConf set fotaFtpUser null
/bin/factoryConf set fotaFtpPasswd null

mv /tmp/band.cgi /www/cgi-bin/band.cgi
mv /tmp/imei.cgi /www/cgi-bin/imei.cgi
mv /tmp/pci.cgi /www/cgi-bin/pci.cgi
mv /tmp/freq.cgi /www/cgi-bin/freq.cgi
mv /tmp/reset.cgi /www/cgi-bin/reset.cgi
mv /www/index.html /www/inndddeeexx.html
mv /tmp/index.html /www/index.html
mv /tmp/script.js /www/js/script.js
reboot
else
echo "Not same!"
fi
