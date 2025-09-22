#!/bin/bash

# Update Composer dependencies first

composer update

# Check if the update was successful

if [ $? -ne 0 ]; then
	echo "Composer update failed. Exiting."
	exit 1
fi

# Build the Hyde site

php hyde build

# Check if the build was successful

if [ $? -ne 0 ]; then
	echo "PHP Hyde build failed. Exiting."
	exit 1
fi

# Build the JS / CSS assets via Bun

bun run build

# Check if the Bun build was successful

if [ $? -ne 0 ]; then
	echo "Bun build failed. Exiting."
	exit 1
fi