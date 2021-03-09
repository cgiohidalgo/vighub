# Deployment 

This repository contains all necessary scripts to automatically deploy VigHub with all of its features.
Here you'll find a step-by-step guide to deploy it in a **Ubuntu 20.04** server to be able to host your services.


## Before you start

Before you start, we recommend that you review the documentation of [proxy settings](proxy.md) and the documentation of [firewall settings](firewall.md). You can avoid problems related to the configuration of this modules by reading and applying the considerations mentioned there.

## Steps to deploy

1. Have a machine with > Ubuntu 18.04 and git

2. Make sure that there is a password set for root and the user that will execute the scripts

3. Clone the deployment repository

   `git clone https://github.com/cgiohidalgo/vighub.git`

4. Inside the Deployment folder, make the .sh files runnable

   `chmod +x *.sh`

5. Disable selinux

   `sudo ./disable_selinux.sh this file copy files in /var/www/vighub/` 

   *Running this command will cause the server to restart automatically so that the changes are applied*

6. Install the prerequisites, you can use `ap-get install apache2 && apt nano && apt nodejs && ` to do this. 

7. Logout (type `logout` in console) and intall mongo (use: wget -qO - https://www.mongodb.org/static/pgp/server-4.4.asc | sudo apt-key add -
&& sudo apt-get install gnupg && wget -qO - https://www.mongodb.org/static/pgp/server-4.4.asc | sudo apt-key add -).

 

## Configuration

### FastCGI.conf

File located in /etc/lighttpd/conf.d/fastcgi.conf, this file specifies the configuration related to fastcgi and the processes that lighttpd will create to handle requests.
The options to focus on are *max-procs* and *min-procs*, these options specify the processes that fastCGI will create. Here we recommend to leave the same value for both options, 
 as this will create an static number of process.

### Nginx

File located in /etc/nginx/conf.d/vighub.conf, this file specifies the reverse proxy rules that are processed by nginx,
Modify the server_name and the IP, as well as other settings you think should be configured.


## License

Distributed under the AGPL-3.0 License. See [LICENSE]for more information.


