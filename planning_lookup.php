<?php

require_once("simple_html_dom.php");

class planning_lookup {

    function isDomainAvailible($domain) {

        // check if the URL provided is actually valid
        if (!filter_var($domain, FILTER_VALIDATE_URL)) {
            return false;
        }

        // start up CURL
        $curlInit = curl_init($domain);
        curl_setopt($curlInit, CURLOPT_CONNECTTIMEOUT, 1);
        curl_setopt($curlInit, CURLOPT_HEADER, true);
        curl_setopt($curlInit, CURLOPT_NOBODY, true);
        curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, true);

        // let's get a response..
        $response = curl_exec($curlInit);
        curl_close($curlInit);
        if ($response) {
            return true;
        } else {
            return false; // our request was unsuccessful   
        }
    }

    function getPlanningResults($ward, $parish) {
        $url = "http://isharemaps.bathnes.gov.uk/data.aspx?requestType=parseTemplate&template=DevelopmentControlResults.tmplt&pageno=1&pagerecs=10&usesearch=true&order=DATEAPRECV%3ADESCENDING&ward%3ASRCH={$ward}&parish%3ASRCH={$parish}";

        $i = 0;
        $articles = array();

        // Only return an empty array if BOTH $ward and $parish are empty.
        if (empty($ward) && empty($parish)) {
            return $articles;
        }
 
        if ($this->isDomainAvailible($url)) {
            $html = file_get_html($url);

            foreach ($html->find('div.atSearchResults') as $article) {
                foreach ($article->find('div') as $li) {
                    // We only want to show the 5 most recent results, so if we surpass 5 then stop adding results to array
                    if ($i++ == 5) {
                        break;
                    }

                    $item['title'] = $li->find('p a', 0)->plaintext;
                    $link = $li->find('p a', 0)->outertext;

                    $pattern = '/<a\s[^>]*href=([\"\']??)([^\" >]*?)\\1[^>]*>(.*)<\/a>/siU';
                    preg_match($pattern, $link, $matches);
                    $item['link'] = $matches[2];
                    $reference = $li->find('p', 2)->plaintext;
                    $item['reference'] = substr($reference, 23, 12);
                    $item['date'] = substr($reference, 48, 10);

                    $item['description'] = $li->find('p', 1)->plaintext;
                    $item['status'] = str_replace("Application status: ", "", $li->find('p', 4)->plaintext);
                    $articles[] = $item;
                }
            }
        }

        return $articles;
    }

}
?>