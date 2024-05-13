FROM php:8.3.3RC1-zts-alpine3.18

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apk add --no-cache bash
RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.alpine.sh' | bash \
    && apk add symfony-cli
RUN apk add --no-cache git

RUN apk add --no-cache libxslt icu-dev postgresql-dev npm \
    && apk add --virtual build-deps libxslt-dev libxml2-dev \
    && export NPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) \
    && docker-php-ext-install -j${NPROC} xsl intl pdo_pgsql pdo_mysql \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-enable intl \
    && apk del build-deps

RUN cd /tmp/ \
    && curl -sSL -O https://download.docker.com/linux/static/stable/x86_64/docker-23.0.5.tgz \
    && tar zxf docker-23.0.5.tgz \
    && mkdir -p /usr/local/bin \
    && mv ./docker/docker /usr/local/bin \
    && chmod +x /usr/local/bin/docker \
    && rm -rf /tmp/* \
    && apk add docker-cli-compose

WORKDIR /var/safe-spot
