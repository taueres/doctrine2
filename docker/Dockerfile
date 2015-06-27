FROM debian
RUN apt-get update #forced
RUN apt-get install -y apt-utils
RUN apt-get install -y curl vim
RUN apt-get install -y php5
RUN apt-get install -y php5-mysql php5-curl php5-xdebug php5-sqlite

RUN echo "date.timezone = Europe/Rome" >> /etc/php5/apache2/php.ini
RUN echo "date.timezone = Europe/Rome" >> /etc/php5/cli/php.ini

RUN echo "xdebug.remote_autostart = 1" >> /etc/php5/cli/php.ini
RUN echo "xdebug.remote_enable = 1" >> /etc/php5/cli/php.ini
RUN echo "xdebug.remote_host = 172.17.42.1" >> /etc/php5/cli/php.ini
RUN echo "xdebug.idekey = PHPSTORM" >> /etc/php5/cli/php.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer

CMD apache2ctl -D FOREGROUND
