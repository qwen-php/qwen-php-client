<?php

namespace Qwen\Contracts;

use Qwen\QwenClient;

interface QwenClientContract
{
    public static function build(string $apiKey): self;
    public function run(): string;
    public function query(string $content, ?string $role = "user"): self;
    public function withModel(?string $model = null): self;
    public function withStream(bool $stream = true): self;
}
