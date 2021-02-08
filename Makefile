## Stop localdock environment
stop:
	cd ../laradock && docker-compose stop

## Start localdock environment
start:
	cd ../laradock && docker-compose start
cli:
	cd ../laradock && docker-compose exec -u laradock workspace bash