### 开发 Laravel alipay-sdk-PHP-20170411150151 

### 用法

```
composer require alezh/alipay
```

或者在你的 `composer.json` 的 require 部分中添加:
```json
 "alezh/alipay": "~1.0"
```

下载完毕之后,直接配置 `config/app.php` 的 `providers`:

```php
\Alezh\Alipay\AopClientProvider::class,
```
$ php artisan vendor:publish --provider="Alezh\Alipay\AopClientProvider"