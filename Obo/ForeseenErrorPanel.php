<?php

namespace Obo;

class ForeseenErrorPanel {

    public static function addPanel($e) {
        if($e instanceof \obo\Exceptions\Exception && !is_null($e->foreseenFileError) && !is_null($e->foreseenLineError)) {
            return array(
                "tab" =>"Foreseen Error",
                "panel" => \Tracy\BlueScreen::highlightFile($e->foreseenFileError, (int) $e->foreseenLineError, 20)
            );
        }
    }
}