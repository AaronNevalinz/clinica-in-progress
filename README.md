<div style='font-family:open sans;'>

<h1 style='font-size:35px; text-align:center; font-weight:800;'> Clinica - Patient Appointment Management System </h1>

<img src='readme/clinicagithub.png' />


<span style='font-size:24px; color:#BF1541'>**Clinica**</span> is a web-based patient appointment management system that allows patients to schedule appointments with doctors, admins to manage users and appointments, and doctors to be notified of scheduled appointments. This project is built using Laravel for the backend, with plain Blade templates for the main website, and ReactJS for the admin and doctor dashboards. The system is fully responsive, utilizing TailwindCSS along with vanilla CSS and JavaScript.

## Features

- **Patient Dashboard**  
  - View available doctors and appointment slots.
  - Schedule, view, and delete appointments.
  - Responsive and user-friendly design.

- **Doctor Dashboard (ReactJS)**  
  - View upcoming appointments and notifications.
  - No direct management of appointments (view-only access).

- **Admin Dashboard (ReactJS)**  
  - Manage doctors, patients, and appointments.
  - Full control over the system with CRUD operations for users and appointments.
  - Insights and reports on system activities.

- **Authentication**  
  - Secure login for all users (patients, doctors, and admins).
  - Sanctum for API authentication.

## Technology Stack

- **Backend**: Laravel (PHP)  
- **Frontend**:  
  - Main website: Blade templates, vanilla CSS, and JavaScript  
  - Admin & Doctor dashboards: ReactJS, TailwindCSS  
- **Database**: MySQL  
- **API Authentication**: Laravel Sanctum  
- **Responsive Design**: TailwindCSS, vanilla CSS  

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/your-repository/clinica.git
    ```

2. Navigate to the project directory:
    ```bash
    cd clinica
    ```

3. Install backend dependencies:
    ```bash
    composer install
    ```

4. Install frontend dependencies:
    ```bash
    npm install
    ```

5. Create a `.env` file by copying `.env.example`:
    ```bash
    cp .env.example .env
    ```

6. Generate an application key:
    ```bash
    php artisan key:generate
    ```

7. Set up your database credentials in the `.env` file.

8. Run the migrations:
    ```bash
    php artisan migrate
    ```

9. Serve the application:
    ```bash
    php artisan serve
    ```

10. To build the ReactJS frontend:
    ```bash
    npm run dev
    ```

## Usage

- **Patients** can access the main site to register, log in, and manage their appointments.
- **Doctors** and **Admins** access their dashboards to manage their respective tasks using the ReactJS interface.

## Contribution

Feel free to contribute by submitting a pull request or opening an issue. Make sure to follow the code style and provide clear documentation for any new features.

## License

This project is licensed under the MIT License.

---

**Clinica** is a fully responsive solution for managing patient appointments, built with modern web technologies.
</div>