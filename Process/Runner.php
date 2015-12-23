<?php

namespace Avantinternet\Modules\Process;

use Avantinternet\Modules\Contracts\RunableInterface;
use Avantinternet\Modules\Repository;

class Runner implements RunableInterface
{
    /**
     * The module instance.
     *
     * @var \Avantinternet\Modules\Repository
     */
    protected $module;

    /**
     * The constructor.
     *
     * @param \Avantinternet\Modules\Repository $module
     */
    public function __construct(Repository $module)
    {
        $this->module = $module;
    }

    /**
     * Run the given command.
     *
     * @param string $command
     */
    public function run($command)
    {
        passthru($command);
    }
}
