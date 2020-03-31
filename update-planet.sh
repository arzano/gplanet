#!/bin/sh

USER=${1:-gplanet}
GROUP=${2:-gplanet}

mkdir -p htdocs data
chown -R $USER:$GROUP htdocs data

docker run --privileged \
           --mount type=bind,source="$(pwd)"/htdocs,target=/var/www/planet.gentoo.org/build \
           --mount type=bind,source="$(pwd)"/data,target=/var/www/planet.gentoo.org/data \
           gentoo/planet-pluto:latest