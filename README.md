Download the source `git clone` <br>
Install dependencies `composer install` <br>
Install dependencies `composer update`<br>
Create a database for the project.<br>
the `.env` file is not stored in the repository but only contains data that you need/ use in the project.
Change `.env `file to your specifications
- DB_DATABASE=
- DB_USERNAME=
- DB_PASSWORD= <br>
If you use non-standard setup for mysql, change that also<br>
Set the application key `php artisan key:generate`<br>
Run the database migrations `php artisan migrate`<br>
import the csv file in the database <br>
Serve the application on the PHP development server `php artisan serve`<br>
**api links** <br>
`api/locations`<br>
`api/locations/latitude/longitude` to get all locations within a 25km radius <br>
`locations/delete/{locationId}`
