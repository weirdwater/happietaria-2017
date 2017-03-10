#! /bin/bash

E_BADARGS=85

# get new version number from arguments
if [ -z "$1" ]; then
    echo "Please provide a new version number"
    exit $E_BADARGS
fi

version="$1"

echo "The new version is ${version}"

# replace version in style.css
sed -E 's/[0-9]+\.[0-9]+\.[0-9]+/'"$version"'/' style.css > new-style.css
mv new-style.css style.css
echo "Version changed to ${version} in styles.css"