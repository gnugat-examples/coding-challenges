# Executables: local dev only
SYMFONY = symfony
DOCKER = docker
DOCKER_COMP = docker compose

# Docker containers
# * `--rm`: Automatically removes the container after it stops.
# * `--user`: use host's user/group to prevent permission issues (when generating files)
# * `-e APP_ENV=$(env)`: passing environment variable
PHP_IMAGE = php_app
PHP_CONT = $(DOCKER_COMP) run --rm --user $(shell id -u):$(shell id -g) -e APP_ENV=$(env) $(PHP_IMAGE)

# Executables
PHP = $(PHP_CONT) php
COMPOSER = $(PHP_CONT) composer
PHPUNIT = $(PHP_CONT) vendor/bin/phpunit
PHP_CS_FIXER = $(PHP_CONT) vendor/bin/php-cs-fixer
PHPSTAN = $(PHP_CONT) vendor/bin/phpstan

# Misc
.DEFAULT_GOAL = help
.PHONY: *

## —— 🎵 🐳 The Symfony Docker Makefile 🐳 🎵 ——————————————————————————————————
## Based on https://github.com/dunglas/symfony-docker
## (env) denotates the possibility to pass "env=" parameter to the target
##     this allows to set APP_ENV environment variable (default: test), example: make console env='prod' c='cache:warmup'
## (c) denotates the possibility to pass "c=" parameter to the target
##     this allows to add command and options, example: make composer c='dump --optimize'
help: ## Outputs this help screen
	@grep -E '(^[a-zA-Z0-9\./_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | \
	awk 'BEGIN {FS = ":.*?## "}{printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | \
	sed -e 's/\[32m##/[33m/'

## —— Docker 🐳 ————————————————————————————————————————————————————————————————
build: ## Build the Docker images
	@$(DOCKER_COMP) build --pull --no-cache || echo "Docker build failed."

up: ## Start the Docker Hub (PHP, HTTP server, Databases, etc)
	$(DOCKER_COMP) up --detach

down: ## Stop the Docker Hub
	@$(DOCKER_COMP) down --remove-orphans

logs: ## Show live logs (c)
	@$(eval c ?=)
	@$(DOCKER_COMP) logs --tail=0 --follow $(c)

bash: ## Connect to the PHP container via bash
	@$(PHP_CONT) bash || echo "Error: PHP container is not running."

## —— PHP 🐘 ———————————————————————————————————————————————————————————————————
composer: ## Run Composer (env), (c)
	@$(eval env ?= dev)
	@$(eval c ?=)
	@$(COMPOSER) $(c)

console: ## Run bin/console (env), (c)
	@$(eval env ?= dev)
	@$(eval c ?=)
	@$(PHP) bin/console $(c)

php: ## Run given PHP script (env), (c)
	@$(eval env ?= dev)
	@$(eval c ?=)
	@$(PHP) $(c)

## —— Quality 🛂 ———————————————————————————————————————————————————————————————
cs-fix: ## Fix CS with PHP CS fixer (env), (c)
	@$(eval env ?= dev)
	@$(eval c ?=)
	@$(PHP_CS_FIXER) fix --verbose $(c)

cs-check: ## Check CS with PHP CS Fixer (env), (c)
	@$(eval env ?= dev)
	@$(eval c ?=)
	@$(PHP_CS_FIXER) check --verbose $(c)

static-analysis: ## Static Analysis with phpstan (env), (c)
	@$(eval env ?= dev)
	@$(eval c ?=)
	@$(PHPSTAN) analyze $(c)

test: ## Run tests with PHPUnit (env), (c)
	@$(eval env ?= dev)
	@$(eval c ?=)
	@$(PHPUNIT) $(c)

qa: ## Run CS check, Static Analysis and tests
	@$(MAKE) cs-check
	@${MAKE} static-analysis
	@${MAKE} test
