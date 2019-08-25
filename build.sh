#!/bin/bash

# Build script for serving static content instead of php files
echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";

DEST="./public_html"
html=".html"

mkdir -p "$DEST/"

# Execute all php files and save them as html
<<<<<<< HEAD
for f in *.php; 
do
	php $f | sed 's:\(<a.* href=".\)\.php\(".* </a>\):\1\.html\2:g' > "$DEST/${f/.php/$html}";
=======
for f in index.php; 
do
	php $f | sed 's:\(<a.index href=".\)\.php\(".index </a>\):\1\.html\2:g' > "$DEST/${f/.php/$html}";
>>>>>>> 6accad7f5abce9435705d67bf4d1d7f4b5850875
	echo "Processing $f into ${f/.php/$html}..";
done



echo "Process coamplete." ;
