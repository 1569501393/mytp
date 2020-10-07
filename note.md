vscode配置git终端
C:\Users\Administrator\AppData\Roaming\Code\User\settings.json
    "terminal.integrated.shell.windows": "D:/software/Git/bin/bash.exe",


Git中的“LF will be replaced by CRLF”警告详解
https://blog.csdn.net/taiyangdao/article/details/78629107


  340  git config --get core.autocrlf
  341  git config --global --get core.autocrlf
  342  git config core.autocrlf false

Administrator@SKY-20191125ANA MINGW64 /d/www/git/mytp (test)
$ git add .
warning: LF will be replaced by CRLF in composer.lock.
The file will have its original line endings in your working directory.
warning: LF will be replaced by CRLF in config/trace.php.
The file will have its original line endings in your working directory.



开启 mbstring
 919 extension=mbstring

Administrator@SKY-20191125ANA MINGW64 /d/www/git/mytp (test)
$ php --ini
Configuration File (php.ini) Path: C:\WINDOWS
Loaded Configuration File:         D:\usr\local\php73\php.ini
Scan for additional .ini files in: (none)
Additional .ini files parsed:      (none)

Administrator@SKY-20191125ANA MINGW64 /d/www/git/mytp (test)
$ php -m|grep mb
mbstring

Administrator@SKY-20191125ANA MINGW64 /d/www/git/mytp (test)
$ composer update topthink/framework
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 14 installs, 0 updates, 0 removals
  - Installing psr/container (1.0.0): Downloading (100%)
  - Installing topthink/think-helper (v3.1.4): Downloading (100%)
  - Installing psr/log (1.1.3): Downloading (100%)
  - Installing psr/simple-cache (1.0.1): Downloading (100%)
  - Installing topthink/think-orm (v2.0.34): Downloading (100%)
  - Installing symfony/polyfill-php80 (v1.18.1): Downloading (100%)
  - Installing symfony/polyfill-php72 (v1.18.1): Downloading (100%)
  - Installing symfony/polyfill-mbstring (v1.18.1): Downloading (100%)
  - Installing symfony/var-dumper (v4.4.15): Downloading (100%)
  - Installing psr/cache (1.0.1): Downloading (100%)
  - Installing league/flysystem (1.0.46): Downloading (100%)
  - Installing league/flysystem-cached-adapter (1.1.0): Downloading (100%)
  - Installing topthink/framework (v6.0.4): Downloading (100%)
  - Installing topthink/think-trace (v1.4): Downloading (100%)
symfony/var-dumper suggests installing ext-intl (To show region name in time zone dump)
symfony/var-dumper suggests installing symfony/console (To use the ServerDumpCommand and/or the bin/var-dump-server script)
league/flysystem suggests installing ext-fileinfo (Required for MimeType)
league/flysystem suggests installing league/flysystem-eventable-filesystem (Allows you to use EventableFilesystem)
league/flysystem suggests installing league/flysystem-rackspace (Allows you to use Rackspace Cloud Files)
league/flysystem suggests installing league/flysystem-azure (Allows you to use Windows Azure Blob storage)
league/flysystem suggests installing league/flysystem-webdav (Allows you to use WebDAV storage)
league/flysystem suggests installing league/flysystem-aws-s3-v2 (Allows you to use S3 storage with AWS SDK v2)
league/flysystem suggests installing league/flysystem-aws-s3-v3 (Allows you to use S3 storage with AWS SDK v3)
league/flysystem suggests installing spatie/flysystem-dropbox (Allows you to use Dropbox storage)
league/flysystem suggests installing srmklive/flysystem-dropbox-v2 (Allows you to use Dropbox storage for PHP 5 applications)
league/flysystem suggests installing ext-ftp (Allows you to use FTP server storage)
league/flysystem suggests installing league/flysystem-sftp (Allows you to use SFTP server storage via phpseclib)
league/flysystem suggests installing league/flysystem-ziparchive (Allows you to use ZipArchive adapter)
league/flysystem-cached-adapter suggests installing ext-phpredis (Pure C implemented extension for PHP)
Writing lock file
Generating autoload files
> @php think service:discover
Succeed!
> @php think vendor:publish
Succeed!

Administrator@SKY-20191125ANA MINGW64 /d/www/git/mytp (test)
$



Loading composer repositories with package information
Updating dependencies (including require-dev)
Your requirements could not be resolved to an installable set of packages.

  Problem 1
    - topthink/framework v6.0.4 requires ext-mbstring * -> the requested PHP extension mbstring is missing from your system.
    - topthink/framework v6.0.3 requires ext-mbstring * -> the requested PHP extension mbstring is missing from your system.
    - topthink/framework v6.0.2 requires ext-mbstring * -> the requested PHP extension mbstring is missing from your system.
    - topthink/framework v6.0.1 requires ext-mbstring * -> the requested PHP extension mbstring is missing from your system.
    - topthink/framework v6.0.0 requires ext-mbstring * -> the requested PHP extension mbstring is missing from your system.
    - Installation request for topthink/framework ^6.0.0 -> satisfiable by topthink/framework[v6.0.0, v6.0.1, v6.0.2, v6.0.3, v6.0.4].

  To enable extensions, verify that they are enabled in your .ini files:
    - D:\usr\local\php73\php.ini
  You can also run `php --ini` inside terminal to see which files are used by PHP in CLI mode.
