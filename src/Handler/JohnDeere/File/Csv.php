<?php

namespace WebCrawler\Handler\JohnDeere\File;

use WebCrawler\Handler\Contract\File\Csv as CsvContract;

class Csv extends CsvContract
{
    public function HandlerResultRows($results)
    {
        $rows = [];
        foreach ($results as $code => $items) {
            ['resultCrawler' => $resultCrawler, 'data' => $data] = $items;
            foreach ($resultCrawler as $item) {
                $rows[] = array_values(array_merge($data, $item));
            }
        }
        return $rows;
    }

    /**
     * @return array
     */
    public function getHeaderSuccess()
    {
        return array_merge($this->getHeaderReaderData(), [ 'Descrição' ]);
    }

    /**
     * @return array
     */
    public function getHeaderUnsuccess()
    {
        return array_merge($this->getHeaderReaderData(), [ 'Messagem' ]);
    }

    /**
     * @return array
     */
    public function getHeaderReaderData()
    {
        return [ 'ID_ORIGINAL', 'COD_COMPL' ];
    }

    /**
     * @return string
     */
    public function getReaderDataParamSearch()
    {
        return 'COD_COMPL';
    }
}
