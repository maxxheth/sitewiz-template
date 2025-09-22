#!/bin/bash

SOURCE_DIR="$0"

TARGET_DIR="$1"

# If the source directory contains a git repo, delete it.

echo "Source directory: $SOURCE_DIR"
echo "Target directory: $TARGET_DIR"

if [ -d "$SOURCE_DIR/.git" ]; then
  echo "Removing git repository from source directory..."
  rm -rf "$SOURCE_DIR/.git"
else
  echo "No git repository found in source directory."
fi

# Copy the source directory to the target directory

echo "Copying source directory to target directory..."

cp -r "$SOURCE_DIR" "$TARGET_DIR"

if [ $? -eq 0 ]; then
  echo "Source directory copied successfully to target directory."
else
  echo "Failed to copy source directory to target directory."
  exit 1
fi