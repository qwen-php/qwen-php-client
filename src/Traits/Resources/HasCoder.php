<?php

namespace Qwen\Traits\Resources;

use Qwen\Resources\Coder;

trait HasCoder
{
    /**
     * Send the accumulated queries to the code resource.
     *
     * @return string
     */
    public function code(): string
    {
        $requestData = [
            'messages' => $this->queries,
            'model' => $this->model,
            'stream' => $this->stream,
        ];
        $this->queries = [];
        $this->setResult((new Coder($this->httpClient))->sendRequest($requestData));
        return $this->getResult()->getContent();
    }
}
