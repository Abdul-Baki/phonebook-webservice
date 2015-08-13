#!/bin/bash
set -xe

while [ $# -gt 0 ]; do
  case "$1" in
    "--username")             export username="$2"          ; shift ;;
    "--password")             export password="$2"          ; shift ;;
  esac
  shift
done

phplist=$(ls *.php)

if [[ $phplist == *".php"* ]]; then
  for f in $phplist; do
    sed -i 's/update1/'$username'/' ./$f
    sed -i 's/update2/'$password'/' ./$f
  done
else
  echo " This script must be run in the same directory as the php files for the phonebook "
  echo " please ensure you are in the correct directory when running this script "
fi
