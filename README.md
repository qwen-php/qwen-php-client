<p align="center">
  <a href="https://qwen-php/qwen-php-client" target="_blank">
    <img src="https://github.com/qwen-php/qwen-php-client/blob/master/public/qwen_screenshot.png?raw=true" alt="Qwen Usage">
  </a>
</p>

## 🚧 This Project is Under Development!

V1 will Released in few Days .

# qwen PHP Client

## Table of Contents
- [Overview](#Overview)
    - [Features](#key-Features)
- [Installation](#installation)
- [Quick Start Guide](#quick-start-guide)
    - [Basic Usage](#basic-usage)
    - [Advanced Usage](#advanced-usage)
    - [Use With Frameworks](#use-with-frameworks)
- [Testing](#testing)
- [Contributors](#contributors-)
- [License](#license)

---
## Overview
**qwen PHP Client** is a robust and community-driven PHP client library for seamless integration with the [Qwen](https://qwenlm.ai/) API.
### Key Features
- **Easy Integration:** Simplifies interaction with the qwen API using a PHP client.
- **Method Chaining:** Supports fluent method chaining for building requests.
- **Customizable:** Allows setting different models, query roles, and streaming options.
- **PSR-18 Compliance:** Utilizes PSR-18 HTTP client for making API requests.

---

## Installation

You can install the package via Composer:

```bash
composer require qwen-php/qwen-php-client
```

**Ensure your project meets the following requirements:**
- PHP 8.1 or later

---

## Quick Start Guide

### Basic Usage

```php
use Qwen\QwenClient;

$apiKey = 'your-api-key';

$response = QwenClient::build($apiKey)
    ->query('Hello qwen, how are you today?')
    ->run();

echo 'API Response:'.$response;
```

**Note**: in easy mode it will take defaults for all configs [Check Default Values](https://github.com/qwen-php/qwen-php-client/blob/master/src/Enums/Configs/DefaultConfigs.php)

### Advanced Usage

```php
use Qwen\QwenClient;
use Qwen\Enums\Queries\QueryRoles;
use Qwen\Enums\Models;

$apiKey = 'your-api-key';

$response = QwenClient::build($apiKey, 'https://dashscope-intl.aliyuncs.com', 500)
    ->query('System setup query', 'system')
    ->query('User input message', 'user')
    ->withModel(Models::CODER->value)
    ->run();

echo 'API Response:'.$response;
```

## Use With Frameworks

Coming soon

---

## Testing

tests will come soon .

## Changelog

See [CHANGELOG](CHANGELOG.md) for recent changes.

## Contributors ✨

Thanks to these wonderful people for contributing to this project! 💖

<table>
  <tr>
    <td align="center">
      <a href="https://github.com/omaralalwi">
        <img src="https://avatars.githubusercontent.com/u/25439498?v=4" width="50px;" alt="Omar AlAlwi"/>
        <br />
        <sub><b>Omar AlAlwi</b></sub>
      </a>
      <br />
      🏆 Creator
    </td>
 </tr>
</table>

Want to contribute? Check out the [contributing guidelines](./CONTRIBUTING.md) and submit a pull request! 🚀

## Security

If you discover any security-related issues, please email creator : `omaralwi2010@gmail.com`.

## License

The MIT License (MIT). See [LICENSE](LICENSE.md) for more information.
