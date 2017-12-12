1) Install docker https://www.docker.com/
2) Install docker-compose scrtipts https://docs.docker.com/compose/install/
3) start docker: sudo docker service start
4) Clone repo
5) From top level directory of repo type: docker-compose up --build    (this will rebuild images, what I forgot to do in demo)
6) Add some data:  (or use postman or any rest client)
curl -X "POST" --data "name=Sample Task1" localhost:8081/tasks
curl -X "POST" --data "name=Sample Task2" localhost:8081/tasks
curl -X "POST" --data "name=Sample Task3" localhost:8081/tasks
7) View added data:
curl localhost:8081/tasks
8) check localhost:8080 in broswer, docker ps, docker exec to login to containers, change index.php on the fly...
