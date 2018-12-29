# PHP Codeigniter Bolerplate

Instalación de dependencias:

    $ composer install

Refrescar autoload de composer:

    $ composer dump-autoload -o

Arrancar build in server:

    $ composer start

Acceder a $config:

    $this->config->item('constants');

Migraciones con DBMATE - ubicaciones:

    $ dbmate -d "db/ubicaciones/migrations" -e "UBICACIONES" new <<nombre_de_migracion>>
    $ dbmate -d "db/ubicaciones/migrations" up

Migraciones con DBMATE - access:

    $ dbmate -d "db/access/migrations" -e "ACCESS" new <<nombre_de_migracion>>
    $ dbmate -d "db/access/migrations" -e "ACCESS" up
    $ dbmate -d "db/access/migrations" -e "ACCESS" rollback

### Dump y Restore Mysql

    $ mysqldump -u root -p canchas > db/managment/canchas.sql
    $ mysql -u root -p canchas < db/managment/canchas.sql

---

Fuentes:

+ https://github.com/pepeul1191/coa-slim
+ https://github.com/pepeul1191/codeigniter-boilerplate
+ https://symfony.com/doc/current/components/yaml.html
+ https://www.codeigniter.com/userguide3/libraries/config.html
+ https://www.codeigniter.com/userguide3/libraries/output.html
+ http://unirest.io/php.html
