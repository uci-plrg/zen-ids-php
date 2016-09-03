# zen-ids-php

Welcome to the ZenIDS fork of the reference implementation of the PHP interpreter (version 7.1.0 alpha3). This fork contains several hooks that facilitate the [zen-ids](https://github.com/uci-plrg/zen-ids) PHP extension.

### Build

1. Dependencies:
  * `sudo apt-get install autoconf apache2-dev libxml2 libxml2-dev libssl-dev libcurl4-openssl-dev pkg-config libicu-dev libmcrypt-dev libtidy-dev libxslt1.1 libxslt1-dev libjpeg-dev libpng12-dev`
  * If necessary, manually install [libxdiff](http://freecode.com/projects/xdiff-lib):
    * `mkdir .../temp && cd .../temp`
    * `wget http://www.xmailserver.org/libxdiff-0.23.tar.gz`
    * `tar -xzf libxdiff-0.23.tar.gz && cd libxdiff-0.23`
    * `./configure && make && sudo make install`
  * [Apache HTTP Server](http://httpd.apache.org/) 
    * Configure module [MPM Prefork](https://httpd.apache.org/docs/2.4/mod/prefork.html) (as root):
      * `cd /etc/apache2/mods-enabled`
      * `rm mpm_*`
      * `ln -s ../mods-available/mpm_prefork.conf mpm_prefork.conf`
      * `ln -s ../mods-available/mpm_prefork.load mpm_prefork.load`
2. Environment:
  * Export variable `$PHP_HOME` pointing to the local clone of this repository.
3. Build:
  * `./buildconf`
  * `./current-config`
    *  Use option `-d` for a debug build
  * `make -j`
  * `sudo make -j install`
* Configure:
  * `sudo chmod a+x scripts/phpize` (this is basically a bug in the PHP build system)
  * As root: 
    * `cp $PHP_HOME/php7.conf.default /etc/apache2/mods-available/php7.conf`
    * `cd /etc/apache2/mods-enabled`
    * `ln -s ../mods-available/php7.conf php7.conf`
