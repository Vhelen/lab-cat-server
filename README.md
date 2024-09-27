# Lab Cat Server

Bunch of vulnerable labs for education purpose

# House of cats

## Description

## Setup

```bash
docker build -t house_of_cats_v1 house_of_cats_v1
docker run --name house_of_cats_v1 -it -p 80:80 house_of_cats_v1

# launching database & setup
docker exec house_of_cats_v1 service mariadb start
docker exec -i house_of_cats_v1 mysql -u root < house_of_cats_v1/conf/dump.sql
```

# House of cats v2

## Description


# House of cats v3

## Description


# Lab cat server v1

## Description


# Personal home cat v1

## Description


# Personal home cat v2

## Description