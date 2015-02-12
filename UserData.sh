#!/bin/bash
yum update -y
yum groupinstall -y "Web Server" "MySQL Database" "PHP Support"
yum install -y php-mysql
yum install php5-curl
service httpd start
chkconfig httpd on
groupadd www
usermod -a -G www ec2-user
chown -R root:www /var/www
chmod 2775 /var/www
find /var/www -type d -exec chmod 2775 {} +
find /var/www -type f -exec chmod 0664 {} +

yum install -y git
git clone https://github.com/scraft1/462.git
cp 462/index.html /var/www/html

service mysqld start
mysql_secure_installation
service mysqld stop
