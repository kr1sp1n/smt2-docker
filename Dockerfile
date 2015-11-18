FROM tutum/apache-php
RUN apt-get update && apt-get install -yq git && rm -rf /var/lib/apt/lists/*
RUN rm -fr /app
RUN mkdir -p /app
RUN mkdir -p /app/cache
RUN chmod -R 777 /app/cache
ADD ./src /app
ADD ./scripts /scripts
