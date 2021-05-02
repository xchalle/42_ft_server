FROM	debian:buster

ENV	AUTOINDEX=on

RUN	apt-get update 
RUN	apt install mariadb-server -y
RUN	apt install mariadb-client -y
RUN	apt install nginx -y
RUN	apt install php7.3 php7.3-fpm php7.3-mysql -y
RUN	apt install php-mbstring php-zip php-gd -y
RUN	apt install wget -y
RUN	apt install systemd -y
RUN	wget https://wordpress.org/latest.tar.gz
RUN	tar -xzf latest.tar.gz
RUN	rm latest.tar.gz
RUN	wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
RUN	tar -xzf phpMyAdmin-4.9.0.1-all-languages.tar.gz
RUN	rm phpMyAdmin-4.9.0.1-all-languages.tar.gz
RUN	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
&& php wp-cli.phar --info \
&& chmod +x wp-cli.phar \
&& mv wp-cli.phar /usr/local/bin/wp
RUN	mkdir /var/www/localhost
RUN	mkdir /etc/nginx/ssl
#RUN	cp /var/www/html/index.nginx-debian.html /var/www/localhost/
RUN	mkdir /var/www/localhost/wordpress
RUN	mkdir /var/www/localhost/test
RUN	mkdir /var/www/localhost/phpmyadmin
RUN	cp -a wordpress/. /var/www/localhost/wordpress/
ADD	srcs/wp-config.php /var/www/localhost/wordpress/
RUN	cp -rf phpMyAdmin-4.9.0.1-all-languages/* /var/www/localhost/phpmyadmin/
RUN	chown -R www-data:www-data /var/www/*/*
RUN	chmod -R 755 /var/www/*/*
RUN	rm /etc/nginx/sites-available/default
RUN	rm /etc/nginx/sites-enabled/default
ADD	srcs/wordpress /etc/nginx/sites-available/
RUN	ln -s /etc/nginx/sites-available/wordpress /etc/nginx/sites-enabled/
#RUN	if [$AUTOINDEX = off]; then sed -i "s/autoindex on/autoindex off/g" /etc/nginx/sites-available/wordpress; fi
ADD	srcs/boot.sh ./

CMD	bash /boot.sh

EXPOSE	80
EXPOSE	443
