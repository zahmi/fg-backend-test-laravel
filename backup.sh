#!/bin/bash

# Database credentials
user="root"
password=""
host="localhost"
db_name="fg_backendtest_zahmi"

# set backup path and date
backup_path="./opt/backups/database/"
date=$(date +"%d-%b-%Y")

# Dump database into SQL file
mysqldump --user=$user --password=$password --host=$host $db_name > $backup_path/$db_name-$date.sql