<?php

namespace App\Tests;

use App\Truncater;
use PHPUnit\Framework\TestCase;

class TruncaterTest extends TestCase
{
    public function testTruncate()
    {
        $defaultTruncater = new Truncater();
        $this->assertSame("Кручинкин Александр Александрович", $defaultTruncater->truncate("Кручинкин Александр Александрович"));
        $this->assertSame("Кручинкин ...", $defaultTruncater->truncate(
            "Кручинкин Александр Александрович",
            ['length' => 10]
        ));
        $this->assertSame("Кручинкин Александр Але...", $defaultTruncater->truncate(
            "Кручинкин Александр Александрович",
            ['length' => -10]
        ));
        $this->assertSame("Кручинкин *", $defaultTruncater->truncate(
            "Кручинкин Александр Александрович",
            ['length' => 10, 'separator' => '*']
        ));
        $this->assertSame("Кручинкин Александр Александрович", $defaultTruncater->truncate("Кручинкин Александр Александрович"));

        $overriddenTruncater1 = new Truncater(['length' => 14]);
        $this->assertSame("Кручинкин Алек...", $overriddenTruncater1->truncate("Кручинкин Александр Александрович"));
        $this->assertSame("Кручинкин Алек\\", $overriddenTruncater1->truncate(
            "Кручинкин Александр Александрович",
            ['separator' => '\\']
        ));

        $overriddenTruncater2 = new Truncater(['length' => 14, 'separator' => '***']);
        $this->assertSame("Кручинкин Алек***", $overriddenTruncater2->truncate("Кручинкин Александр Александрович"));
    }
}
