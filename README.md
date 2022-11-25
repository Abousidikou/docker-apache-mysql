# docker-apache-mysql

## Install Docker component

```bash
sudo apt-get install curl
sudo apt-get install gnupg
sudo apt-get install ca-certificates
sudo apt-get install lsb-release
```
First, confirm the latest version available in their releases page. At the time of this writing, the most current stable version is 2.12.2.
The following command will download the 2.12.2 release and save the executable file at /usr/local/bin/docker-compose, which will make this software globally accessible as docker-compose:

```bash
sudo curl -L "https://github.com/docker/compose/releases/download/2.12.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
```
Next, set the correct permissions so that the docker-compose command is executable:

```bash
sudo chmod +x /usr/local/bin/docker-compose
```

To verify that the installation was successful, you can run:
```bash
docker compose version
```

## Create volumes  directories

```bash
mkdir -p apache/src
mkdir -p mysql/data
```



# Start
```bash
sudo docker-compose up -d 
```

# Import database
Goto localhost:9001
Import database in import option

# Upon iris dorectory
chmod -R 777 application/
chmod -R 777 system/

# Modify apache files
Modify apache/src/iris/apache/config/database.php
```bash
host : mysqlHost #name of mysql container
username : mysqlUser
password : mysqlpassword
```

# Modify apache files
Modify apache/src/iris/apache/bootstrap.php
```bash
base_url : '/iris-2-dev'
```


## Problems

### Session_Exception [ 1 ]: Error reading session data.
Be sure about the database connexion

### ROW_FORMAT 
ERROR 1118 (42000) at line 4304: Row size too large (> 8126). Changing some columns to TEXT or BLOB or using ROW_FORMAT=DYNAMIC or ROW_FORMAT=COMPRESSED may help. In current row format, BLOB prefix of 768 bytes is stored inline.

Solution :  Relplace the ROW_FORMAT=COMPACT by   " ROW_FORMAT=COMPACT ROW_FORMAT=DYNAMIC " at the end of create request which raise that problem.


### Collate utf8mb...
Copy that “COLLATE utf…” before every equal test sign.

### ErrorException [ Deprecated ]: __autoload() is deprecated
use spl_autoload_register() instead

### Fatal error: Switch statements may only contain one default clause in /var/www/html/iris/modules/mpdf/vendor/mpdf/mpdf.php on line 1422
Acces au fichier puis modification 



