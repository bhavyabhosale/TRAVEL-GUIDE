# TRAVEL-GUIDE

## Overview
The \"TRAVEL-GUIDE\" project is a comprehensive travel booking system. It allows users to search for flights, hotels, and trains, book tickets, and manage their travel plans. This system is built using PHP for backend processing, MySQL for database management, HTML/CSS for the frontend design, and JavaScript for interactivity.

## Prerequisites
Before you begin, ensure you have the following software installed:

1. **XAMPP**: A free and open-source cross-platform web server solution stack package that consists of Apache HTTP Server, MySQL database, and interpreters for scripts written in the PHP and Perl programming languages.
   - [Download XAMPP](https://www.apachefriends.org/index.html)
   
2. **Web Browser**: Any modern browser like Google Chrome, Firefox, or Microsoft Edge.

3. **Git** (Optional but recommended): A version control system to manage the project files. 
   - [Download Git](https://git-scm.com/)

## Step 1: Clone the Repository
First, you need to obtain the project files. You can do this either by cloning the GitHub repository or downloading the ZIP file.

### Method 1: Using Git
Open Command Prompt or Git Bash and run the following command to clone the repository:
\`\`\`bash
git clone https://github.com/bhavyabhosale/TRAVEL-GUIDE.git
\`\`\`
This command will download the project files into a folder named \`TRAVEL-GUIDE\`.

### Method 2: Download the ZIP File
Alternatively, you can download the ZIP file from the GitHub repository. 
- Go to the [repository page](https://github.com/bhavyabhosale/TRAVEL-GUIDE).
- Click the \"Code\" button and select \"Download ZIP\".
- Extract the downloaded ZIP file to your desired directory.

## Step 2: Move Project Files to XAMPP's \`htdocs\` Directory
XAMPP serves files from the \`htdocs\` directory. You need to move the project files into this directory.

1. Locate your XAMPP installation directory (usually \`C:/xampp\`).
2. Move the extracted \`TRAVEL-GUIDE\` folder into the \`C:/xampp/htdocs/\` directory.

Your directory structure should look like this:
\`\`\`
C:/xampp/htdocs/TRAVEL-GUIDE/
\`\`\`

## Step 3: Start Apache and MySQL in XAMPP
1. Open the **XAMPP Control Panel**.
2. Click the \`Start\` button next to Apache to start the web server.
3. Click the \`Start\` button next to MySQL to start the database server.

Ensure both services are running (indicated by a green highlight).

## Step 4: Set Up the Database
Now, you need to create the database and import the required tables.

1. Open your web browser and navigate to [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
2. Click on the \"Databases\" tab.
3. In the \"Create database\" field, enter \`travel_guide\` as the database name and click \"Create\".

### Import Database Schema
1. With the \`travel_guide\` database selected, click on the \"Import\" tab.
2. Click the \"Choose File\" button and select the SQL file located in the \`db/\` directory of the project.
   - Example: \`C:/xampp/htdocs/TRAVEL-GUIDE/db/travel_guide.sql\`
3. Click \"Go\" to import the database schema and data.

## Step 5: Configure the Database Connection
The application needs to connect to the MySQL database. You must configure the database connection settings in the PHP files.

1. Open the \`php/db_connection.php\` file in a text editor.
2. Update the database connection settings to match your MySQL setup:
   \`\`\`php
   $servername = \"localhost\";
   $username = \"root\";
   $password = \"\";  // Leave empty if you haven't set a MySQL root password
   $dbname = \"travel_guide\";
   \`\`\`
3. Save the changes.

## Step 6: Run the Application
Now, you can access the application through your web browser.

1. Open your web browser and go to [http://localhost/TRAVEL-GUIDE/index.php](http://localhost/TRAVEL-GUIDE/index.php).
2. This should load the homepage of the TRAVEL-GUIDE application.

If you have an admin panel or other special pages, you can access them via URLs like:
- Admin Panel: [http://localhost/TRAVEL-GUIDE/admin.php](http://localhost/TRAVEL-GUIDE/admin.php)

## Step 7: Troubleshooting (if needed)
### Apache Won't Start
If Apache doesn't start, it might be due to a port conflict (usually with port 80). You can change the port Apache listens on:
1. Open \`C:/xampp/apache/conf/httpd.conf\` in a text editor.
2. Find the line \`Listen 80\` and change it to \`Listen 8080\` or another available port.
3. Restart Apache from the XAMPP Control Panel.

### MySQL Connection Errors
If you encounter errors connecting to the MySQL database:
- Ensure MySQL is running in XAMPP.
- Double-check your database credentials in the \`db_connection.php\` file.
- Confirm the \`travel_guide\` database exists in phpMyAdmin and contains the required tables.

## Step 8: Contributing
If you want to contribute to this project:
1. Fork the repository on GitHub.
2. Create a new branch for your feature or bugfix.
3. Commit your changes and push the branch to your forked repository.
4. Open a pull request to merge your changes into the main repository.

## Step 9: License
This project is licensed under the MIT License, which allows you to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, under the following conditions:
- The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

