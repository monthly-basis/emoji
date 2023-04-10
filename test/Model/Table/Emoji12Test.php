<?php
namespace MonthlyBasis\EmojiTest\Model\Table;

use MonthlyBasis\Emoji\Model\Table as EmojiTable;
use MonthlyBasis\LaminasTest\TableTestCase;

class Emoji12Test extends TableTestCase
{
    protected function setUp(): void
    {
        $this->setForeignKeyChecks(0);
        $this->dropAndCreateTable('emoji_12');
        $this->setForeignKeyChecks(1);

        $this->emoji12Table = new EmojiTable\Emoji12(
            $this->getSql()
        );
    }

    public function test_insert()
    {
        $result = $this->emoji12Table->insert(
            values: [
                'emoji_12_id' => 123,
                'name' => 'grinning face',
                'class' => 'grinning-face',
                'html' => '&#x1F600;',
            ],
        );
        $this->assertSame(
            1,
            $result->getAffectedRows()
        );
    }
}
