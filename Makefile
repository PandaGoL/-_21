COMPOSE_FILE = ./srcs/docker-compose.yml

all		:	up

up		:
			@ docker-compose -f $(COMPOSE_FILE) up -d --build
			@ sleep 5
			@ echo "Containers are now built and running"

stop	:
			@ docker-compose -f $(COMPOSE_FILE) stop
			@ echo "Containers have been stopped"

down	:
			@ docker-compose -f $(COMPOSE_FILE) down
			@ echo "Containers are now down"

start	:
			@ docker-compose -f $(COMPOSE_FILE) start
			@ sleep 5
			@ echo "Containers are now running"

ps		:
			@ docker-compose -f $(COMPOSE_FILE) ps

re		:	stop up

.PHONY:		all up stop down start ps re