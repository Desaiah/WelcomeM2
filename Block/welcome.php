<?php

namespace Chanikyahub\WelcomeM2\Block;


use Magento\Framework\View\Element\Template;

class Welcome extends Template
{
    public function getText() {
        return "Welcome to My first Magento-2 Custom Module";
    }
}