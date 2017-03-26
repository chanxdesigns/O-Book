<?php

namespace App\Http\ViewComposers;


use Illuminate\View\View;

class Sidebar
{
    private function getLanguages () {
        return array(
            "javascript" => [
                "name" => "JavaScript",
                "logo" => "https://upload.wikimedia.org/wikipedia/commons/9/99/Unofficial_JavaScript_logo_2.svg"
            ],
            "angularjs" => [
                "name" => "AngularJS",
                "logo" => "https://cdn.worldvectorlogo.com/logos/angular-icon.svg"
            ],
            "java" => [
                "name" => "Java",
                "logo" => "http://vignette4.wikia.nocookie.net/spore/images/2/2e/Java_Logo.svg/revision/latest?cb=20101031041704"
            ],
            "mongodb" => [
                "name" => "MongoDB",
                "logo" => "https://images.g2crowd.com/uploads/product/hd_favicon/1487565877/mongodb.svg"
            ]
        );
    }

    public function compose (View $view) {
        $view->with('languages', $this->getLanguages());
    }
}