FROM alpine:3.13

RUN apk update && \
	apk add nginx openssl openssh

COPY conf/nginx.conf /etc/nginx/conf.d/default.conf

RUN mkdir /run/nginx/ && \
	openssl req -x509 -nodes -days 365 \
    -newkey rsa:2048 -subj "/C=ru/ST=Russia/L=Moscow/O=21/CN=lmellos" \
    -out /etc/ssl/certs/nginx-selfsigned.crt \
    -keyout /etc/ssl/private/nginx-selfsigned.key

ENTRYPOINT ["nginx"]

CMD ["-g", "daemon off;"]