# PHP Codeigniter Bolerplate

Instalación de dependencias:

    $ composer install

Refrescar autoload de composer:

    $ composer dump-autoload -o

Arrancar build in server:

    $ composer start

Acceder a $config:

    $this->config->item('constants');

Migraciones con DBMATE:

    $ dbmate -d "db/migrations" -e "DATABASE_URL" new <<nombre_de_migracion>>
    $ dbmate -d "db/migrations" up

---

Fuentes:

+ https://github.com/pepeul1191/coa-slim
+ https://github.com/pepeul1191/codeigniter-boilerplate
+ https://symfony.com/doc/current/components/yaml.html
+ https://www.codeigniter.com/userguide3/libraries/config.html
+ https://www.codeigniter.com/userguide3/libraries/output.html
+ http://unirest.io/php.html
