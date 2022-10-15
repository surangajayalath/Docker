### Dockerized PHP Application with MySQL/PhpMyAdmin

- Clone github repository
- Go to directory

```
cd php-sql-project
```
- Before execute docker-compose file make sure docker running
```
systemctl status docker
```
- Now, you can execute file
```
docker-compose up
```
- After done docker composing, you can access phpmyadmin
  -  Username - MYSQL_USER
  -  Password - MYSQL_PASSWORD
```
localhost:8081
```
- Next, select database(MYSQL_DATABASE) and paste sql quries
- Next, refresh php application
```
localhost:8000
```
