# Lost_Found_App

Lost and Found App for California State University Los-Angeles

<h1>Requirements</h1>

- PHP 5.6 and later
- Symfony 2.7 and later
- laravel < 5.0
- sandbox ~ 2.0
- Fabric ~ 1.0

<h1>Installation</h1>

`Install Composer`

```$ curl -s https://getcomposer.org/installer | php```

`Create project via Composer`

```$ composer.phar create-project -s dev stfalcon-studio/lost-and-found lost-and-found```
```-s dev``` means non-stable version, until we make first stable release.

`Check your system configuration`

Before you begin, make sure that your local system is properly configured for Symfony2. To do this, execute the following:

```$ php app/check.php```

If you got any warnings or recommendations, fix them before moving on.

`Setting up permissions for directories app/cache/ and app/logs`

- $ HTTPDUSER=`ps aux | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1`
- $ sudo setfacl -R -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX app/cache app/logs
- $ sudo setfacl -dR -m u:"$HTTPDUSER":rwX -m u:`whoami`:rwX app/cache app/logs

`Change DBAL settings, create DB, update it and load fixtures`

Change DBAL setting if your need in `app/config/config.yml`, `app/config/config_dev.yml` or `app/config/config_test.yml`. After that execute the following:

- $ ./console doctrine:database:create
- $ ./console doctrine:migrations:migrate
- $ ./console doctrine:fixtures:load

You can set test environment for command if you add --env=test to it.
