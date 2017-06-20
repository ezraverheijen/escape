# escape

![License](https://img.shields.io/badge/license-MIT-green.svg) ![PHP Version](https://img.shields.io/badge/PHP-5.4%2B-red.svg)

PHP class to help prevent XSS (Cross Site Scripting) per OWASP recommendations as described [here](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet).

## Setup

### Example 1:

```php
<?php
require 'escape.php';

$esc = Escape::html('& " \' < >');
var_dump($esc);
```

#### Outputs:

```php
string(29) "&amp; &quot; &#039; &lt; &gt;"
```

---

### Example 2:

```php
<?php
spl_autoload_register(function ($class) {
    require strtolower($class) . '.php';
});
require 'helper.php';

$esc = esc('& " \' < >', 'css');
var_dump($esc);
```

#### Outputs:

```php
string(36) "\26 \20 \22 \20 \27 \20 \3C \20 \3E "
```

## Requirements

- PHP 5.4+

## Disclaimer

This software is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/ezraverheijen/escape/issues/new).

## License

[MIT](https://opensource.org/licenses/MIT)

It is discouraged to use this software in any project that promotes racism, sexism, homophobia, animal abuse, violence or any other form of hate speech.

## Credits

- [Zend Framework](https://github.com/zendframework)
