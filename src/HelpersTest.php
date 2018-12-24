<?php

require "./Helpers.php";
require "../vendor/autoload.php";
require "../vendor/nette/tester/src/bootstrap.php";

use FingerMessenger\Helpers;
use Tester\Assert;

Tester\Environment::setup();


Assert::truthy(Helpers::getRandomChar(10));
Assert::truthy(Helpers::getRandomNum(10));
Assert::truthy(Helpers::getRandomLetter(10));
Assert::truthy(Helpers::getRandomStr(10, "H*I)8jr9823jr932jr92hwele"));
Assert::truthy(Helpers::ArrayToXml(array('name'=>'fingermessenger', 'email'=>'me@fingermessenger.com')));
Assert::truthy(Helpers::XmlToArray('<xml><name><![CDATA[fingermessenger]]></name><email><![CDATA[me@fingermessenger.com]]></email></xml>'));