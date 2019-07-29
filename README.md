# Laravel WhatsApp Button
Laravel package to make click to chat WhatsApp button.


**Installation**
-


Step 1. Install package using Composer

```
composer require "eyuva/laravel-whatsapp-btn":"*"
```

Step 3. Add the facade reference in config/app.php to your aliases array.

```
'WhatsappBtn' => \Eyuva\WhatsappBtn\WhatsappBtnFacade::class,
``````

Step 4. Start Using the package

```
Done!
```


**Usage**
-


Step 1. To embed a Button in view

```
{!! WhatsappBtn::(<number>,<message>,<options>) !!}

```
_eg. options: ['label' => 'Click to Chat', 'class' => 'btn btn-success']_


Step 2. To generate a http link

```
WhatsappBtn::(<number>,<message>);
```


**Contribute**
-

Contributions are welcome and will be fully credited. We accept contributions via Pull Requests on [GitHub](https://github.com/eyuva/laravel-whatsapp-btn).

**Loveware**
-

If you **Love It** then **Star It**

**Contributors**
-

* [Vishal Sancheti](https://github.com/vishal-sancheti)

**License**
-

The code in this repo are open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
