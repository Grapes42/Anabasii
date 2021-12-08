#!/bin/bash

if [ "$EUID" -ne 0 ]
then
	echo "Please run this script as root"
	exit
else
	apt update && apt upgrade
	apt install gawk apache2 php7.4 php7.4-fpm
	a2enmod proxy_fcgi setenvif
	rm -rf /var/www/html
	mv ~/Anabasii /var/www/html
	chmod -R 777 /var/www/html/uploads
	cp /var/www/html/configFiles/000-default.conf /etc/apache2/sites-available/000-default.conf
	cp /var/www/html/configFiles/php.ini /etc/php/7.4/fpm/php.ini
	cp /var/www/html/configFiles/anabasii-clean.service /etc/systemd/system/anabasii-clean.service
	systemctl daemon-reload
	systemctl enable anabasii-clean.service
	reboot
fi
