# House of cats v1

```bash
# docker setup
docker build -t house_of_cats_v1 .
docker run --name house_of_cats_v1 -it -p 80:80 house_of_cats_v1

# launching database & setup
docker exec house_of_cats_v1 service mariadb start
docker exec -i house_of_cats_v1 mysql -u root < conf/dump.sql
```