<?php

/**
 * Class HTML_Encrypt
 *
 * @author  Tayfun Erbilen
 * @web     http://www.erbilen.net
 * @mail    tayfunerbilen@gmail.com
 */
class HTML_Encrypt
{

    /**
     * @param $str
     * @param int $len
     * @return array
     *
     * Kelimeyi utf8 karakterlerine uygun olarak parçalar.
     */
    public static function utf8_split($str, $len = 1)
    {
        $arr = array();
        $strLen = mb_strlen($str, 'UTF-8');
        for ($i = 0; $i < $strLen; $i++) {
            $arr[] = mb_substr($str, $i, $len, 'UTF-8');
        }
        return $arr;
    }

    /**
     * @param $character
     * @return mixed
     *
     * Her karakterin utf8'e uygun ASCII değerini döndürür.
     */
    public static function utf8_ord( $character )
    {
        list(, $ord) = unpack('N', mb_convert_encoding($character, 'UCS-4BE', 'UTF-8'));
        return $ord;
    }


    /**
     * @param $html
     * @return string
     *
     * Onluk sayı sisteminin onaltılık sayı sistemine dönüştürülmesi.
     */
    public static function encrypt( $html )
    {
        $html = str_replace(array("\n","\r","\t"), ' ', $html);
        $hex = '<script type="text/javascript">document.write(unescape("';
        $characters = self::utf8_split($html);
        foreach ( $characters as $character ){
            $hex .= '%' . dechex(self::utf8_ord($character));
        }
        $hex .= '"));</script>';
        return $hex;
    }

}
