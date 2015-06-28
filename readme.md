# escape

PHP class to help prevent XSS (Cross Site Scripting) per OWASP recommendations as described [here](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet).

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
require 'escape.php';

$esc = esc('& " \' < >', 'css');
var_dump($esc);
```

#### Outputs:

```php
string(36) "\26 \20 \22 \20 \27 \20 \3C \20 \3E "
```
