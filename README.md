## Issue 42654

https://github.com/laravel/framework/issues/42654

Issue #42654 reports Laravel 9.15.0 and 9.16.0 are truncating JSON responses. 

Which I could not reproduce on both versions 

This repo was built as a start point  so the complainers could show how to reproduce it.

Issue #42654 references this stackoverflow link:

https://stackoverflow.com/questions/72476635/laravel-json-response-is-missing-right-square-bracket-and-ajax-throws-parseerror

And when commentator also mentioned telescope JSON would fail as well

https://github.com/laravel/framework/issues/42654#issuecomment-1146701757

## Notes

This repo:

- Was built with this command `laravel new issue-42654`
- Changed these files:
  - `.env.example`
    - As no confidential information is provided, configuration used in local `.env`
      was replicated for ease reproducing the repo
  - `README.md`
    - These instructions
  - `./database/seeders/DatabaseSeeder.php`
      - Uncommented seeder line to create users
  - `./resources/views/welcome.blade.php`
      - Changed code to use a jQuery's AJAX request similar to the one on the linked StackOverflow post
  - `./routes/api.php`
    - Added a route (`./api/test`) which returns all User records
  - `composer.json`, `composer.lock`, `./config/app.php`, `./config/telescope.php`, and `./public/vendor/telescope/*`
    - All these files were changed due to installing Telescope
  - `./app/Providers/TelescopeServiceProvider.php`
    - Although installed by Telescope, the gate method was changed to allow public access
- Default installation was committed in the first commit
- Changes were committed in the second commit

## Installation

1. Clone this repo
   - `git clone git@github.com:rodrigopedra/issue-42654.git`
2. Change to project directory
    - `cd issue-42654`
3. Copy the `.env.example` to `.env`
    - `cp .env.example .env`
4. Create the SQLite database file
    - `touch ./database/database.sqlite`
5. Run composer migrations
    - `composer install`
6. Migrate and seed database
    - `php artisan migrate --seed`
7. Serve application
    - `php artisan serve`
8. Visit Homepage
    - http://localhost:8000/
9. Visit Telescope Dashboard
    - http://localhost:8000/telescope/requests
