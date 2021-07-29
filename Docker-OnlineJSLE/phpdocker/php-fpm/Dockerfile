FROM phpdockerio/php74-fpm:latest
#USER appuser

WORKDIR "/var/www"

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive

# Install selected extensions and other stuff
RUN apt-get update
RUN apt-get -y --no-install-recommends install php7.4-memcached php7.4-mysql php7.4-redis php7.4-xdebug php7.4-bz2 php7.4-gd
RUN apt-get -y --no-install-recommends install php7.4-gmp php7.4-intl php7.4-tidy php7.4-xsl php7.4-yaml
RUN apt-get -y --no-install-recommends install cron

RUN apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Install git
RUN apt-get update
RUN apt-get -y install git
RUN apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

ADD . /var/www
RUN chown -R www-data:www-data /var/www

# Copy hello-cron file to the cron.d directory
COPY jsle.cron /etc/cron.d/jsle.cron
# Give execution rights on the cron job
RUN chmod 0644 /etc/cron.d/jsle.cron
# Apply cron job
RUN crontab /etc/cron.d/jsle.cron