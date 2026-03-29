FROM php:8-apache

COPY html/ /var/www/html/
ENV DEPLOY_ENV=production
RUN cp /usr/local/etc/php/php.ini-${DEPLOY_ENV} /usr/local/etc/php/php.ini && \
    mkdir -p /var/www/html/data 2>/dev/null && chown -R root:root /var/www/html/data && \
    sed -ri ' \
        s!^(\s*CustomLog)\s+\S+!\1 /proc/self/fd/1!g; \
        s!^(\s*ErrorLog)\s+\S+!\1 /proc/self/fd/2!g; \
        ' /usr/local/etc/php/php.ini

USER www-data

CMD ["apachectl", "-D", "FOREGROUND"]

VOLUME ["/docker-entrypoint-initdb.d"]
