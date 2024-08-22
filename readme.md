# About

This project was created in 2014 to showcase my work as a software developer. At the time I was interesting in exploring frameworks with Model-View-Controller (MVC) architecture. The mistakes I made along the way, how it was cloned, where I stored the secrets, I decided to keep all of it as a reminder.

In 2018, I checked if I could still build the project and decided to use Docker to build it.

In 2024, I decided once more to make the project live but with the objective of freezing it. Looking back, Docker has problems with archiving. I didn't build a docker image as an artifact. This time around, I simply decided to export everything to static files.

I bumped the dependencies as much as I could, including migrating the code from Laravel 4.2 to 6.0 so I could run some older version of https://github.com/spatie/laravel-export.

Hopefully this is the last time I will touch the project as it is and I will definitely need to build more temporary zones.

You can see the current state at https://tz.hensansi.me.

# Helping Notes and Commands

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
