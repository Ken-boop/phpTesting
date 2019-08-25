#!/bin/bash

# Build script for serving static content instead of php files
echo "Processing";

DEST="./public_html"
html=".html"

mkdir -p "$DEST/"

# Execute all php files and save them as html
for f in num.php; 
do
	php $f | sed 's:\(<a.num href=".\)\.php\(".num </a>\):\1\.html\2:g' > "$DEST/${f/.php/$html}";
	echo "Processing $f into ${f/.php/$html}..";
done



echo "Process coamplete." ;
