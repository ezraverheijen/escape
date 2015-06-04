# escape

PHP class to handle context specific output escaping per OWASP recommendations.

### Example 1:

```php
<?php

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

$esc = esc('& " \' < >', 'css');
var_dump($esc);
```

#### Outputs:

```php
string(36) "\26 \20 \22 \20 \27 \20 \3C \20 \3E "
```
