<?php
 
namespace core;

use \core\View;


class API {
    
    //Les attributs
    private $url = "https://api.ozae.com"; //Mettre l'url ici
    private $key = "key=11116dbf000000000000960d2228e999" ;//Mettre la clé ici 
    private $edition = "&edition=fr-fr";


    //Le constructeur   
	public function __construct(){
		
    }
    
    //Communiquer avec l'API
    public function curlInit(){
        
        $uri= "/gnw/articles?";
        $date= "date=20180701__20180702";
        $edition = "&edition=fr-fr";
        $key = "&key=11116dbf000000000000960d2228e999";
        $limit = "&hard_limit=500";
        $topic = "&topic=s";
        $order = "&order[col]=social_score";
        //$url = 'https://api.ozae.com/gnw/articles?date=20180701__20180702&edition=fr-fr&key=11116dbf000000000000960d2228e999&hard_limit=500&topic=s&order[col]=social_score'; 
        //$url = 'https://api.ozae.com/gnw/articles?date=20180701__20180702&edition=fr-fr&key=11116dbf000000000000960d2228e999&hard_limit=500&topic=sorder[col]=social_score'
        $url= $this->url.$uri.$date.$this->edition.$this->key.$limit.$topic;
        var_dump($url);
        $timeout = 10; 
        
        $ch = curl_init($url); 

        curl_setopt($ch, CURLOPT_FRESH_CONNECT, true); 
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout); 
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 

        if (preg_match('`^https://`i', $url)) 
        { 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
        } 

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

        // Récupération du contenu retourné par la requête 
        $page_content = curl_exec($ch); 

        curl_close($ch); 
        echo $page_content; 
        
    }

    // Les articles du thème sports
    public function getArticlesSport(){
        
        $uri= "/gnw/articles?";
        $date= "date=20180701__20180702";
        $edition = "&edition=fr-fr";
        $key = "&key=11116dbf000000000000960d2228e999";
        $limit = "&hard_limit=500";
        $topic = "&topic=s";
        $order = "&order[col]=social_score";
        // https://api.ozae.com/gnw/ngrams?date=20190103__20190109&limit=20&key=11116dbf000000000000960d2228e999&query=brexit&edition=fr-fr&topic=w
        $url= $this->url.$uri.$date.$this->edition."&".$this->key.$limit.$topic;
        $timeout = 10; 
        
        $ch = curl_init($url); 

        curl_setopt($ch, CURLOPT_FRESH_CONNECT, true); 
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout); 
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 

        if (preg_match('`^https://`i', $url)) 
        { 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
        } 

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

        // Récupération du contenu retourné par la requête 
        $page_content = json_decode(curl_exec($ch), true);

        
        curl_close($ch); 
        return $page_content; 
        
    }

    // Les mots-clés les plus mentionnés
    public function getMostMentionned(){
        $uri= "/gnw/ngrams?";
        $date= "date=20190103__20190109";
        $edition = "&edition=fr-fr";
        $key = "&key=11116dbf000000000000960d2228e999";
        $limit = "&hard_limit=500";
        $topic = "&topic=s";
        $order = "&order[col]=social_score";
        // https://api.ozae.com/gnw/ngrams?date=20190103__20190109&limit=20&key=11116dbf000000000000960d2228e999&query=brexit&edition=fr-fr&topic=w
        $url= $this->url.$uri.$date.$limit."&".$this->key.$topic;
        //var_dump($url);
        $timeout = 10; 
        
        $ch = curl_init($url); 

        curl_setopt($ch, CURLOPT_FRESH_CONNECT, true); 
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout); 
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 

        if (preg_match('`^https://`i', $url)) 
        { 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
        } 

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

        // Récupération du contenu retourné par la requête 
        $page_content = json_decode(curl_exec($ch), true);

        
        curl_close($ch); 
        return $page_content; 
    }


    // Les articles obtenus suite à une recherche
    public function getArticlesByQuery(){

        $uri= "/gnw/articles?";
        $date= "date=20190103__20190109";
        $edition = "&edition=fr-fr";
        $key = "&key=11116dbf000000000000960d2228e999";
        $limit = "&hard_limit=50";
        $topic = "&topic=s";
        $query = "&query=psg";
        $order = "&order[col]=social_score";
        // https://api.ozae.com/gnw/ngrams?date=20190103__20190109&limit=20&key=11116dbf000000000000960d2228e999&query=brexit&edition=fr-fr&topic=w
        $url= $this->url.$uri.$date."&".$this->key.$edition.$query.$limit;
        //var_dump($url);
        $timeout = 10; 
        
        $ch = curl_init($url); 

        curl_setopt($ch, CURLOPT_FRESH_CONNECT, true); 
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout); 
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 

        if (preg_match('`^https://`i', $url)) 
        { 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
        } 

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

        // Récupération du contenu retourné par la requête 
        $page_content = json_decode(curl_exec($ch), true);

        
        curl_close($ch); 
        return $page_content; 

    }


    // Le contenu d'un article via son ID
    public function getListByID(){ //TODO : Mettre un paramètres ici

        $tab_ngrams = $this->getMostMentionned();
        
        foreach( $tab_ngrams['ngrams'] as $key => $ngram ){
            
            foreach($ngram['articles_ids'] as $k => $id_article ){
                
                //debug($id_article,true);

                $uri= "/gnw/article/";
                $id= $id_article."?";
                $date= "date=20190103__20190109";
                $edition = "&edition=fr-fr";
                $key = "key=8dff35cfd68b48be8dff4c6a2d0fb3ac";
                $limit = "&hard_limit=50";
                $topic = "&topic=s";
                $query = "&query=psg";
                $order = "&order[col]=social_score";
                // https://api.ozae.com/gnw/ngrams?date=20190103__20190109&limit=20&key=11116dbf000000000000960d2228e999&query=brexit&edition=fr-fr&topic=w
                $url= $this->url.$uri.$id.$this->key;
                //var_dump($url);
                $timeout = 10; 
                
                $ch = curl_init($url); 

                curl_setopt($ch, CURLOPT_FRESH_CONNECT, true); 
                curl_setopt($ch, CURLOPT_TIMEOUT, $timeout); 
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 

                if (preg_match('`^https://`i', $url)) 
                { 
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
                } 

                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
                // Récupération du contenu retourné par la requête 
                var_dump(curl_exec($ch));

                $page_content = json_decode(curl_exec($ch), false);

                var_dump($page_content);

                curl_close($ch); 
                return $page_content; 






            }
        }

        //https://api.ozae.com/gnw/article/142453821/html_content?key=11116dbf000000000000960d2228e999
        //https://api.ozae.com/gnw/article/142453821/html_content?key=11116dbf000000000000960d2228e999
        
    }


}
