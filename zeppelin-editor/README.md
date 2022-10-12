# Build Docker Image using running container
## Image file ---> apache/zeppelin:0.9.0

## Step1: Install docker and run
## Step2: pull zepplie:0.9.0
```
docker pull apache/zeppelin:0.9.0
```

## Step3: Run, pull image(both work)
```
sudo docker run -p 8080:8080 apache/zeppelin:0.9.0
```
```
sudo docker run -p 8080:8080 --rm --name zeppelin apache/zeppelin:0.9.0
```
## Step4: open Web Browser
``` 
localhost:8080 
```

![Screenshot 2021-12-17 at 3 47 13 AM](https://user-images.githubusercontent.com/56903228/146675095-2c06d292-eed6-4529-bacc-701437dc5260.png)

## Step5: Go inside docker container
* Definition: docker exec -it <container_id> /bin/bash
* As Normal user
```
docker exec -it 497b19af1618 /bin/bash
```
* As Root user
```
docker exec -u root -it c427712bfbb4 /bin/bash
```

## Step6: Install following modules inside container
```
apt-get update -y && apt-get install -y libkrb5-dev
apt-get install gcc
pip install kerberos 
pip install hdfs
pip install requests-kerberos
pip install pandas
pip install idna
pip install cx_Oracle==7.
pip install findspark
pip install psycopg2-binary==2.8.4
pip install popen 
pip install subprocess.run
pip install pipe
```
  
#### if got error, while installing this module "pip install psycopg2-binary==2.8.4".then use one of following
```
pip install -Iv psycopg2-binary==2.8.4
pip install -Iv psycopg2-binary==2.9.1
```

## Step7: Check All modules successfully installed or not(paste in notebook)
```
%python
import csv
import pandas
import os
import kerberos
import numpy
import psycopg2
import cx_Oracle
import findspark

```
![Screenshot 2021-12-19 at 6 10 07 PM](https://user-images.githubusercontent.com/56903228/146675172-f9862da1-ee69-4829-8701-925cfd83be8b.png) 
  
## Step8: Download .jar files
* ojdbc6-11.2.0.jar
* spark-daria_2.12-1.0.0.jar
```
git clone https://github.com/surangajayalath/Docker-zepplie.git
```

## Step9: Create Docker file
* create Dockerfile with below lines
```
FROM apache/zeppelin:0.9.0
COPY ojdbc6-11.2.0.jar ./opt/zeppelin/interpreter/jdbc
COPY spark-daria_2.12-1.0.0.jar ./opt/zeppelin/interpreter/spark
```
  
## Step10: Build Dockerfile
```
docker build  -t apache/zeppelin:0.9.0 .
```

## Step11: Create Docker image from running container

* Definition: docker commit <container_id>  <docker_hub_username> / <user_define_image_name>
```
docker commit c427712bfbb4  surangajayalath/zeppelin:version3
```
## Step12: push to docker hub

``` 
docker login
```
* Enter user name & password
  
``` 
docker push surangajayalath/zeppelin:version3 
```

## Docker Hub Link
### https://hub.docker.com/r/surangajayalath/zeppelin


