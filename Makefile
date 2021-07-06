all:
	docker-compose -f srcs/docker-compose.yml build 
	docker-compose -f srcs/docker-compose.yml up

clean:
	docker-compose -f srcs/docker-compose.yml down
	@rm -rf /home/lmellos/data/db/*
	@rm -rf /home/lmellos/data/wordpress/*

files:	
	@mkdir -p /home/lmellos/data/db
	@mkdir -p /home/lmellos/data/wordpress

fclean: clean
	docker system prune -a

re : fclean all

.PHONY: all files fclean re
