<?php

namespace spec\johnnymast\Morsecode;

use PhpSpec\ObjectBehavior;
use johnnymast\Morsecode\Morsecode;

class MorsecodeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Morsecode::class);
    }

    function it_can_encode()
    {
        $this->encode('sos')->shouldReturn('... --- ...');
    }

    function it_can_decode()
    {
        $this->decode('... --- ...')->shouldReturn('sos');
    }

    function it_should_encode_if_constructed_with_value() {
        $this->beConstructedWith('sos');
        $this->encode()->shouldReturn('... --- ...');
    }

    function it_should_decode_if_constructed_with_value() {
        $this->beConstructedWith('... --- ...');
        $this->decode()->shouldReturn('sos');
    }
}
