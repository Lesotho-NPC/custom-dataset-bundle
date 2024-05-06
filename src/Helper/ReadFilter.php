<?php
/**
 * Copyright (c) 2019, VillageReach
 * Licensed under the Non-Profit Open Software License version 3.0.
 * SPDX-License-Identifier: NPOSL-3.0
 */

declare(strict_types=1);

namespace PcmtCustomDatasetBundle\Helper;

use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;

class ReadFilter implements IReadFilter
{
    /**
     * @var string
     */
    private $columnToFilter;

    public function __construct(string $columnToFilter = 'ColumnToFilter')
    {
        $this->columnToFilter = $columnToFilter;
    }

    public function readCell($column, $row, $worksheetName = ''): bool
    {
        if ($row === 1 || $column !== $this->columnToFilter) {
            return true;
        }

        return false;
    }
}
