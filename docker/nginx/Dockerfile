FROM nginx:latest

ENV NGINX_ROOT /usr/src/app/public
ENV NGINX_FPM_HOST localhost
ENV NGINX_FPM_PORT 9000

RUN rm -f /etc/nginx/conf.d/default.conf

COPY ./docker/nginx/default.conf /etc/nginx/default.conf
COPY ./docker/nginx/fpm-template.conf /etc/nginx/fpm.tmpl


EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]