FROM alpine:3.13

VOLUME ["/sys/fs/cgroup"]

RUN apk update && apk upgrade

RUN apk add bash vim

RUN apk add mariadb mariadb-client

ARG DB_NAME
ARG DB_USER
ARG DB_ROOT
ARG DB_USER_PASSWORD
ARG DB_ROOT_PASSWORD

RUN sed -e '/skip-networking/s/^/#/g' -i /etc/my.cnf.d/mariadb-server.cnf

RUN mkdir /run/mysqld
COPY ./conf/wordpress.sql /

COPY ./conf/my.cnf /etc/

COPY ./tools/setup.sh /

RUN chmod +x setup.sh

RUN mariadb-install-db -u root

RUN /setup.sh

ENTRYPOINT ["mysqld"]

CMD ["-u root"]