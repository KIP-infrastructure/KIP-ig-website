#!/bin/bash

set -e

find_and_replace() {
    OLD_TAG=$1
    NEW_TAG=$2
    FILE_GLOB='**/*.html'

    cd "$(git rev-parse --show-toplevel)"

    echo "Finding files matching glob: $FILE_GLOB and tag: $OLD_TAG"
    FILES=$(find . -type f -wholename "$FILE_GLOB")
    
    FILE_COUNT=$(echo "$FILES" | wc -l)
    echo "Found $FILE_COUNT HTML files matching pattern."
    echo ""
    echo "Replacing tag '$OLD_TAG' with '$NEW_TAG'"
    
    echo "$FILES" | xargs -n 100 sed -i "s|$OLD_TAG|$NEW_TAG|g"
    
    echo "done"
    echo ""
}

find_and_replace '<a href="https://kip.rkkp.dk/fhir">' '<a href="https://kip-infrastructure.github.io/KIP-ig-website/fhir">' 
find_and_replace '<a no-external="true" href="https://kip.rkkp.dk/fhir/history.html">Directory of published versions</a>' '<a no-external="true" href="https://kip-infrastructure.github.io/KIP-ig-website/fhir/history.html">Directory of published versions</a>'

echo ""
echo "Tag replacement complete."