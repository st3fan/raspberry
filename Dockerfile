FROM dunglas/frankenphp:1.12.2
ENV SERVER_NAME=:80
COPY public/ /app/public/
