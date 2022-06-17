#!/bin/sh

# check for phpmyadmin
if [ ! -d "/var/www/html/phpmyadmin" ]; then
	echo "[INFO] installing phpmyadmin..."
	wget -q "http://files.directadmin.com/services/all/phpMyAdmin/phpMyAdmin-5.0.2-all-languages.tar.gz" || (echo "[ERROR] wget failed, installation failed")
	tar zxf "phpMyAdmin-5.0.2-all-languages.tar.gz"
	rm "phpMyAdmin-5.0.2-all-languages.tar.gz"
	mv "phpMyAdmin-5.0.2-all-languages" "phpmyadmin"
	cp "/var/www/html/wordpress/phpmyadmin/config.sample.inc.php" "/var/www/html/wordpress/phpmyadmin/config.inc.php"
	sed -i "s|localhost|$MYSQL_HOST|g" /var/www/html/wordpress/phpmyadmin/config.inc.php
fi
