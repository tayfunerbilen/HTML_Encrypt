HTML_Encrypt
============

HTML kodlarını şifreleme sınıfı

Örnek Kullanımı
============

```php
<?php

require 'HTML_Encrypt.php';

$html = '<!doctype html>
<html>
<head>
  <meta charset="utf8">
  <title>Example</title>
</head>
<body>

  <h1>Welcome Test Page</h1>

</body>
</html>';

echo HTML_Encrypt::encrypt($html);

?>
```
