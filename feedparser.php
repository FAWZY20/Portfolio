<?php
// inclusion de la classe magpierss
require_once("magpierss/rss_fetch.inc");

function FeedParser($url_feed, $nb_items_affiches=10)
{
    // lecture du fichier distant (flux XML)
    $rss = fetch_rss($url_feed);

    // si la lecture s'est bien passee,
    // on lit les elements
    if (is_array($rss->items))
    {
        // on ne recupere que les elements les + recents
        $items = array_slice($rss->items, 0, $nb_items_affiches);

        // debut de la liste
        // (vous pouvez indiquer un style CSS
        // pour la formater)
        $html = "<ul>n";

        // boucle sur tous les elements
        foreach ($items as $item)
        {
            $html .= "<li>";
            $html .= "<a href="http://localhost:63342/Portfolio-ElsamFawzy/DISPOSITIF%20VEILLE-VEILLE%20TECHNOLOGique.html?_ijt=a3vjrv1f2kqprqorvfqr693efg".$item['link']."">".$item['title']."</a>";
    $html .= "</li>n";
   }
        $html .= "</ul>n";
    }

    // retourne le code HTML a inclure dans la page
    return $html;
}
?>
