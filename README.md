# Hotel Rooms Search Service

A small service to fetch rooms offers from multiple probiders. This app was built with [Lumen](https://lumen.laravel.com/docs/8.x/installation) .

## install

clone the repository , then run the following commands in your terminal:

```bash
cp .env.example .env
composer install
```

then set your host credintials in the .env , done , now run the app:

```bash
php -S localhost:8000 -t public
```

## Docker

You can also use Docker to run this service , using the following commands
*(Just make sure that Docker is running !!)*

```bash
cd docker
docker-compose build
docker-compose up
```

## Usage

We have one API route. we call it , then recieve a list with rooms.

For example using cURL :

```bash
curl http://localhost:8000/api/v1/index
```









