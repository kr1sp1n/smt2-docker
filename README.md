# smt2

https://code.google.com/p/smt2/wiki/readme


## Install

Create a VM (if not already present):
```bash
docker-machine create --driver virtualbox dev
```

A best practice is to add the dockerhost to `/etc/hosts`:
```bash
echo "$(docker-machine ip dev) dockerhost" | sudo tee -a /etc/hosts
```
and to add the env variables of the docker machine via:
```bash
eval "$(docker-machine env dev)"
```


## Run

```bash
docker-compose up
```

Open http://dockerhost:8080/admin/sys/install.php to install smt2 in the VM.
