#!/bin/bash
set -e

export MYSQL_DATABASE="${MYSQL_ENV_MYSQL_DATABASE}"
export MYSQL_USERNAME="${MYSQL_ENV_MYSQL_USER}"
export MYSQL_PASSWORD="${MYSQL_ENV_MYSQL_PASSWORD}"
export MYSQL_ADDRESS="mysql"
export SMT2_ENDPOINT="http://dockerhost:8080/"

exec "$@"
