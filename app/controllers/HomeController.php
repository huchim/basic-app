<?php

class HomeController extends \Emotion\ControllerBase {
    public function Index() {
        $this->assign("age", 29);
        return $this->View();
    }
}