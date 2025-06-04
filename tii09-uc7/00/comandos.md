#!/bin/bash

# https://www.digitalocean.com/community/tutorials/how-to-install-lamp-stack-on-ubuntu
# Update and upgrade system
sudo apt update
sudo apt upgrade -y

# Install VSCode
sudo snap install code --classic

# Install Apache2
sudo apt install apache2 -y

# Install MySQL
sudo apt install mysql-server -y

# Set MySQL root password and secure installation
sudo mysql -e "ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'Root@123'; FLUSH PRIVILEGES;"

# Secure MySQL: remove anonymous users, disallow remote root login, remove test DB
sudo mysql -u root -pRoot@123 <<EOF
DELETE FROM mysql.user WHERE User='';
DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost');
DROP DATABASE IF EXISTS test;
DELETE FROM mysql.db WHERE Db='test' OR Db='test\\_%';
FLUSH PRIVILEGES;
EOF

# Install PHP
sudo apt install php libapache2-mod-php php-mysql -y

# Set ownership of web root
sudo chown -R $USER:$USER /var/www/html/
