#!/bin/sh

USER=${1:-gplanet}
GROUP=${2:-gplanet}

docker build --build-arg USER_ID=$(id -u $USER) \
             --build-arg GROUP_ID=$(id -g $GROUP)  \
             -t gentoo/planet-pluto:latest .
