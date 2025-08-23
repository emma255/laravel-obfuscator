# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.0.0] - 2024-01-01

### Added
- Initial release of Laravel Obfuscator package
- Basic obfuscation functionality with base64 encoding and string reversal
- Artisan commands for file, directory, and project obfuscation
- Backup and restore system with automatic backup creation
- Configuration system with customizable settings
- Service provider and facade for easy integration
- Comprehensive command structure including:
  - `obfuscate:file` - Obfuscate individual files
  - `obfuscate:all` - Obfuscate all PHP files in project
  - `obfuscate:directory` - Obfuscate files in specific directory
  - `obfuscate:restore` - Restore files from backups
  - `obfuscate:deobfuscate` - Deobfuscate files
  - `deobfuscate:all` - Deobfuscate all files
  - `deobfuscate:directory` - Deobfuscate directory
- Secure deployment commands for client deliverables
- License management system with key generation
- Progress tracking and detailed output reporting
- Safe operations with backup protection
- Support for Laravel 9, 10, 11, and 12
- PHP 8.1+ compatibility

### Features
- Multiple obfuscation levels (basic, enterprise)
- Automatic exclusion of vendor, node_modules, storage directories
- ZIP package creation for deployment
- Environment variable configuration support
- Comprehensive logging system
- Non-destructive operations with backup safety

### Commands Added

#### 🚀 Simple Application Deployment Commands (RECOMMENDED)
- `obfuscate:app-deploy` - Deploy entire Laravel application securely
- `deobfuscate:app-deploy` - Deobfuscate entire Laravel application securely

#### 🔒 Advanced Secure Deployment Commands
- `obfuscate:secure-deploy` - Create secure deployment package with obfuscated code
- `deobfuscate:secure-deploy` - Create secure deobfuscation deployment package

#### 🔑 License Management Commands
- `obfuscate:generate-key` - Generate a new license key
- `obfuscate:license status` - Check license status
- `obfuscate:license validate` - Validate a license key

#### Basic Obfuscation Commands (Development Use)
- `obfuscate:file` - Obfuscate individual files
- `obfuscate:all` - Obfuscate all PHP files in project
- `obfuscate:directory` - Obfuscate files in specific directory
- `obfuscate:restore` - Restore files from backups

#### Deobfuscation Commands
- `obfuscate:deobfuscate` - Deobfuscate individual files
- `deobfuscate:all` - Deobfuscate all PHP files in project
- `deobfuscate:directory` - Deobfuscate files in specific directory

### Technical Features
- **Backup System**: Automatic backup creation in `storage/app/obfuscator_backups/`
- **Obfuscation Method**: Base64 encoding + string reversal technique
- **File Patterns**: Configurable include/exclude patterns
- **Output Settings**: Customizable file naming and structure preservation
- **Environment Variables**: Full .env configuration support
- **Service Provider**: Laravel integration with facade alias
- **Programmatic Usage**: Direct service class and facade access

### Security Features
- **Secure Deployment Mode**: True source code protection for client deliverables
- **Backup Protection**: Secure backup locations inaccessible to clients
- **Non-destructive Operations**: Safe operations with backup protection
- **Progress Tracking**: Detailed output with success/error reporting

### Configuration Options
- Backup settings (enable/disable, directory, retention)
- Obfuscation settings (method, comment removal, whitespace handling)
- File patterns (include/exclude specific files and directories)
- Output settings (file naming, structure preservation)
- Logging (configurable levels and output)

### Integration Features
- Laravel 9, 10, 11, and 12 compatibility
- PHP 8.1+ support
- PSR-4 autoloading
- Service provider registration
- Facade alias support
- Artisan command integration
