FROM alpine:3.13

RUN apk update && apk upgrade

RUN apk add vim bash

RUN apk add php7 php7-fpm php7-session php7-json \
	php7-mysqli php7-gd php7-xml php7-curl php7-iconv

COPY /conf/wp-config.php ./

RUN mkdir -p /usr/share/wp/

ARG DB_NAME
ARG DB_USER
ARG DB_USER_PASSWORD

COPY ./conf/latest.tar.gz ./
RUN tar -xzvf ./latest.tar.gz

RUN	rm latest.tar.gz

RUN	mv /wordpress /usr/share/wp/ && \
	mv /wp-config.php /usr/share/wp/wordpress/

RUN sed -e '/listen =/s/127.0.0.1/0.0.0.0/g' -i /etc/php7/php-fpm.d/www.conf

RUN sed -i "s/rDb_name/$DB_NAME/g" /usr/share/wp/wordpress/wp-config.php
RUN sed -i "s/rDb_user/$DB_USER/g" /usr/share/wp/wordpress/wp-config.php
RUN sed -i "s/rDb_password/$DB_USER_PASSWORD/g" /usr/share/wp/wordpress/wp-config.php

ENTRYPOINT ["/usr/sbin/php-fpm7"]

CMD ["-F"]