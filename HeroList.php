<?php
$xmldata = 'http://api.steampowered.com/IEconDOTA2_205790/GetHeroes/v0001/?language=en&key=FBCD486A961397C9BB6F262A7634635A&format=xml';
$open = fopen($xmldata, 'r');
$content = stream_get_contents($open);
fclose($open);
$xml = new SimpleXMLElement ($content);

echo "<table width='500' border='1' align='center'>";

foreach ($xml->heroes->hero as $hero) {
    $heronamestring = $hero->name;
    $subheronamestring = str_replace("npc_dota_hero_","", "$heronamestring");
    echo "<tr><td>";
    echo '<h2>' . $hero->localized_name . '</h2>';
    echo "<img src='http://media.steampowered.com/apps/dota2/images/heroes/".$subheronamestring."_lg.png'>";
    echo "</tr></td";
}

echo "</table>";

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Hero List</title>
        <link href="http://www.dota2.com/public/css/global.css" rel="stylesheet" type="text/css" />
        <link href="http://www.dota2.com/public/css/heropedia.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            *{color:#ccc;font-size:13px;text-shadow: 1px 1px 1px rgba(0,0,0,0.5);}
            a{color:#A9CF54 !important;}
            h1,h2,h3{text-align: center;}
            h2{font-size:16px;color:#92A525;}
            p{font-family:Tahoma;}
            td{font-family:Tahoma;text-align:center;padding:2px 5px;}
        </style>
    </head>
    <body>
        
    </body>

</html>


