<!--
N.B.: This README was automatically generated by https://github.com/YunoHost/apps/tree/master/tools/README-generator
It shall NOT be edited by hand.
-->

# Rainloop for YunoHost

[![Integration level](https://dash.yunohost.org/integration/rainloop.svg)](https://dash.yunohost.org/appci/app/rainloop) ![Working status](https://ci-apps.yunohost.org/ci/badges/rainloop.status.svg) ![Maintenance status](https://ci-apps.yunohost.org/ci/badges/rainloop.maintain.svg)  
[![Install Rainloop with YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=rainloop)

*[Lire ce readme en français.](./README_fr.md)*

> *This package allows you to install Rainloop quickly and simply on a YunoHost server.
If you don't have YunoHost, please consult [the guide](https://yunohost.org/#/install) to learn how to install it.*

## Overview

Lightweight multi-account webmail

### Features

- Modern user interface.
- Complete support of IMAP and SMTP protocols including SSL and STARTTLS.
- Sieve scripts (Filters and vacation message).
- Direct access to mail server is used (mails are not stored locally on web server).
- Allows for adding multiple accounts to primary one, simultaneous access to different accounts in different browser tabs is supported. Additional identities.
- Administrative panel for configuring main options.
- Integration with Facebook, Google, Twitter and Dropbox.
- Managing folders list.
- Configurable multi-level caching system.
- Extending functionality with plugins installed through admin panel.
- Perfect rendering of complex HTML mails.
- Drag'n'drop for mails and attachments.
- Keyboard shortcuts support.
- Autocompletion of e-mail addresses.


**Shipped version:** 1.17.0~ynh1


**Demo:** https://mail.rainloop.net/

## Screenshots

![Screenshot of Rainloop](./doc/screenshots/screenshot.png)

## Disclaimers / important information

## Access to admin panel

To access admin panel, use URL of the following kind: http://product_installation_URL/app/?admin

For example: http://webmail.domain.com/app/?admin

Default login is `admin`, the password is the one you chose during installation. 
## Documentation and resources

* Official app website: <https://www.rainloop.net/>
* Official admin documentation: <https://www.rainloop.net/docs/configuration/>
* Upstream app code repository: <https://github.com/RainLoop/rainloop-webmail>
* YunoHost documentation for this app: <https://yunohost.org/app_rainloop>
* Report a bug: <https://github.com/YunoHost-Apps/rainloop_ynh/issues>

## Developer info

Please send your pull request to the [testing branch](https://github.com/YunoHost-Apps/rainloop_ynh/tree/testing).

To try the testing branch, please proceed like that.

``` bash
sudo yunohost app install https://github.com/YunoHost-Apps/rainloop_ynh/tree/testing --debug
or
sudo yunohost app upgrade rainloop -u https://github.com/YunoHost-Apps/rainloop_ynh/tree/testing --debug
```

**More info regarding app packaging:** <https://yunohost.org/packaging_apps>
