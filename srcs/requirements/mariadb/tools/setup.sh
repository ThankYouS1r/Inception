#!/bin/bash

mysqld -u root & sleep 5

mysql -u root -e "CREATE DATABASE IF NOT EXISTS $DB_NAME;"

mysql -u root -e "CREATE USER IF NOT EXISTS '$DB_USER'@'%' IDENTIFIED BY '$DB_USER_PASSWORD';"

mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO '$DB_USER'@'%' WITH GRANT OPTION;"

mysql -u root -e "FLUSH PRIVILEGES;"

mysql -u root wordpress < "$DB_NAME".sql

mysql -u root -e "ALTER USER '$DB_ROOT'@'localhost' IDENTIFIED BY '$DB_ROOT_PASSWORD';"