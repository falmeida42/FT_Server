service nginx start;

service mysql start;

service php7.3-fpm start;

#-------- CRIANDO E CONFIGURANDO UM BANCO DE DADOS NO Wordpress ------------------------------------------------
echo "CREATE DATABASE wordpress;" | mysql -u root --skip-password;

echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost' WITH GRANT OPTION;" | mysql -u root --skip-password;

echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password;

echo "update mysql.user set plugin=' ' where user='root';" | mysql -u root --skip-password;
#---------------------------------------------------------------------------------------------------------------

service nginx restart;

service php7.3-fpm restart;

sleep infinity