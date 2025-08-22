# save_user
Vanilla PHP and JS

assumes a user exists and is logged in.
assumes we only have SA clients


Setup:
GRANT REFERENCES ON sendmarc.* TO 'example_user'@'localhost';
run migration
run seeder
copy config/database-example.php to config/database.php and enter correct connection details

To use:
visit 

complete form and submit.
to change the user that is submitting change app/messages/MessageController.php:24 to a user id that exists in the db. Seeders create users 1-4 for you.

Fixes:
Do we want to get the connection in the model construct?
change view to also show individual messages
returns and error handling
pagination & sorting
get query type from db enums instead of hardcoding in forms
