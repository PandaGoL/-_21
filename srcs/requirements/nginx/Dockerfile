FROM debian:buster
RUN apt-get  update
RUN apt-get  install nginx -y
RUN apt-get  install openssl -y
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=RU/ST=Moscow/L=Moscow/O=cjothos/OU=cjothos/CN=https:\/\/github.com\/cjothos/emailAddress=cjothos@gmail.com"
COPY ./conf/nginx.conf etc/nginx/nginx.conf
CMD ["nginx", "-g", "daemon off;"]