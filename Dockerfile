FROM debian:buster
MAINTAINER timlecou <timlecou@student.42.us.org>
COPY srcs/nginx-host-conf ./root/
COPY srcs/config.inc.php ./root/
COPY srcs/wordpress.sql ./
COPY srcs/start.sh .
RUN apt-get update && apt-get -y upgrade && apt-get install -y nginx
RUN apt-get install -y wget && apt-get install -y mariadb-server
RUN apt-get install -y php7.3 php-fpm php-cgi php-mysqli php-pear \
	php-mbstring php-gettext php-common php-phpseclib php-mysql \
	php-curl php-gd php-intl php-soap php-xml php-xmlrpc php-zip
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.zip && \
	apt install unzip -y && \
	unzip phpMyAdmin-4.9.0.1-all-languages.zip && \
	mv phpMyAdmin-4.9.0.1-all-languages /usr/share/phpmyadmin && \
	rm phpMyAdmin-4.9.0.1-all-languages.zip
RUN ln -s /usr/share/phpmyadmin/ /var/www/localhost
RUN cp ./root/config.inc.php /usr/share/phpmyadmin/config.inc.php
RUN mkdir /etc/nginx/ssl && chmod 700 /etc/nginx/ssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=US/ST=CA/L=Fremont/O=42/CN=timlecou' -keyout /etc/ssl/certs/localhost.key -out /etc/ssl/certs/localhost.crt
RUN mkdir -p /var/www/localhost
ADD srcs/wordpress /var/www/wordpress
EXPOSE 80 443
CMD tail -f /dev/null
