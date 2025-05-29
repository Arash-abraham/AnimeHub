📝 AnimeHub Blog
Welcome to AnimeHub Blog! This project is a robust and engaging web application built for anime enthusiasts to explore, share, and discuss everything related to the world of anime. Whether you want to read insightful reviews, discover new series, or share your own thoughts, AnimeHub Blog provides a dedicated platform for the anime community.

✨ Features
User Authentication: Secure user registration, login, and logout.
Blog Posts: Users can create, edit, and delete their own anime-related blog posts.
Comments: Engage with content by leaving comments on blog posts.
Categories & Tags: Organize and discover content easily through categorized and tagged posts.
Search Functionality: Quickly find specific anime blogs or topics.
Responsive Design: Enjoy a seamless Browse experience on any device.
Admin Panel (Optional): Manage users, posts, and comments (if implemented).
🛠️ Technologies Used
Backend: PHP (Laravel Framework)
Database: MySQL
Frontend: HTML, CSS, JavaScript
Package Management: Composer (for PHP), npm/Yarn (for JavaScript)
Version Control: Git
🚀 Getting Started
Follow these steps to get your local copy of AnimeHub Blog up and running.

Prerequisites
Before you begin, ensure you have the following installed on your system:

PHP (>= 8.1 recommended)
Composer
Node.js & npm (or Yarn)
MySQL Server
Git
Installation Steps
Clone the Repository:

Bash

git clone https://github.com/arash-abraham/AnimeHub.git
cd AnimeHub
Install PHP Dependencies:

Bash

composer install
Set Up Environment Variables:

Duplicate the .env.example file and rename it to .env:
Bash

cp .env.example .env
Generate an application key:
Bash

php artisan key:generate
Open the .env file and configure your database connection:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=animehub_blog # Choose your database name
DB_USERNAME=root          # Your MySQL username
DB_PASSWORD=              # Your MySQL password
Run Database Migrations:
This will create the necessary tables in your database.

Bash

php artisan migrate
(Optional: If there are seeders for initial data, run php artisan db:seed)

Install Node.js Dependencies:

Bash

npm install
# OR
yarn install
Compile Frontend Assets:

Bash

npm run dev
# OR for production build
# npm run build
Start the Local Development Server:

Bash

php artisan serve
Access the Application:
Open your web browser and visit the URL displayed in your terminal (e.g., http://127.0.0.1:8000).

👋 How to Contribute
We welcome contributions to the AnimeHub Blog project! If you'd like to help, please follow these steps:

Fork the repository.
Create a new branch for your feature or bug fix:
Bash

git checkout -b feature/your-feature-name
Make your changes and commit them with clear, concise messages.
Push your branch to your forked repository.
Open a Pull Request to the main branch of the original repository.
📄 License
This project is open-source and licensed under the MIT License. See the LICENSE file for more details.
