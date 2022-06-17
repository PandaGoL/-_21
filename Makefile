
ENV_FILE = ./srcs/.env


VOLUMES_PATH = ${HOME}/data/
VOLUMES_DIR = db wp

VOLUMES = $(addprefix $(VOLUMES_PATH)/, $(VOLUMES_DIR))

#################### RULES ####################

all: stop load

load: | $(VOLUMES)
	docker-compose -f ./srcs/docker-compose.yml --env-file $(ENV_FILE) up --build

stop:
	docker-compose -f srcs/docker-compose.yml --env-file $(ENV_FILE) down

clean: stop
	docker volume rm $(addprefix srcs_, $(VOLUMES_DIR)) -f
	docker volume prune -f
	rm -rf $(VOLUMES_PATH) || rm -rf $(VOLUMES)

prune: clean
	docker system prune -af

re: prune load

.PHONY: all load stop clean prune re
