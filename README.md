
![Capture](https://github.com/shamiraty/AJAX-HTML-PHP-JAVASCRIPT-JQUERY-MYSQL-HOW-TO-CREATE-REGISTRATION-FORM-USING-AJAX-JAVASCRIPT/assets/129072179/38750083-3c11-4a6d-8c7c-31d82181850b)

# AJAX, JAVASCRIPT, JQUERY, HTML, BOOTSTRAP, MYSQL ,PHP
### Video Tutorial
[Watch the Video Tutorial](https://youtu.be/tY1hgUJ8ZsU)

# Key Points

## HTML Structure

### HTML Document
- The form is centered using Flexbox and styled with Bootstrap and MDB UI Kit.
- The form collects user details such as first name, last name, email, password, and confirm password.

## CSS Styling

### Body Styling
- The background color is set to `#0a75ad`.
- The text color is set to dark blue.
- Flexbox is used to center the form vertically and horizontally.

### Card Styling
- The card's maximum width is set to 500px to ensure a responsive design.

## jQuery and AJAX

### AJAX Request
- jQuery is used to handle form submission and AJAX requests.
- Basic validation checks for empty first name and last name fields.
- On form submission, data is sent to `API.php` via a POST request.

## PHP Backend (API.php)

### Database Connection
- A connection is established to a MySQL database named `dodoma`.

### User Data Processing
- Checks for duplicate users based on the email.
- Inserts new user data into the `users` table if no duplicate is found.
- Returns appropriate status messages based on the operation outcome.

# AJAX Registration Form

## HTML Structure

### Meta Tags
Define the document type and character set.
- `<!DOCTYPE html>`: HTML5 document type declaration.
- `<meta charset="UTF-8">`: Character encoding for the document.
- `<meta name="viewport" content="width=device-width, initial-scale=1.0">`: Ensures the page is responsive.

### Title
Sets the title of the webpage.
- `<title>Centered Form</title>`

### External Resources
Links to external CSS and JavaScript files.
- jQuery: `<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>`
- MDB UI Kit: `<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" />`
- Bootstrap CSS: `<link rel="stylesheet" href="css/bootstrap.min.css">`

### CSS Styling
Adds custom styles to the page.
- Centers the form using flexbox.
- Sets background and text colors.

### Form Structure
- **Container**: `<div class="card mt-3">` creates a card layout.
- **Header**: `<div class="card-header bg-danger text-white"><h5>AJAX REGISTRATION</h5></div>` displays the form title.
- **Form Fields**: Includes input fields for firstname, lastname, email, password, and confirm password.
- **Submit Button**: `<input type="button" id="button" value="Send data to db" class="btn btn-danger w-100">` sends data to the server.

## jQuery Script

### Document Ready
Ensures the script runs after the document is fully loaded.
- `$(document).ready(function () { ... });`

### Button Click Event
Handles the click event of the submit button.
- Checks for empty fields and displays error messages if necessary.
- Calls `dataProcess()` function if all fields are filled.

### AJAX Request
- **URL**: 'API.php' – The server-side script to handle the request.
- **Method**: 'POST' – Sends data using POST method.
- **Data**: Sends form data (firstname, lastname, email, password) to the server.
- **Success Callback**: Processes the server response to display appropriate messages.

## PHP Script (API.php)

### Database Connection
Connects to the MySQL database using `mysqli_connect()`.
- Database details: 'localhost', 'root', '', 'dodoma'.

### Data Handling
- Retrieves form data using `$_POST` array.
- Checks for data duplication by querying the database.

### Duplication Check
- **SQL Query**: `SELECT * FROM users where email='$email'`.
- If a duplicate email is found, returns status "0".

### Data Insertion
- **SQL Query**: `INSERT into users (fname, lname, email, password) values ('$fname', '$lname', '$email', '$password')`.
- If insertion is successful, returns status "1".
- If insertion fails, returns status "failed".

### Error Handling
- If the connection fails, it echoes 'no connection'.

## Summary
- **HTML**: Creates a responsive form layout using Bootstrap and MDB UI Kit.
- **JavaScript**: Uses jQuery to handle form submission and AJAX requests.
- **PHP**: Connects to a MySQL database, checks for data duplication, and inserts new user data.

This code effectively demonstrates a simple AJAX registration form with real-time data validation and server-side processing.
___
# 🔆 Contact Information

> WhatsApp
- +255675839840
- +255656848274 <hr>

> YouTube
[YouTube Channel](https://www.youtube.com/channel/UCjepDdFYKzVHFiOhsiVVffQ)

> Telegram
- +255656848274
- +255738144353
  
> PlayStore
[PlayStore Developer Page](https://play.google.com/store/apps/dev?id=7334720987169992827&hl=en_US&pli=1)

> GitHub
[GitHub Profile](https://github.com/shamiraty/)

