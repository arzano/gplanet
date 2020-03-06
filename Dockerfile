FROM ruby:2-alpine

ARG USER_ID
ARG GROUP_ID

RUN apk add --update nodejs npm build-base sqlite sqlite-dev sqlite-libs git

RUN addgroup --gid $GROUP_ID gplanet
RUN adduser --system --disabled-password --gecos '' --uid $USER_ID --ingroup gplanet gplanet

COPY --chown=gplanet:gplanet  . /var/www/planet.gentoo.org
WORKDIR /var/www/planet.gentoo.org

USER gplanet

RUN bundle install \
    && npm install \
    && cd node_modules/@gentoo/tyrian \
    && npm install \
    && npm run dist

CMD cd /var/www/planet.gentoo.org \
    && bundle exec pluto update -d data \
    && bundle exec pluto build -o build -d data -t tyrian

