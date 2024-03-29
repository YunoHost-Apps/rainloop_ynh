<!--
NOTA: Este README foi creado automáticamente por <https://github.com/YunoHost/apps/tree/master/tools/readme_generator>
NON debe editarse manualmente.
-->

# Rainloop para YunoHost

[![Nivel de integración](https://dash.yunohost.org/integration/rainloop.svg)](https://dash.yunohost.org/appci/app/rainloop) ![Estado de funcionamento](https://ci-apps.yunohost.org/ci/badges/rainloop.status.svg) ![Estado de mantemento](https://ci-apps.yunohost.org/ci/badges/rainloop.maintain.svg)

[![Instalar Rainloop con YunoHost](https://install-app.yunohost.org/install-with-yunohost.svg)](https://install-app.yunohost.org/?app=rainloop)

*[Le este README en outros idiomas.](./ALL_README.md)*

> *Este paquete permíteche instalar Rainloop de xeito rápido e doado nun servidor YunoHost.*  
> *Se non usas YunoHost, le a [documentación](https://yunohost.org/install) para saber como instalalo.*

## Vista xeral

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


**Versión proporcionada:** 1.17.0~ynh1

**Demo:** <https://mail.rainloop.net/>

## Capturas de pantalla

![Captura de pantalla de Rainloop](./doc/screenshots/screenshot.png)

## Avisos / información importante

## Rainloop is unmaintained ⚠️

See https://github.com/RainLoop/rainloop-webmail/issues/2162

## Access to admin panel

To access admin panel, use URL of the following kind: http://product_installation_URL/app/?admin

For example: http://webmail.domain.com/app/?admin

Default login is `admin`, the password is the one you chose during installation. 

## :red_circle: Caraterísticas cuestionables

- **Bad security reputation**: Has a bad security reputation, such as deprecated addons.
- **Upstream not maintained**: This software is not maintained anymore. Expect it to break down over time, be exposed to unfixed security breaches, etc.
- **Replaced by another app**: Was replaced by another app. Please refer to the README.

## Documentación e recursos

- Web oficial da app: <https://www.rainloop.net/>
- Documentación oficial para admin: <https://www.rainloop.net/docs/configuration/>
- Repositorio de orixe do código: <https://github.com/RainLoop/rainloop-webmail>
- Tenda YunoHost: <https://apps.yunohost.org/app/rainloop>
- Informar dun problema: <https://github.com/YunoHost-Apps/rainloop_ynh/issues>

## Info de desenvolvemento

Envía a túa colaboración á [rama `testing`](https://github.com/YunoHost-Apps/rainloop_ynh/tree/testing).

Para probar a rama `testing`, procede deste xeito:

```bash
sudo yunohost app install https://github.com/YunoHost-Apps/rainloop_ynh/tree/testing --debug
ou
sudo yunohost app upgrade rainloop -u https://github.com/YunoHost-Apps/rainloop_ynh/tree/testing --debug
```

**Máis info sobre o empaquetado da app:** <https://yunohost.org/packaging_apps>
