# phpMyAdmin - AI Enhanced Edition

**Version 5.2.2 - AI Enhanced 2025.6.14**

A web interface for MySQL and MariaDB with AI-powered features.

- **Official Website**: https://www.phpmyadmin.net/
- **Professional Version**: http://www.phpmyadmin.pro/

## 🤖 AI Enhanced vs Original phpMyAdmin

### ✨ AI Enhanced Advantages

- **Smart SQL Generation**: Automatically generate SQL statements from natural language descriptions, no need to memorize complex syntax
- **Smart Test Data Generation**: One-click generation of business logic-compliant test data based on descriptions  
- **Intelligent Code Optimization**: Automatically analyze and optimize SQL structure to avoid performance issues caused by large data volumes
- **Smart Error Fixing**: One-click detection and suggestions for SQL errors based on descriptions

### 📝 Original Features

- **Traditional SQL Writing**: All SQL statements must be written manually
- **Manual Data Management**: Test data must be created and managed manually
- **Basic Features**: Provides basic database management functions
- **Traditional Interface**: Standard web interface, requires more manual operations

## 🚀 Core AI Features

### AI SQL Generation
Generate SQL statements based on user requirements (including table headers, table names, field names, field types, field lengths, field constraints, etc.)

### AI Test Data Generation
Generate test data based on user requirements (including table headers, table names, field names, field types, field lengths, field constraints, etc.)

### Review & Modify Code
After users restate or change requirements, AI provides intelligent suggestions and modifications

## ⚙️ AI API Installation

To use the AI features, you need to configure AI API keys in the `api_config.php` file.

### Supported AI Providers

- **OpenAI**: Configure your OpenAI API key for GPT models
- **DeepSeek**: Configure your DeepSeek API key for advanced reasoning models  
- **Aliyun**: Configure your Aliyun DashScope API key for Qwen models

### Configuration Steps

1. Open the `api_config.php` file in your phpMyAdmin root directory

2. Set your preferred AI provider by modifying the `API_PROVIDER` constant:
   ```php
   define('API_PROVIDER', 'openai'); // or 'deepseek', 'aliyun'
   ```

3. Add your API key to the corresponding configuration:
   ```php
   // For OpenAI
   define('OPENAI_API_KEY', 'your-openai-api-key-here');
   
   // For DeepSeek
   define('DEEPSEEK_API_KEY', 'your-deepseek-api-key-here');
   
   // For Aliyun
   define('ALIYUN_API_KEY', 'your-aliyun-api-key-here');
   ```

4. Save the file and the AI features will be ready to use

> **Note**: You only need to configure the API key for the provider you choose to use.

## 📋 Summary

phpMyAdmin is intended to handle the administration of MySQL over the web.
For a summary of features, list of requirements, and installation instructions,
please see the documentation in the `./doc/` folder or at https://docs.phpmyadmin.net/

This AI Enhanced Edition adds intelligent features powered by modern AI technology to streamline database management tasks.

## 📄 Copyright

Copyright © 1998 onwards -- the phpMyAdmin team

Certain libraries are copyrighted by their respective authors;
see the full copyright list for details.

For full copyright information, please see `./doc/copyright.rst`

## 📜 License

This program is free software; you can redistribute it and/or modify it under
the terms of the GNU General Public License version 2, as published by the
Free Software Foundation.

This program is distributed in the hope that it will be useful, but WITHOUT
ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <https://www.gnu.org/licenses/>.

### Licensing of current contributions

Beginning on 2013-12-01, new contributions to this codebase are all licensed
under terms compatible with GPLv2-or-later. phpMyAdmin is currently
transitioning older code to GPLv2-or-later, but work is not yet complete.

---

## 🎉 Enjoy!

**The phpMyAdmin team** 