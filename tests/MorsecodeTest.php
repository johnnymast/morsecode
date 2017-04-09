<?php

namespace JM\Morsecode\Tests;

use JM\Morsecode\Morsecode;

class MorsecodeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test 'sos' would encode to '... --- ...';
     */
    function test_it_encodes_a_string()
    {
        $morse = new Morsecode();
        $actual = $morse->encode('sos');
        $expected = '... --- ...';

        $this->assertEquals($expected, $actual);
    }

    /**
     * Test ... --- ... would decode to 'sos'
     */
    function test_it_decodes_a_string()
    {
        $morse = new Morsecode();
        $actual = $morse->decode('... --- ...');
        $expected = 'sos';

        $this->assertEquals($expected, $actual);
    }
}
