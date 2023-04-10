<?php
namespace MonthlyBasis\Emoji;

use MonthlyBasis\Emoji\Model\Db as EmojiDb;
use MonthlyBasis\Emoji\Model\Table as EmojiTable;

class Module
{
    public function getServiceConfig()
    {
        return [
            'factories' => [
                EmojiDb\Sql::class => function ($sm) {
                    return new EmojiDb\Sql(
                        $sm->get('emoji')
                    );
                },
                EmojiTable\Emoji12::class => function ($sm) {
                    return new EmojiTable\Emoji12(
                        $sm->get(EmojiDb\Sql::class)
                    );
                },
            ],
        ];
    }
}
