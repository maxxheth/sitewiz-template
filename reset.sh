#!/bin/bash

rm -rf vendor
rm -rf node_modules

composer install
bun install

