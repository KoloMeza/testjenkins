0	0	*	*	*	https://tienda306.com/managertien306da22/index.php?controller=AdminSearch&action=searchCron&ajax=1&full=1&token=70y21m46&id_shop=1	    
*/5	*	*	*	*	php /home2/tienda306/public_html/integracionalegra/clientesalegra.php >/dev/null 2>&1	    
*/5	*	*	*	*	php /home2/tienda306/public_html/integracionalegra/getidproductalegra.php >/dev/null 2>&1	    
*	*	*	*	*	php /home2/tienda306/public_html/integracionalegra/getproduct.php >/dev/null 2>&1	    
0	0	*	*	0	https://tienda306.com/module/webpgenerator/cron?key=0	    
*/5	*	*	*	*	php /home2/tienda306/public_html/integracionalegra/actualizarclientenuevo.php >/dev/null 2>&1	    
*/5	*	*	*	*	php /home2/tienda306/public_html/integracionalegra/sendinvoice.php >/dev/null 2>&1	    
*/10	*	*	*	*	php /home2/tienda306/public_html/integracionalegra/resendinvoice.php >/dev/null 2>&1	    
0	1	*	*	6	https://tienda306.com/modules/gsitemap/gsitemap-cron.php?token=5d14631b0b&id_shop=1



docker run -d --name wordpress-container -p 8080:8080 -e WORDPRESS_DB_HOST=mysql-container -e WORDPRESS_DB_USER=wordpress -e WORDPRESS_DB_PASSWORD=otracontraseña -v "$PWD/html:/var/www/html" -e VIRTUAL_HOST=blog.renovado --expose 80 --network=bridge wordpress:fpm

docker run -d --name wordpress-container -p 80:8080 -p 443:8443 bitnami/wordpress:latest

docker run -d --name wordpress-container -p 8080:8080 -p 8443:8443 bitnami/wordpress:latest


MYSQL 
docker run -d --name mysql-container -e MYSQL_ROOT_PASSWORD=Laputamadre.2022 mysql:latest


CREATE USER 'blog306'@'%' IDENTIFIED BY 'tienda306blog';
GRANT ALL PRIVILEGES ON blogtienda306.* TO 'blog306'@'%';
FLUSH PRIVILEGES;


CREATE USER 'wordpress'@'%' IDENTIFIED BY 'wordpress';

GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpress'@'%';

FLUSH PRIVILEGES;


docker run -d --name tienda306blog-db-1 -e MYSQL_ROOT_PASSWORD=root -p 36525:3306 mysql:latest

este es un cambio