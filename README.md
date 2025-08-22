# save_messages

A simple Vanilla PHP + JS application for submitting and displaying messages.

Assumes that users already exist and are logged in.
Designed specifically for South African clients.

Setup:

1. Grant database privileges:
   GRANT REFERENCES ON sendmarc.* TO 'example_user'@'localhost';
2. Run migrations to create tables (users and messages).
3. Seed the database with initial users (users.sql).
4. Copy the database configuration example and update connection details:
   cp config/database-example.php config/database.php
   Edit config/database.php with your credentials.

Usage:

1. Visit the index page. Initially, there should be no messages.
2. Seed messages (optional) to see existing entries (messages.sql).
3. Complete and submit the message form on the page.

To change the submitting user, edit app/messages/MessageController.php line 24 and set a user_id that exists in the database.
Seeder creates users with IDs 1-4.

Planned / Suggested Improvements:

- Inject the database connection into the model constructor.
- Update the view to display individual messages.
- Add proper error handling.
- Implement pagination and sorting for messages.
- Dynamically fetch query_type options from database enums instead of hardcoding in forms.
- Add logging for actions and errors.
- Clear URL after form submission to avoid resubmission.
- Add full backend validation for all fields.
- Normalize South African phone numbers in the database (+27 format).
- Create factories for generating users and messages.
- Add automated tests.
- Move views and js into appropriate files and directories

Notes:

- Frontend uses HTML5 validation + Bootstrap feedback styling.