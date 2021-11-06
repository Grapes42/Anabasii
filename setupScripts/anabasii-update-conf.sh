#!/bin/bash

if [ "$EUID" -ne 0 ]
then
	echo "Please run this script as root"
	exit
else
	cp /var/www/html/configFiles/000-default.conf /etc/apache2/sites-available/000-default.conf
	cp /var/www/html/configFiles/php.ini /etc/php/7.3/fpm/php.ini
	cp /var/www/html/configFiles/anabasii-clean.service /etc/systemd/system/anabasii-clean.service
	systemctl daemon-reload
	systemctl restart anabasii-clean.service
	service apache2 restart
fi
