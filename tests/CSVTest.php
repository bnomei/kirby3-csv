<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Bnomei\CSV;
use PHPUnit\Framework\TestCase;

final class CSVTest extends TestCase
{
    public function testCSVLibExists()
    {
        $this->assertIsString(League\Csv\Reader::class);
    }
}
