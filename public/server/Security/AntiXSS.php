<?php namespace Server\Security;

class AntiXSS {
    public function hsc($content) {
        return htmlspecialchars($content);
    }
}