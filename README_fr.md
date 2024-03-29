<!--
Nota bene : ce README est automatiquement généré par <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
Il NE doit PAS être modifié à la main.
-->

# Rainloop pour YunoHost

[![Niveau d’intégration](https://dash.yunohost.org/integration/rainloop.svg)](https://dash.yunohost.org/appci/app/rainloop) ![Statut du fonctionnement](https://ci-apps.yunohost.org/ci/badges/rainloop.status.svg) ![Statut de maintenance](https://ci-apps.yunohost.org/ci/badges/rainloop.maintain.svg)

[![Installer Rainloop avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=rainloop)

*[Lire le README dans d'autres langues.](./ALL_README.md)*

> *Ce package vous permet d’installer Rainloop rapidement et simplement sur un serveur YunoHost.*  
> *Si vous n’avez pas YunoHost, consultez [ce guide](https://yunohost.org/install) pour savoir comment l’installer et en profiter.*

## Vue d’ensemble

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


**Version incluse :** 1.17.0~ynh1

**Démo :** <https://mail.rainloop.net/>

## Captures d’écran

![Capture d’écran de Rainloop](./doc/screenshots/screenshot.png)

## Avertissements / informations importantes

## Rainloop is unmaintained ⚠️

See https://github.com/RainLoop/rainloop-webmail/issues/2162

## Access to admin panel

To access admin panel, use URL of the following kind: http://product_installation_URL/app/?admin

For example: http://webmail.domain.com/app/?admin

Default login is `admin`, the password is the one you chose during installation. 

## :red_circle: Anti-fonctionnalités

- **Mauvaise réputation en matière de sécurité**: A une mauvaise réputation en matière de sécurité, en utilisant des plugins dépréciés par exemple.
- **Application non maintenue**: Ce logiciel n'est plus maintenu. Attendez-vous à ce qu'il ne fonctionne plus avec le temps, et que l'on découvre des failles de sécurité qui ne seront pas corrigées, etc.
- **Remplacé par une autre application**: A été remplacé par une autre application. Se référer au fichier README.

## Documentations et ressources

- Site officiel de l’app : <https://www.rainloop.net/>
- Documentation officielle de l’admin : <https://www.rainloop.net/docs/configuration/>
- Dépôt de code officiel de l’app : <https://github.com/RainLoop/rainloop-webmail>
- YunoHost Store : <https://apps.yunohost.org/app/rainloop>
- Signaler un bug : <https://github.com/YunoHost-Apps/rainloop_ynh/issues>

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche `testing`](https://github.com/YunoHost-Apps/rainloop_ynh/tree/testing).

Pour essayer la branche `testing`, procédez comme suit :

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/rainloop_ynh/tree/testing --debug
ou
sudo yunohost app upgrade rainloop -u https://github.com/YunoHost-Apps/rainloop_ynh/tree/testing --debug
```

**Plus d’infos sur le packaging d’applications :** <https://yunohost.org/packaging_apps>
