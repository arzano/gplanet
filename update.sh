#!/bin/sh

USER=${1:gplanet}
GROUP=${2:gplanet}

mkdir -p htdocs data

docker build --build-arg USER_ID=$(id -u $USER) \
             --build-arg GROUP_ID=$(id -g $GROUP)  \
             -t gentoo/planet-pluto:latest .

docker run --privileged \
           --mount type=bind,source="$(pwd)"/htdocs,target=/var/www/planet.gentoo.org/build \
           --mount type=bind,source="$(pwd)"/data,target=/var/www/planet.gentoo.org/data \
           gentoo/planet-pluto:latest
