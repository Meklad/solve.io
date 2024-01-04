<?php

use Owllog\SolveIo\MacberTest\MacberTest1;

require "vendor/autoload.php";

# Problem One [MacberTest1]:

$hermetica = "Truth! Certainty! That in which there is no doubt!
That which is above is from that which is below, and that which is below is from that which is above,
working the miracles of one [thing]. As all things were from One.
Its father is the Sun and its mother the Moon.
The Earth carried it in her belly, and the Wind nourished it in her belly,
as Earth which shall become Fire.
Feed the Earth from that which is subtle,
with the greatest power. It ascends from the earth to the heaven
and becomes ruler over that which is above and that which is below.";

dump(MacberTest1::count($hermetica));