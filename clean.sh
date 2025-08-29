#!/bin/bash

sudo chown -Rv $USER:$USER app
rm -rf app/vendor
rm -rf app/node_modules
rm -rf app/composer.lock
rm -rf app/package-lock.json
