<?php
namespace MonthlyBasis\EmojiTest;

use MonthlyBasis\Emoji\Module;
use MonthlyBasis\LaminasTest\ModuleTestCase;

class ModuleTest extends ModuleTestCase
{
    protected function setUp(): void
    {
        $this->module = new Module();
    }
}
