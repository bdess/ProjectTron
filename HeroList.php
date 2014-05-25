<?php
$xmldata = 'http://api.steampowered.com/IEconDOTA2_205790/GetHeroes/v0001/?language=en&key=FBCD486A961397C9BB6F262A7634635A&format=xml';
$open = fopen($xmldata, 'r');
$content = stream_get_contents($open);
fclose($open);
$xml = new SimpleXMLElement ($content);

echo "<table width='500' border='1'>";

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



