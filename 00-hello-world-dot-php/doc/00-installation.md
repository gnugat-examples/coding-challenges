# Installation

Prerequisites:

* [docker](https://docs.docker.com/get-docker/)
* [make](https://www.gnu.org/software/make/)

See [Docker and Make installation documentation](./00-installation/00-docker-and-make-installation.md).

## Prod

For production purpose, you can use:

```console
# Build Docker image
make build

# Install third party dependencies
make composer c='install --optimize-autoloader --no-dev'
```

## Dev / Test

For development and testing purpose, you can use:

```console
# Build Docker image
make build

# Install third party dependencies, including dev/test ones
make composer c='install --optimize-autoloader'
```

## What's next?

Have a look at [Usage documentation](./01-usage.md).
