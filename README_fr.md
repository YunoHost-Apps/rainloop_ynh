# Rainloop pour YunoHost

[![Integration level](https://dash.yunohost.org/integration/rainloop.svg)](https://dash.yunohost.org/appci/app/rainloop) ![](https://ci-apps.yunohost.org/ci/badges/rainloop.status.svg) ![](https://ci-apps.yunohost.org/ci/badges/rainloop.maintain.svg)  
[![Installer Rainloop avec YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=rainloop)

*[Read this readme in english.](./README.md)* 

> *Ce package vous permet d'installer Rainloop rapidement et simplement sur un serveur YunoHost.  
Si vous n'avez pas YunoHost, regardez [ici](https://yunohost.org/install) pour savoir comment l'installer et en profiter.*

## Vue d'ensemble

Rainloop est un webmail léger.

**Version incluse:** 1.16.0

## Captures d'écran

![](https://www.rainloop.net/static/media/screenshots/v2/12.png)

## Démo

* [Démo YunoHost](https://demo.yunohost.org/rainloop/app/)
* [Démo officielle](https://mail.rainloop.net/)

## Configuration

Veuillez vous rendre sur http://DOMAIN.TLD/rainloop/app/?admin

- Le nom d'utilisateur admin par défaut : admin
- Le mot de passe admin par défaut : Mot de passe choisi lors de l'installation
- Si vous avez oublié votre mot de passe, vous pouvez le retrouver avec `sudo yunohost app setting rainloop password`

Chaque utilisateur peut ajouter un carnet d'adresse distant CardDav via leurs propres paramètres.

- Si vous utilisez Baïkal, l'adresse à renseigner est du type `https://DOMAIN.TLD/baikal/card.php/addressbooks/UTILISATEUR/default`
- Si vous utilisez Nextcloud, l'adresse à renseigner est du type `https://DOMAIN.TLD/nextcloud/remote.php/carddav/addressbooks/USER/contacts`

## Documentation

 * Documentation officielle : https://www.rainloop.net/docs/configuration/
 * Documentation YunoHost : https://yunohost.org/fr/app_rainloop

## Caractéristiques spécifiques YunoHost

#### Support multi-utilisateurs

#### Supported architectures

* x86-64 - [![Build Status](https://ci-apps.yunohost.org/ci/logs/rainloop.svg)](https://ci-apps.yunohost.org/ci/apps/rainloop/)
* ARMv8-A - [![Build Status](https://ci-apps-arm.yunohost.org/ci/logs/rainloop.svg)](https://ci-apps-arm.yunohost.org/ci/apps/rainloop/)

## Limitations

## Informations additionnelles

* Rainloop stocke les clés PGP privées dans le stockage de navigateur. Cela implique que vos clés seront perdues quand vous videz le stockage de navigateur (navigation incognito, changement d'ordinateur...). Ce paquet intègre [PGPback de chtixof](https://github.com/chtixof/pgpback_ynh) pour que vous puissiez stocker vos clés privées PGP de manière sécurisée sur le serveur. Rendez-vous **http://DOMAIN.TLD/rainloop/pgpback** pour stocker vos clés privées PGP sur le serveur ou les restaurer dans un nouveau navigateur.

## Links

 * Signaler un bug : https://github.com/YunoHost-Apps/rainloop_ynh/issues
 * Site de Rainloop : https://www.rainloop.net/
 * GitHub de Rainloop : https://github.com/RainLoop/rainloop-webmail
 * Site web YunoHost : https://yunohost.org/

---

## Informations pour les développeurs

Merci de faire vos pull request sur la [branche testing](https://github.com/YunoHost-Apps/rainloop_ynh/tree/testing).

Pour essayer la branche testing, procédez comme suit.
```
sudo yunohost app install https://github.com/YunoHost-Apps/rainloop_ynh/tree/testing --debug
ou
sudo yunohost app upgrade rainloop -u https://github.com/YunoHost-Apps/rainloop_ynh/tree/testing --debug
```
