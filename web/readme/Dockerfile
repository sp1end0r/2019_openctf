FROM eboraas/apache:stretch
RUN apt-get update && apt-get -y install php php-mysql libapache2-mod-php && apt-get clean && rm -rf /var/lib/apt/lists/*
RUN /usr/sbin/a2enmod mpm_prefork
ADD chicken.tar.gz /var/www/html
COPY index.php /var/www/html/
COPY buy.php/var/www/html
COPY imgae.php /var/www/html
WORKDIR /var/www/html
EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]


