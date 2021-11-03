#!/bin/sh
# /etc/init.d/anabasii-startup.sh

### BEGIN INIT INFO
# Provides:          anabasii-startup.sh
# Required-Start:    $remote_fs $syslog
# Required-Stop:     $remote_fs $syslog
# Default-Start:     2 3 4 5
# Default-Stop:      0 1 6
# Short-Description: Start daemon at boot time
# Description:       Enable service provided by daemon.
### END INIT INFO

watch -n 60 /var/www/html/clean.sh