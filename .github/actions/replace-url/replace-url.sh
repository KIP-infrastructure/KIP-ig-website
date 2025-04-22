#!/bin/bash

set -e

find_and_replace() {
    OLD_TAG=$1
    NEW_TAG=$2
    FILE_GLOB='**/*.html'

    echo "Finding files matching glob: $FILE_GLOB and tag: $OLD_TAG"
    FILES=$(rg --files-with-matches --glob "$FILE_GLOB" "$OLD_TAG")
    
    FILE_COUNT=$(echo "$FILES" | wc -l)
    echo "Found $FILE_COUNT HTML files matching pattern."
    echo -e "\nReplacing tag \n$OLD_TAG \nwith \n$NEW_TAG"
    
    echo "$FILES" | xargs -n 100 sed -i "s|$OLD_TAG|$NEW_TAG|g"
    
    echo -e "done\n"
}

cd "$(git rev-parse --show-toplevel)"

find_and_replace '<a href="https://kip.rkkp.dk/fhir">' '<a href="https://kip-infrastructure.github.io/KIP-ig-website/fhir">' 
find_and_replace '<a no-external="true" href="https://kip.rkkp.dk/fhir/history.html">Directory of published versions</a>' '<a no-external="true" href="https://kip-infrastructure.github.io/KIP-ig-website/fhir/history.html">Directory of published versions</a>'

echo "Tag replacement complete."