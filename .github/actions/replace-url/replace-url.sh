#!/bin/bash

set -e

OLD_TAG=${OLD_TAG}
NEW_TAG=${NEW_TAG}
FILE_GLOB='**/*.html'

#OLD_TAG='<a no-external="true" href="https://kip.rkkp.dk/fhir/history.html">Directory of published versions</a>'
#NEW_TAG='<a no-external="true" href="https://kip-infrastructure.github.io/KIP-ig-website/fhir/history.html">Directory of published versions</a>'

cd "$(git rev-parse --show-toplevel)"

echo "Finding files matching glob: $FILE_GLOB"
FILES=$(find . -type f -wholename "$FILE_GLOB")

# Count how many files were found
FILE_COUNT=$(echo "$FILES" | wc -l)

echo "Found $FILE_COUNT HTML files matching pattern."
echo -e "Replacing tag $OLD_TAG \n with \n $NEW_TAG"

echo "$FILES" | xargs -n 100 sed -i.bak "s|$OLD_TAG|$NEW_TAG|g"

echo "Tag replacement complete."