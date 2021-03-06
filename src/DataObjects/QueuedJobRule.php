<?php

namespace Symbiote\QueuedJobs\DataObjects;

use AsyncPHP\Doorman\Rule;
use SilverStripe\ORM\DataObject;

/**
 * @property int $Processes
 * @property string $Handler
 * @property float $MinimumProcessorUsage
 * @property float $MaximumProcessorUsage
 * @property float $MinimumMemoryUsage
 * @property float $MaximumMemoryUsage
 * @property float $MinimumSiblingProcessorUsage
 * @property float $MaximumSiblingProcessorUsage
 * @property float $MinimumSiblingMemoryUsage
 * @property float $MaximumSiblingMemoryUsage
 */
class QueuedJobRule extends DataObject implements Rule
{
    /**
     * {@inheritDoc}
     * @var string
     */
    private static $table_name = 'QueuedJobRule';

    /**
     * @var array
     */
    private static $db = array(
        'Processes' => 'Int',
        'Handler' => 'Varchar',
        'MinimumProcessorUsage' => 'Decimal',
        'MaximumProcessorUsage' => 'Decimal',
        'MinimumMemoryUsage' => 'Decimal',
        'MaximumMemoryUsage' => 'Decimal',
        'MinimumSiblingProcessorUsage' => 'Decimal',
        'MaximumSiblingProcessorUsage' => 'Decimal',
        'MinimumSiblingMemoryUsage' => 'Decimal',
        'MaximumSiblingMemoryUsage' => 'Decimal',
    );

    /**
     * @inheritdoc
     *
     * @return int
     */
    public function getProcesses()
    {
        if ($this->getField('Processes') !== null) {
            return $this->getField('Processes');
        }

        return 1;
    }

    /**
     * @inheritdoc
     *
     * @return null|string
     */
    public function getHandler()
    {
        if ($this->getField('Handler')) {
            return $this->getField('Handler');
        }

        return null;
    }

    /**
     * @return null|float
     */
    public function getMinimumProcessorUsage()
    {
        if ($this->getField('MinimumProcessorUsage') !== null) {
            return $this->getField('MinimumProcessorUsage');
        }

        return null;
    }

    /**
     * @inheritdoc
     *
     * @return null|float
     */
    public function getMaximumProcessorUsage()
    {
        if ($this->getField('MaximumProcessorUsage') !== null) {
            return $this->getField('MaximumProcessorUsage');
        }

        return null;
    }

    /**
     * @inheritdoc
     *
     * @return null|float
     */
    public function getMinimumMemoryUsage()
    {
        if ($this->getField('MinimumMemoryUsage') !== null) {
            return $this->getField('MinimumMemoryUsage');
        }

        return null;
    }

    /**
     * @return null|float
     */
    public function getMaximumMemoryUsage()
    {
        if ($this->getField('MaximumMemoryUsage') !== null) {
            return $this->getField('MaximumMemoryUsage');
        }

        return null;
    }

    /**
     * @inheritdoc
     *
     * @return null|float
     */
    public function getMinimumSiblingProcessorUsage()
    {
        if ($this->getField('MinimumSiblingProcessorUsage') !== null) {
            return $this->getField('MinimumSiblingProcessorUsage');
        }

        return null;
    }

    /**
     * @inheritdoc
     *
     * @return null|float
     */
    public function getMaximumSiblingProcessorUsage()
    {
        if ($this->getField('MaximumSiblingProcessorUsage') !== null) {
            return $this->getField('MaximumSiblingProcessorUsage');
        }

        return null;
    }

    /**
     * @inheritdoc
     *
     * @return null|float
     */
    public function getMinimumSiblingMemoryUsage()
    {
        if ($this->getField('MinimumSiblingMemoryUsage') !== null) {
            return $this->getField('MinimumSiblingMemoryUsage');
        }

        return null;
    }

    /**
     * @inheritdoc
     *
     * @return null|float
     */
    public function getMaximumSiblingMemoryUsage()
    {
        if ($this->getField('MaximumSiblingMemoryUsage') !== null) {
            return $this->getField('MaximumSiblingMemoryUsage');
        }

        return null;
    }
}
