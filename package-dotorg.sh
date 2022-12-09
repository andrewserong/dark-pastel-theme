#!/bin/zsh
# This script is borrowed from Automattic's theme repo. Based on:
# https://github.com/Automattic/themes/blob/trunk/package-dotorg.sh

mkdir dark-pastel
rsync -avz --exclude dark-pastel --exclude-from './dotorg-exclude.txt' ./ dark-pastel
rm -rf dark-pastel/dark-pastel
zip -r -X dark-pastel.zip dark-pastel
rm -rf dark-pastel
