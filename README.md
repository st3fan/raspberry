# Raspberry

Just a simple homepage container for my Raspberry Pi Kubernetes cluster.

## Development

Mount the `public/` directory as a volume so any file change is picked up immediately on the next page refresh — no restart needed:

```sh
docker run --rm -p 80:8080 -v $PWD/public:/app/public dunglas/frankenphp:static-builder-gnu-1.12.2
```

Then open http://localhost in your browser.

## Building

```sh
docker build -t raspberry .
```

## Running

```sh
docker run --rm -p 8080:80 raspberry
```

Then open http://localhost in your browser.

