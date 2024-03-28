<?php

declare(strict_types=1);

namespace Faker\Test\Provider\fr_FR;

use Faker\Provider\fr_FR\Address;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    public function testPostcode(): void
    {
        $postcode = $this->faker->postcode();
        self::assertNotEmpty($postcode);
        self::assertIsString($postcode);
        self::assertMatchesRegularExpression('@^\d{5}$@', $postcode);
    }

    public function testSecondaryAddress(): void
    {
        self::assertEquals('Étage 007', $this->faker->secondaryAddress());
        self::assertEquals('Bât. 932', $this->faker->secondaryAddress());
    }

    public function testRegion(): void
    {
        self::assertEquals('Occitanie', $this->faker->region());
        self::assertEquals('Auvergne-Rhône-Alpes', $this->faker->region());
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
