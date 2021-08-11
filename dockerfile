FROM ubuntu/apache2
Maintainer "Deepak Sharma"
RUN apt update 
RUN apt -y install software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update
RUN apt -y install php7.4

