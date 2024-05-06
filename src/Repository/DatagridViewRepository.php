<?php
/**
 * Copyright (c) 2020, VillageReach
 * Licensed under the Non-Profit Open Software License version 3.0.
 * SPDX-License-Identifier: NPOSL-3.0
 */

declare(strict_types=1);

namespace PcmtCustomDatasetBundle\Repository;

use Akeneo\Tool\Component\StorageUtils\Repository\IdentifiableObjectRepositoryInterface;
use Oro\Bundle\PimDataGridBundle\Repository\DatagridViewRepository as BaseDatagridViewRepository;

class DatagridViewRepository extends BaseDatagridViewRepository implements IdentifiableObjectRepositoryInterface
{
    public function getIdentifierProperties()
    {
        return ['label'];
    }

    public function findOneByIdentifier($identifier)
    {
        return $this->findOneBy([
            'label' => $identifier,
        ]);
    }
}
