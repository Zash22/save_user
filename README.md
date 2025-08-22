# save_user
Vanilla PHP and JS

assumes a user exists and is logged in.
assumes we only have SA clients


Setup:
GRANT REFERENCES ON sendmarc.* TO 'example_user'@'localhost';
run migration
run seeder
copy config/database-example.php to config/database.php and enter correct connection details

Fixes:
Do we want to get the connection in the model construct?
