#!/bin/bash
APP_USER=$(id -u) docker compose up --remove-orphans
APP_USER=$(id -u) docker compose run php /bin/bash