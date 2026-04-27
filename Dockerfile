FROM dunglas/frankenphp
ENV SERVER_NAME=:80
COPY public/ /app/public/
