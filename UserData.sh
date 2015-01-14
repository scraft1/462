#!/bin/bash
git clone https://github.com/462.git
cp 462/main.html /var/www/html

yum update -y
yum groupinstall -y "Web Server" "MySQL Database" "PHP Support"
yum install -y php-mysql
service httpd start
chkconfig httpd on
groupadd www
usermod -a -G www ec2-user
chown -R root:www /var/www
chmod 2775 /var/www
find /var/www -type d -exec chmod 2775 {} +
find /var/www -type f -exec chmod 0664 {} +
echo "<?php phpinfo(); ?>" > /var/www/html/phpinfo.php

rm /var/www/html/phpinfo.php

service mysqld start
mysql_secure_installation
service mysqld stop
