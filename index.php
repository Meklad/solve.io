<?php

require "vendor/autoload.php";

use Owllog\SolveIo\MacberTest\{
    MacberTest1,
    MacberTest2,
    MacberTest3
};


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
dump("Problem One [MacberTest1]");
dump(MacberTest1::count($hermetica));

# Problem Two [MacberTest2]:
dump("Problem Two [MacberTest2]");
dump(MacberTest2::group([1, 2, 3, 4, 5], 2));
dump(MacberTest2::group([1, 2, 3, 4, 5], 3));
dump(MacberTest2::group([1, 2, 3, 4, 5], 6));

# Problem Three [MacberTest3]:
dump("Problem Three [MacberTest3]");

$highEarnersFinder = new MacberTest3();

$highEarnersFinder->insertData();

$result = $highEarnersFinder->findHighEarners();

dd($result);