<?php

namespace Entity;

/**
 * Cette classe représente un film.
 */
class Movie
{
    public $id;
    public $title;
    public $synopsis;
    public $released_at;
    public $category;

    public function getReleasedAt()
    {
        $date = new \DateTime($this->released_at);

        return $date->format('d F Y');
    }


    /**
     * ajouter un getter pour le synopsis.
     * si le synopsis est plus long que 15 caracteres,
     * on affiche seulement les 15 premiers caracteres
     * avec ...
     */

    public function getSynopsis($truncate = 9)
    {
        $output = $this->synopsis;

        // Si la taille de la chaine est supérieure à $truncate
        if (strlen($output) > $truncate) {
            $output = substr($output, 0, $truncate) . '...';
        }

        return $output;
    }
    // public function getSynopsis()
    // {
    //     $max = 4;
    //         $strlen = strlen($this->synopsis);
    //         echo substr($this->synopsis,0,$max);
    //         if ($strlen > $max) {
    //             echo "...";
    //         }    
    // }


}
