FROM alpine:3.14

RUN apk update && apk upgrade && apk add --no-cache \
	wget	\
	tar

WORKDIR /var/www/html/wordpress

COPY ./tools/run.sh /tmp/run.sh
CMD ["sh", "/tmp/run.sh"]
