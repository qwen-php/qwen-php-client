<?php

namespace Qwen\Enums;

enum Models: string
{
    case QWEN_MAX = 'qwen-max';
    case QWEN_MAX_LATEST = 'qwen-max-latest';
    case QWEN_MAX_2025_01_25 = 'qwen-max-2025-01-25';
    case QWEN_PLUS = 'qwen-plus';
    case QWEN_PLUS_LATEST = 'qwen-plus-latest';
    case QWEN_PLUS_2025_01_25 = 'qwen-plus-2025-01-25';
    case QWEN_TURBO = 'qwen-turbo';
    case QWEN_TURBO_LATEST = 'qwen-turbo-latest';
    case QWEN_TURBO_2024_11_01 = 'qwen-turbo-2024-11-01';
    case QWEN_VL_MAX = 'qwen-vl-max';
    case QWEN_VL_PLUS = 'qwen-vl-plus';
    case QWEN2_5_VL_72B_INSTRUCT = 'qwen2.5-vl-72b-instruct';
    case QWEN2_5_VL_7B_INSTRUCT = 'qwen2.5-vl-7b-instruct';
    case QWEN2_5_VL_3B_INSTRUCT = 'qwen2.5-vl-3b-instruct';
    case QWEN2_5_7B_INSTRUCT_1M = 'qwen2.5-7b-instruct-1m';
    case QWEN2_5_14B_INSTRUCT_1M = 'qwen2.5-14b-instruct-1m';
    case QWEN2_5_72B_INSTRUCT = 'qwen2.5-72b-instruct';
    case QWEN2_5_32B_INSTRUCT = 'qwen2.5-32b-instruct';
    case QWEN2_5_14B_INSTRUCT = 'qwen2.5-14b-instruct';
    case QWEN2_5_7B_INSTRUCT = 'qwen2.5-7b-instruct';
    case QWEN2_72B_INSTRUCT = 'qwen2-72b-instruct';
    case QWEN2_57B_A14B_INSTRUCT = 'qwen2-57b-a14b-instruct';
    case QWEN2_7B_INSTRUCT = 'qwen2-7b-instruct';
    case QWEN1_5_110B_CHAT = 'qwen1.5-110b-chat';
    case TEXT_EMBEDDING_V3 = 'text-embedding-v3';
    case QWEN1_5_7B_CHAT = 'qwen1.5-7b-chat';
    case QWEN1_5_72B_CHAT = 'qwen1.5-72b-chat';
    case QWEN1_5_32B_CHAT = 'qwen1.5-32b-chat';
    case QWEN1_5_14B_CHAT = 'qwen1.5-14b-chat';
}
