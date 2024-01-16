# Project Title

PHPBB LISTSERV Synchronizer

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

1. VirtualBox
2. Bitnami PHPBB VirtualMachine https://bitnami.com/stack/phpbb/virtual-machine
3. The extension files stored under this repo

### Installing

1. Install VirtualBox VMware
2. Download Bitnami PHPBB VirtualMachine https://bitnami.com/stack/phpbb/virtual-machine
3. Run the Bitnami VM image
4. On your local environment hosting the virtual machine create an SSH tunnel by executing ssh -N -L 8888:127.0.0.1:80 bitnami@LOCALMACHINE-IP
5. In the Bitnami VM environment install this extension at /home/bitnami/apps/phpbb/htdocs/ext/
6. Double check the resultant installation path is /home/bitnami/apps/phpbb/htdocs/ext/davidiq/mailinglist/
7. While your Bitnami VM image is running, on your local environment visit the following URL: http://127.0.0.1:8888/

### Deployment Notes

How to setup STMP on PHPBB for GMAIL accounts
1. Goto ACP -> Email Settings
2. Use these settings under 'SMTP Settings'

* Use SMTP server for email:
  Yes
* SMTP server address:
  smtp.gmail.com
* SMTP server port:
  587
* Authentication method for SMTP:
  LOGIN
* SMTP username:
  email@address.com
* SMTP password:
  •••••••• -->IMPORTANT: TURN ON UNSECURE APP PASSWORD AND GENERATE A TOKEN PASSWORD UNDER GOOGLE ACCOUNT
* Verify SSL certificate:
  No
* Verify SMTP peer name:
  No
* Allow self-signed SSL certificates:
  Yes
* Allow connections to SMTP server with self-signed SSL certificate. 
  Yes

## Authors

* **Johnny Jang** - *Extended for PHPBB LISTSERV synchronization*
* **David Colón** - *Initial Extension* - [DavidIQ](https://github.com/DavidIQ)

## License

This project is licensed under the GNU GENERAL PUBLIC LICENSE - see the [LICENSE.md](LICENSE.md) file for details
