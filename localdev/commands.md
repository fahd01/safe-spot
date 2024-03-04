## Run Locally
- Start MySQL and PHP MyAdmin docker containers via docker compose:
```shell
docker compose -p safe-spot up
```
- Run docker container that provides dev environment:
``` shell
docker run --network safe-spot_default -v /var/run/docker.sock:/var/run/docker.sock -v /Users/amirelgayed/Downloads/Fahd/PI/safe-spot:/var/safe-spot -it -p 8080:8080 --entrypoint /bin/sh php:composer
```
- inside the container, start symfony server:
```shell
symfony serve --port=8080
```

## Github
Github token used for the repo
`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`
