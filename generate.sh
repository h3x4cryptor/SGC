!/bin/bash
clear
echo ' ██████╗ ██╗  ██╗ ██████╗  ██╗'
echo '██╔═████╗╚██╗██╔╝██╔═████╗███║'
echo '██║██╔██║ ╚███╔╝ ██║██╔██║╚██║'
echo '████╔╝██║ ██╔██╗ ████╔╝██║ ██║'
echo '╚██████╔╝██╔╝ ██╗╚██████╔╝ ██║'
echo ' ╚═════╝ ╚═╝  ╚═╝ ╚═════╝  ╚═╝'
echo 'Initilazing setup . . .'

sleep 1
clear

read -p "Enter Sales Man ID#: "  eid
ssh root@ipool.remotewebaccess.com
mkdir /var/www/html/qr/190319$eid!"
#https://ipool.remotewebaccess.com:44301/qr/1903191171.png