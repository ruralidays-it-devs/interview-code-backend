FROM nginx:1.18.0-alpine

COPY docker/nginx/nginx.conf  /etc/nginx/

RUN apk add --no-cache bash

RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

EXPOSE 80