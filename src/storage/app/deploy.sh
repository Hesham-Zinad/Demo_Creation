#!/bin/bash

# Our variables
source_file="input.txt"
destination_server="zisoft@51.89.84.152"
password="Zinad#PS@2022"
destination_directory="/home/zisoft/AMS"
remote_script="/home/zisoft/AMS/awareness-auto-creation.sh"

# Copy the file
sshpass -p "$password" scp "$source_file" "$destination_server:$destination_directory"

# Execute file
# sshpass -p "$password" ssh "$destination_server" "bash $remote_script"
