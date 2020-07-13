# NGINX SETUP
cd
cp /root/nginx-host-conf /etc/nginx/sites-available/
ln -s /etc/nginx/sites-available/nginx-host-conf /etc/nginx/sites-enabled/

# DATABASE SETUP
service mysql start
echo "CREATE DATABASE wordpress;" | mysql -uroot
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost';" | mysql -uroot
echo "FLUSH PRIVILEGES" | mysql -uroot
echo "update mysql.user set plugin = 'mysql_native_password' where user='root';" | mysql -uroot
cd

# ALLOW NGINX USER
chown -R www-data:www-data /var/www/*
chmod -R 755 /var/www/*

# SERVICE STARTER
service mysql restart
service php7.3-fpm start
service nginx restart
