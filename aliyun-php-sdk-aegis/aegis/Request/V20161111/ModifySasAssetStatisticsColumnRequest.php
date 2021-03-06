<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifySasAssetStatisticsColumn
 *
 * @method string getSourceIp()
 * @method string getStatisticsColumn()
 */
class ModifySasAssetStatisticsColumnRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'aegis',
            '2016-11-11',
            'ModifySasAssetStatisticsColumn',
            'vipaegis'
        );
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $statisticsColumn
     *
     * @return $this
     */
    public function setStatisticsColumn($statisticsColumn)
    {
        $this->requestParameters['StatisticsColumn'] = $statisticsColumn;
        $this->queryParameters['StatisticsColumn'] = $statisticsColumn;

        return $this;
    }
}
