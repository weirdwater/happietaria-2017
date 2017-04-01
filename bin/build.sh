#! /bin/bash

if [ ! -f ./style.css ] ; then
        echo "Execute script in the source directory of a wordpress theme."
        exit
fi

version="$(sed -En 's/.+([0-9]+\.[0-9]+\.[0-9]+)/\1/p' style.css)"
builddir="happietaria-2017-v${version}"
buildpath="dist/${builddir}"

rm -r dist
mkdir dist/
mkdir "$buildpath"

cp *.php "$buildpath"
cp screenshot.png "$buildpath"
cp style.css "$buildpath"
cp LICENSE "$buildpath"
cp README.md "$buildpath"
cp -r static "$buildpath"
cp -r templates "$buildpath"
cp -r fields "$buildpath"

echo "Files copied to ${buildpath}"

cd dist/
zip -r "${builddir}.zip" "$builddir"

echo "Distributable archive ${buildpath}.zip created"
