<?php

/**
 * Cette classe représente un formulaire pour un site web.
 */
class Form
{
    private $fields = [];

    public function input($name)
    {
        // A chaque appel de la méthode input
        // On ajoute un nouveau champ dans notre tableau
        $this->fields[] = [
            'tag' => 'input',
            'name' => $name
        ];

        return $this; // On renvoie l'objet pour utiliser les méthodes en chaine
    }

    public function textarea($name)
    {
        // A chaque appel de la méthode textarea
        // On ajoute un nouveau champ dans notre tableau
        $this->fields[] = [
            'tag' => 'textarea',
            'name' => $name
        ];

        return $this; // On renvoie l'objet pour utiliser les méthodes en chaine
    }

    public function button($name)
    {
        // A chaque appel de la méthode button
        // On ajoute un nouveau bouton dans notre tableau
        $this->fields[] = [
            'tag' => 'button',
            'name' => $name
        ];

        return $this; // On renvoie l'objet pour utiliser les méthodes en chaine
    }

    /**
     * Méthode magique qui est appellé quand on essaye d'afficher
     * l'objet avec un echo.
     */
    public function __toString()
    {
        $html = '<form>';
        // On affiche tous les champs du formulaire
        foreach ($this->fields as $field) {
            $html .= '<div class="form-group">';

            // On affiche le label si c'est un input ou un textarea
            if ('button' !== $field['tag']) {
                $html .= '<label for="'.$field['name'].'">'.ucfirst($field['name']).'</label>';
            }

            if ('textarea' === $field['tag']) {
                $html .= '<textarea name="'.$field['name'].'" id="'.$field['name'].'" class="form-control"></textarea>';
            } else if ('input' === $field['tag']) {
                $html .= '<input type="text" name="'.$field['name'].'" id="'.$field['name'].'" class="form-control">';
            } else {
                $html .= '<button class="btn btn-block btn-success">'.$field['name'].'</button>';
            }

            $html .= '</div>';
        }
        $html .= '</form>';

        return $html;
    }
}
