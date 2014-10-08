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

/**
  output:
  
  <script type="text/javascript">document.write(unescape("%3c%21%64%6f%63%74%79%70%65%20%68%74%6d%6c%3e%20%20%3c%68%74%6d%6c%3e%20%20%3c%68%65%61%64%3e%20%20%20%20%3c%6d%65%74%61%20%63%68%61%72%73%65%74%3d%22%75%74%66%38%22%3e%20%20%20%20%3c%74%69%74%6c%65%3e%45%78%61%6d%70%6c%65%3c%2f%74%69%74%6c%65%3e%20%20%3c%2f%68%65%61%64%3e%20%20%3c%62%6f%64%79%3e%20%20%20%20%20%20%3c%68%31%3e%57%65%6c%63%6f%6d%65%20%54%65%73%74%20%50%61%67%65%3c%2f%68%31%3e%20%20%20%20%3c%2f%62%6f%64%79%3e%20%20%3c%2f%68%74%6d%6c%3e"));</script>

**/

?>
```
