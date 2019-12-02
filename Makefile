help: ## This help dialog.
	@IFS=$$'\n' ; \
    help_lines=(`fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | sed -e 's/\\$$//' | sed -e 's/##/:/'`); \
    printf "%-30s %s\n" "Command" "Description" ; \
    printf "%-30s %s\n" "------" "----" ; \
    for help_line in $${help_lines[@]}; do \
        IFS=$$':' ; \
        help_split=($$help_line) ; \
        help_command=`echo $${help_split[0]} | sed -e 's/^ *//' -e 's/ *$$//'` ; \
        help_info=`echo $${help_split[2]} | sed -e 's/^ *//' -e 's/ *$$//'` ; \
        printf '\033[36m'; \
        printf "%-30s %s" $$help_command ; \
        printf '\033[0m'; \
        printf "%s\n" $$help_info; \
    done; \
    echo "\n\nUsage: make [command]\n"


cinstall: ## Composer Install
	docker run -it --mount type=bind,source="$$(pwd)",target=/workdir -w /workdir --env COMPOSER_MEMORY_LIMIT=-1 yivi/sillyphp composer install --prefer-dist --no-scripts --no-progress --no-suggest --no-interaction --no-autoloader

cupdate: ## Composer Update
	docker run -it --mount type=bind,source="$$(pwd)",target=/workdir -w /workdir --env COMPOSER_MEMORY_LIMIT=-1 yivi/sillyphp composer update --no-autoloader

cautoload: ## Dumps the autloader
	docker run -it --mount type=bind,source="$$(pwd)",target=/workdir -w /workdir --env COMPOSER_MEMORY_LIMIT=-1 yivi/sillyphp composer dump-autoload --optimize

composer: ## console. use as make console P="something something"
	docker run -it --mount type=bind,source="$$(pwd)",target=/workdir -w /workdir --env COMPOSER_MEMORY_LIMIT=-1 yivi/sillyphp composer $(P)

serve: ## Serve the project on port 8000
	docker run -it --mount type=bind,source="$$(pwd)",target=/workdir -w /workdir -p 127.0.0.1:8000:8000  yivi/sillyphp bin/console server:run 0.0.0.0

console: ## console. use as make console P="cache..clear -V" (replace .. with a semicolon)
	docker run -it --mount type=bind,source="$$(pwd)",target=/workdir -w /workdir yivi/sillyphp "bin/console $(P)"

build: ## build the thing. so it works. and does things.
	docker build -t yivi/sillyphp .
