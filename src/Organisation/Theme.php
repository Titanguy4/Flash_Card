<?php

namespace App\Organisation;

class Theme {
    
    public static function nettoyage($deckers) {
        $decks = array();
        foreach($deckers as $decker){
            if($decker->getTheme()){
                $decks[] = array(
                    explode("-", $decker->getTheme()), 
                    $decker->getId(), 
                    $decker->getTitle(),
                    $decker->getCategory(),
                    $decker->getSlug());
            }
        }
        return $decks;
    }

    public static function unique($deckers) {
        $a = array();
        $decks = self::nettoyage($deckers);
        foreach($decks as $deck){
            $liste = implode("-", $deck[0]);
            $a[] = $liste;
        }
        $liste1 = implode("-", $a);
        $listes = explode("-", $liste1);
        return array_unique($listes);
    }

}