# CI-Craftman
Ci-craftman is a example cli-tools-like to generate migration and migrate it, generate seeder and seed it, generate controller, and generate model for Codeigniter 3.x.x framework.

## Available command
1. `php index.php tools migration "file_name"`         Create new migration file
2. `php index.php tools migrate ["version_number"]`    Run all migrations. The version number is optional.
3. `php index.php tools seeder "file_name"`            Creates a new seed file.
4. `php index.php tools seed "file_name"`              Run the specified seed file.
5. `php index.php tools controller "file_name"`        Create new CONTROLLER file
6. `php index.php tools model "file_name"`             Create new MODEL file

## Basic config
Open file Tools.php in `application/controllers` folder, at the top replace path in `require once()` argumen with yours `require_once('<yours-path-to-the-app>\application\database/Seeder.php');`

If youre facing error like `access denied for ''@'localhost'` please update the username to access the database with yours in `application/config/database.php`