<?php

namespace Knp\FriendlyContexts\Faker\Provider;

class Miscellaneous extends Base
{
    public function supportsParent($parent)
    {
        return $parent instanceOf \Faker\Provider\Miscellaneous;
    }
}
