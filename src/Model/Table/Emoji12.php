<?php
namespace MonthlyBasis\Emoji\Model\Table;

use Laminas\Db\Adapter\Driver\Pdo\Result;
use MonthlyBasis\Emoji\Model\Db as EmojiDb;
use MonthlyBasis\Laminas\Model\Db as LaminasDb;

class Emoji12 extends LaminasDb\Table
{
    protected string $table = 'emoji_12';

    public function __construct(
        protected \Laminas\Db\Sql\Sql $sql
    ) {
    }
}
