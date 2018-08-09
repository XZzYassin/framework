<?php

namespace Illuminate\Queue\Events;

class JobsQueueProcessed
{
    /**
     * The user defined chain data passed to withChain method.
     *
     * @var string
     */
    public $chainData;

    /**
     * Create a new event instance.
     *
     * @param  string  $connectionName
     * @return void
     */
    public function __construct($chainData)
    {
        $this->chainData = $chainData;
    }
}
