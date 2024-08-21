## Extract files from the docker image

Helpful in case we wanna get an updated version of the composer.lock

```
image=test
source_path=/app/composer.lock
destination_path=./

sudo docker build -t $image .
container_id=$(sudo docker create "$image")
sudo docker cp "$container_id:$source_path" "$destination_path"
sudo docker rm "$container_id"
```