#/bin/bash

NEXT_VERSION=$1
CURRENT_VERSION=$(cat style.css | grep Version | head -1 | awk -F= "{ print $2 }" | sed 's/[Version:,\",]//g' | tr -d '[[:space:]]')

sed -ie "s/Version:           $CURRENT_VERSION/Version:           $NEXT_VERSION/g" style.css
rm -rf style.csse

zip -r ./build/wp-example-project-$NEXT_VERSION.zip ./*.php ./style.css dist config framework vendor woocommerce -q
