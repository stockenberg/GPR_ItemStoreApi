Vagrant.configure("2") do |config|
  config.vm.box = "damianlewis/lamp-php7.1"
  config.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"
  config.vm.synced_folder "./www", "/var/www/html" 
end
Vagrant.configure("2") do |config|
  config.vm.box = "damianlewis/lamp-php7.1"
  config.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1"
  config.vm.synced_folder "./", "/var/www/html" 
end
