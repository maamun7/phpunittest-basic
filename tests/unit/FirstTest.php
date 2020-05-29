<?php
/**
 * Created by PhpStorm.
 * User: Mamun
 * Date: 5/29/20
 * Time: 11:25 PM
 */

use \PHPUnit\Framework\TestCase;


class FirstTest extends TestCase
{
    /** @test */
    public function multiplication_of_two_number() {
        $a = 5;
        $b = 4;
        $c = $a * $b;

        $this->assertEquals($c, 20);
    }
}