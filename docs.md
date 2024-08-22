## Extract files from the docker image

Helpful in case we wanna get an updated version of the composer.lock

```
image=test
source_path=/app/composer.lock
destination_path=./composer.lock

sudo docker build -t $image .
container_id=$(sudo docker create "$image")
sudo docker cp "$container_id:$source_path" "$destination_path"
sudo docker rm "$container_id"
sudo chown -R $USER:$USER $destination_path
```

## Export project to statuic files

-   Start the project with docker-composer.
-   Enter the container `sudo docker exec -it temporary-zone-web-1 bash`
-   Generate static content `php artisan export`
-   Extract content `sudo docker cp temporary-zone-web-1:/app/dist ./dist`
-   Fix permissions `sudo chown -R $USER:$USER dist`
