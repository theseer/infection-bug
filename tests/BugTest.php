<?php declare(strict_types=1);

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Bug::class)]
class BugTest extends Testcase {

    public function testResult(): void {
        $this->assertEquals(
            ['a','c'],
            (new Bug)->test(['a','b','c'])
        );

    }
}
