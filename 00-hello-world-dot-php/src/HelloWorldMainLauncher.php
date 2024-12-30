<?php

namespace SscCc\HelloWorld;

class HelloWorldMainLauncher
{
    public function __construct(
        private readonly int $foo = 0,
    ) {
    }

    public function songRefrain(): void
    {
        for ($i = 0; $i < $this->foo; $i++) {
            echo "Hello World!\n";
        }
        $pippo = 0;
        while ($pippo < $this->foo) {
            echo "Hello World!\n";

            $pippo++;
        }
    }

    public static function main(): void
    {
        echo "Hello World Programmer Start\n";

        $tizzio = new HelloWorldMainLauncher(2);
        $tizzio->songRefrain();

        echo "Program Finished!\n";
    }

    /**
     * If I may introduce a bug, PHP will "manage" it for me
     * with warnings and notices (if I'm lucky).
     * Then I'll write my code once, and debug it everywhere!
     * With dynamic and weak typing, PHP allows me to discover type issues right when I least expect them!
     */
    public function falseMethod(): void
    {
        $metal = false;
        if ($metal === false) {
            $joeyDeCaio = null;

            strlen($joeyDeCaio);
        }
    }
}
