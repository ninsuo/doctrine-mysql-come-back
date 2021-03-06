<?php

namespace Facile\DoctrineMySQLComeBack\Doctrine\DBAL\Connections;

use Doctrine\DBAL\Connections\MasterSlaveConnection as DBALMasterSlaveConnection;
use Facile\DoctrineMySQLComeBack\Doctrine\DBAL\ConnectionTrait;
use Facile\DoctrineMySQLComeBack\Doctrine\DBAL\ConnectionInterface;

/**
 * Class MasterSlaveConnection
 */
class MasterSlaveConnection extends DBALMasterSlaveConnection implements ConnectionInterface
{
    use ConnectionTrait;
}
