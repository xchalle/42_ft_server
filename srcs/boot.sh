if [ "$AUTOINDEX" = "off" ]
	then
		sed -i 's/autoindex on/autoindex off/g' /etc/nginx/sites-available/wordpress
fi
openssl req -newkey rsa:4096 -x509 -sha256 -nodes -out /etc/nginx/ssl/localhost.pem -keyout /etc/nginx/ssl/localhost.key -subj "/C=FR/ST=Ile-de-France/L=Paris/O=mycorp/OU=IT/CN=www.localhost.com" 
service php7.3-fpm start
service mysql start
echo "CREATE DATABASE wp1 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;" | mysql -u root
echo "GRANT ALL ON wp1.* TO 'creator'@'localhost' IDENTIFIED BY 'creator1234';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
#service mysql restart
wp core install --url=http://localhost/wordpress/ --title=supersite --admin_user=admin_supersite --admin_password=admin_supersite --admin_email=admin@papamail.com --path=/var/www/localhost/wordpress/ --allow-root
service php7.3-fpm restart
service mysql restart
service nginx start
sleep infinity
