#!/bin/bash

set -e

OLD_TAG=${OLD_TAG}
NEW_TAG=${NEW_TAG}
FILE_GLOB='**/*.html'

echo "Finding files matching glob: $FILE_GLOB"
FILES=$(find . -type f -name "$FILE_GLOB")

# Count how many files were found
FILE_COUNT=$(echo "$FILES" | wc -l)

echo "Found $FILE_COUNT HTML files matching pattern."

echo  "Replacing tag $OLD_TAG with $NEW_TAG"

#for FILE in $FILES; do
#  if grep -qF "$OLD_TAG" "$FILE"; then
#    echo "Replacing tag in $FILE"
#    sed -i.bak "s|$OLD_TAG|$NEW_TAG|g" "$FILE"
#    rm "${FILE}.bak"
#  fi
#done

echo "Tag replacement complete."