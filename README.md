# Basic app

## Install

Requirements

* [Composer](https://getcomposer.org/)

If your terminal is behind corporate proxy, please configure it first:

```
export https_proxy=https://proxy.com:80
```

```
git clone https://github.com/huchim/basic-app
cd basic-app
composer update
php -S localhost:3000 index.php
```

### Creating a controller

Un controlador es una clase que exitiende la clase `\Emotion\ControllerBase\` y tiene métodos públicos que pueden ejecutarse y devolver cualquiera de los siguientes tipos:

* `\Emotion\Responses\ErrorResponse`
* `\Emotion\Responses\HtmlResponse`
* `\Emotion\Responses\ViewResponse`
* `\Emotion\Responses\JsonResponse`
* `\Emotion\Responses\NoContentResponse`
* `\Emotion\Responses\RedirectResponse`
* `string`
* `array`
* `null` (será convertido a `NoContentResponse`)

Para hacer uso de una vista, se debe devolver una vista por medio del método `ControllerBase->View()` que buscará dentro de la carpeta `app/views/` + el nombre controlador (sin incluir la palabra `Controller`).

Ejemplo: `app/views/home/Index.html`.

