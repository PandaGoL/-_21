#!/bin/sh

if [ ! -f /etc/vsftpd/vsftpd.conf.old ]; then
	echo "[INFO] configuring ftp..."
	mv /etc/vsftpd/vsftpd.conf /etc/vsftpd/vsftpd.conf.old
	mv /tmp/vsftpd.conf /etc/vsftpd/vsftpd.conf

	adduser $FTP_USER --disabled-password
	echo "$FTP_USER:$FTP_PASSWORD" | chpasswd

	echo $FTP_USER >> /etc/vsftpd.userlist

	mkdir -p /var/www/html
	chown -R $FTP_USER:$FTP_USER /var/www/html
fi

chown -R $FTP_USER:$FTP_USER /var/www/html

echo "[INFO] starting... FTP server"

vsftpd /etc/vsftpd/vsftpd.conf
