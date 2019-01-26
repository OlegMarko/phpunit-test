<?php

use App\Support\Collection;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    /**
     * @test
     */
    public function emptyInstantiatedCollectionReturnsNoItems()
    {
        $collection = new Collection;

        $this->assertEmpty($collection->get());
    }

    /**
     * @test
     */
    public function countCorrectItems()
    {
        $collection = new Collection([
            'one', 'two', 'three'
        ]);

        $this->assertEquals(3, $collection->count());
    }
}