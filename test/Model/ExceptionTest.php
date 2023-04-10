<?php
namespace MonthlyBasis\EmojiTest\Model;

use MonthlyBasis\Emoji\Model\Exception as EmojiException;
use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
    protected function setUp(): void
    {
        $this->exception = new EmojiException();
    }

    public function test_try_catch()
    {
        try {
            throw new EmojiException('This is the message.');
            $this->fail();
        } catch (EmojiException $emojiException) {
            $this->assertSame(
                'This is the message.',
                $emojiException->getMessage(),
            );
        }
    }
}
