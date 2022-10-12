# docker-image-using-php
create docker image using php project

## Create docker file
```
FROM php:7.2-apache
COPY index.php /var/www/html/index.php
EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
```

## Code Explain

* The base image php:7.2-apache is used. The base image is pulled from dockerhub.
* The file index.php is copied to /var/www/html/ in the image.
* The port 80 is exposed for apache.
* Apache is started inside the container.

## Create index.php file
```
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1 style="color:blue;text-align: center;">
<?php echo "Hi, I am running on Docker...."?>
</h1>
</body>
</html>
```

## Build docker image
* Dockerfile & index.php file should included on same folder and docker build command run on that file directory
```
docker build -t php-docker-image:v1 .
```
![Screenshot 2021-12-21 at 6 39 34 PM](https://user-images.githubusercontent.com/56903228/146981081-afdbd784-a4b6-4920-9388-7cc78ab7b7e9.png)


## Run image
```
docker run -d -p9090:80 php-docker-image:v1
```
![Screenshot 2021-12-21 at 9 45 25 PM](https://user-images.githubusercontent.com/56903228/146981100-2e54fc78-9775-4a89-9416-d7305ae7558d.png)

## open web browser
```
localhost:8080
```
![Screenshot 2021-12-21 at 9 48 54 PM](https://user-images.githubusercontent.com/56903228/146981118-0685d1be-186d-4698-8201-faa2ee0d2cf4.png)








