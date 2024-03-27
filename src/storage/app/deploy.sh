#!/bin/bash

# Our variables
source_file="input.txt"
destination_server="zisoft@51.89.84.152"
password="Zinad#PS@2022"
destination_directory="/home/zisoft/AMS"
remote_script="/home/zisoft/AMS/awareness-auto-creation.sh"



# Copy the file
pwd
cd /var/www/storage/app
pwd
sshpass -p "$password" scp -o StrictHostKeyChecking=no "$source_file" "$destination_server:$destination_directory"
echo "copy input txt file succssfuly "

# Execute file
sshpass -p "$password" ssh  -o StrictHostKeyChecking=no "$destination_server"  "cd /home/zisoft/AMS/ && echo 'Zinad#PS@2022' | sudo -S ./awareness-auto-creation.sh" 
#echo "execute auto-demo bash scribt"

