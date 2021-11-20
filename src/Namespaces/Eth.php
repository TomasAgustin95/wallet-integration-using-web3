<?php

declare(strict_types=1);

namespace Web3\Namespaces;

use Web3\Concerns\Requestable;

/**
 * @method string     protocolVersion()
 * @method array|bool syncing()
 * @method string     coinbase()
 * @method bool       mining()
 * @method string     hashrate()
 * @method string     gasPrice()
 * @method array      accounts()
 * @method string     blockNumber()
 * @method string     getBalance(array $params)
 * @method string     getStorageAt(array $params)
 * @method string     getTransactionCount(array $params)
 * @method string     getBlockTransactionCountByHash(array $params)
 * @method string     getBlockTransactionCountByNumber(array $params)
 * @method string     getUncleCountByBlockHash(array $params)
 * @method string     getUncleCountByBlockNumber(array $params)
 * @method string     getCode(array $params)
 * @method string     sign(array $params)
 * @method string     signTransaction(array $params)
 * @method string     sendTransaction(array $params)
 * @method string     sendRawTransaction(array $params)
 * @method string     call(array $params)
 * @method string     estimateGas(array $params)
 * @method array      getBlockByHash(array $params)
 * @method array      getBlockByNumber(array $params)
 * @method array      getTransactionByHash(array $params)
 * @method array      getTransactionByBlockHashAndIndex(array $params)
 * @method array      getTransactionByBlockNumberAndIndex(array $params)
 * @method array      getTransactionReceipt(array $params)
 * @method array      getUncleByBlockHashAndIndex(array $params)
 * @method array      getUncleByBlockNumberAndIndex(array $params)
 * @method array      getCompilers()
 * @method string     compileLLL(array $params)
 * @method array      compileSolidity(array $params)
 * @method string     compileSerpent(array $params)
 * @method string     newFilter(array $params)
 * @method string     newBlockFilter(array $params)
 * @method string     newPendingTransactionFilter(array $params)
 * @method bool       uninstallFilter(array $params)
 * @method array      getFilterChanges(array $params)
 * @method array      getFilterLogs(array $params)
 * @method array      getLogs(array $params)
 * @method array      getWork()
 * @method bool       submitWork(array $params)
 * @method bool       submitHashrate(array $params)
 *
 * @internal
 */
final class Eth
{
    use Requestable;
}
