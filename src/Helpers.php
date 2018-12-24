<?php

namespace FingerMessenger;

class Helpers
{
	static public function getRandomChar(int $length) :string
	{
		$source = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
		return self::getRandomStr($length, $source);
	}
	
	static public function getRandomNum(int $length) :string
	{
		$source = "0123456789";
		return self::getRandomStr($length, $source);
	}
	
	static public function getRandomLetter(int $length) :string
	{
		$source = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
		return self::getRandomStr($length, $source);
	}
	
	static public function getRandomStr(int $length, string $source) :string
	{
		$str = '';
		$max = strlen($source)-1;
		if ($length > $max+1){
			return $str;
		}
	
		for($i=0;$i<$length;$i++){
			$str .= $source[mt_rand(0,$max)];
		}
	
		return $str;
	}

	static public function ArrayToXml(array $arr) :string
	{
		$xml = "<xml>";
		foreach ($arr as $key=>$val)
		{
			if (is_numeric($val)){
				$xml.="<".$key.">".$val."</".$key.">";
			}else{
				$xml.="<".$key."><![CDATA[".$val."]]></".$key.">";
			}
		}
		$xml.="</xml>";
		return $xml;
	}
	
	static public function XmlToArray(string $xml) :array
	{
		libxml_disable_entity_loader(true);
		$values = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
		return $values;
	}
}