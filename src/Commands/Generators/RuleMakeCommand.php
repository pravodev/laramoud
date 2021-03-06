<?php

namespace Laramoud\Modules\Commands\Generators;

use Illuminate\Foundation\Console\RuleMakeCommand as BaseRuleMakeCommand;
use Laramoud\Modules\Contracts\GeneratorTrait;

class RuleMakeCommand extends BaseRuleMakeCommand
{
    use GeneratorTrait;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'laramoud-make:rule';
}
