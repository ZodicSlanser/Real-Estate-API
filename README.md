### Step 1: Install Required Software if not already installed

1. **Install XAMPP** (or any alternative with PHP and MySQL):
   - Download XAMPP from the [official website](https://www.apachefriends.org/index.html).
   - Follow the installation instructions for your operating system.

2. **Install Composer**:
   - Visit the [Composer website](https://getcomposer.org/) and download the installer.
   - Follow the installation instructions to set up Composer.

3. **Install Git**:
   - Download Git from the [official website](https://git-scm.com/).
   - Follow the installation instructions for your operating system.

4. **Install a Code Editor** (e.g., Visual Studio Code):
   - Download Visual Studio Code from the [official website](https://code.visualstudio.com/).
   - Install it by following the instructions.

### Step 2: Set Up the Laravel Project

1. **Clone the Project Repository**:
   - Open Git Bash or Terminal.
   - Run the following command to clone the repository:
     ```bash
     git clone https://github.com/ZodicSlanser/Real-Estate-API
     ```

2. **Navigate to the Project Directory**:
   - Use the command:
     ```bash
     cd Real-Estate-API
     ```

3. **Install Laravel Dependencies**:
   - Run the following command to install the necessary packages:
     ```bash
     composer install
     ```

### Step 3: Configure the Environment

1. **Create a `.env` File**:
   - Copy the `.env.example` file and rename it to `.env`:
     ```bash
     cp .env.example .env
     ```

2. **Generate an Application Key**:
   - Run the command:
     ```bash
     php artisan key:generate
     ```

3. **Configure Database Settings**:
   - Open the `.env` file in a text editor.
   - Set the following variables to match your database setup:
     ```plaintext
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=real_estate
     DB_USERNAME=root
     DB_PASSWORD=
     ```
   - Adjust `DB_USERNAME` and `DB_PASSWORD` if needed.

### Step 4: Set Up the Database

1. **Start XAMPP**:
   - Open the XAMPP Control Panel and start the Apache and MySQL services.


2. **Run Database Migrations**:
   - Go back to your terminal and run:
     ```bash
     php artisan migrate
     ```

### Step 5: Serve the Application

1. **Start the Development Server**:
   - Run the command:
     ```bash
     php artisan serve
     ```
   - This will start a local server at `http://127.0.0.1:8000`.

2. **Test the API**:
   - Open your browser and visit `http://127.0.0.1:8000/api/owners` to see the API in action.

### Step 6: Use Postman to Test the API

1. **Import the Postman Collection**:
   - Open Postman.
   - Click on "Import" and upload the `real.estate.api.postman_collection.json` file.

2. **Set Base URL in Postman**:
   - Click on "Environments" and create a new environment.
   - Set a variable `baseUrl` to `http://127.0.0.1:8000`.

3. **Send Requests**:
   - Select the imported collection and run the requests to test the API endpoints.

### Additional Tips

- If you encounter any issues, check your terminal for error messages and verify your `.env` settings.
- Ensure that the XAMPP services (Apache and MySQL) are running while you work on the project.
- Use Google or Stack Overflow for any errors or questions you may have.
- Refer to the [Laravel documentation](https://laravel.com/docs) for detailed information on Laravel features and usage.
- Text me if you have any questions or need help with the project.
