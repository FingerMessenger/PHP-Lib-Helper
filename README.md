## Install
	
composer require fingermessenger/helpers

## Usage

```php
use FingerMessenger\Helpers;
```

Helpers::getRandomChar(int $length) :string 取得指定长度的随机字符串（包括：大小写字母和数字）

Helpers::getRandomNum(int $length) :string	取得指定长度的随机字符串，只包含数字

Helpers::getRandomLetter(int $length) :string 取得指定长度的随机字母字符串，只包含大小写字母

Helpers::getRandomStr(int $length, string $source) :string 取得指定长度的随机字符串，数据源由source提供

Helpers::ArrayToXml(array $arr) :string 将数组转换成xml文档字符串

Helpers::XmlToArray(string $xml) :array 将xml文档字符串转换成数组