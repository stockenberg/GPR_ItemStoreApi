# Update packages
```bash
sudo apt-get update
```

# Upgrade packages
```bash
sudo apt-get upgrade
```

# Install package
```bash
sudo apt-get install packagename
```

# Install phpmyadmin
```bash
 sudo apt-get update
 sudo apt-get -y install phpmyadmin
 sudo ln -s /etc/phpmyadmin/apache.conf /etc/apache2/conf-available/phpmyadmin.conf
 sudo a2enconf phpmyadmin.conf
 sudo service apache2 reload
```