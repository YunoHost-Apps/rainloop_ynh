# Rainloop for YunoHost

[![Integration level](https://dash.yunohost.org/integration/rainloop.svg)](https://dash.yunohost.org/appci/app/rainloop) ![](https://ci-apps.yunohost.org/ci/badges/rainloop.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/rainloop.maintain.svg)  
[![Install Rainloop with YunoHost](https://install-app.yunohost.org/install-with-yunohost.png)](https://install-app.yunohost.org/?app=rainloop)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allow you to install Rainloop quickly and simply on a YunoHost server.  
If you don't have YunoHost, please see [here](https://yunohost.org/#/install) to know how to install and enjoy it.*

## Overview

Rainloop is a lightweight webmail.

**Shipped version:** 1.14.0

## Screenshots

![](https://www.rainloop.net/static/media/screenshots/v2/12.png)

## Demo

* [YunoHost demo](https://demo.yunohost.org/rainloop/app/)
* [Official demo](https://mail.rainloop.net/)

## Configuration

Go to http://DOMAIN.TLD/rainloop/app/?admin

- The default login is : admin
- The default password is : Password chosen during install

- If you lost the admin password, you can retrieve it using ``sudo yunohost app setting rainloop password``

Each user can add a remote carddav server from their own parameters interface.

- If you use baikal, the CardDav address is: https://DOMAIN.TLD/baikal/card.php/addressbooks/USER/default/
- If you use NextCloud, the CardDav address is: https://DOMAIN.TLD/nextcloud/remote.php/carddav/addressbooks/USER/contacts

## Documentation

 * Official documentation: https://www.rainloop.net/docs/configuration/
 * YunoHost documentation: https://yunohost.org/#/app_rainloop

## YunoHost specific features

#### Multi-users support

#### Supported architectures

* x86-64b - [![Build Status](https://ci-apps.yunohost.org/ci/logs/rainloop%20%28Apps%29.svg)](https://ci-apps.yunohost.org/ci/apps/rainloop/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/rainloop%20%28Apps%29.svg)](https://ci-apps-arm.yunohost.org/ci/apps/rainloop/)
* Jessie x86-64b - [![Build Status](https://ci-stretch.nohost.me/ci/logs/rainloop%20%28Apps%29.svg)](https://ci-stretch.nohost.me/ci/apps/rainloop/)

## Limitations

## Additional information

* Rainloop saves your PGP private keys in the browser storage. This means that you will loose your private keys if you clear your browser storage (e.g., private browsing, different computer...). This packages integrates [PGPback by chtixof](https://github.com/chtixof/pgpback_ynh) so you can store your PGP private keys on the server securely. Go to **http://DOMAIN.TLD/rainloop/pgpback** to backup your PGP keys on the server or restore them.

## Links

 * Report a bug: https://github.com/YunoHost-Apps/rainloop_ynh/issues
 * Rainloop website: https://www.rainloop.net/
 * Rainloop github website: https://github.com/RainLoop/rainloop-webmail
 * YunoHost website: https://yunohost.org/

---

Developers info
----------------

**Only if you want to use a testing branch for coding, instead of merging directly into master.**
Please do your pull request to the [testing branch](https://github.com/YunoHost-Apps/rainloop_ynh/tree/testing).

To try the testing branch, please proceed like that.
```
sudo yunohost app install https://github.com/YunoHost-Apps/rainloop_ynh/tree/testing --debug
or
sudo yunohost app upgrade rainloop -u https://github.com/YunoHost-Apps/rainloop_ynh/tree/testing --debug
```
