FROM tutum/apache-php
RUN apt-get update && apt-get install -yq git && rm -rf /var/lib/apt/lists/*
RUN rm -fr /app
RUN mkdir -p /app
ADD ./src /app
ADD ./scripts /scripts
