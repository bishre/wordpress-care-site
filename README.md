# Project Overview

This project is a custom WordPress website implementation based on the provided Figma design. It includes customizations and enhancements using Docker, Nginx, and WordPress.


## Technologies Used

- Docker
- Nginx
- WordPress (HTML, CSS)

## Project Structure

- `docker-compose.yml`: Docker Compose file for defining services and containers.
- `nginx/`: Nginx configuration files.
- `wordpress_files/`: WordPress files and directories.
- `wp-content/themes/astra-child/`: Custom theme folder containing PHP, CSS, and JavaScript files for theme development.
- `wp-content/plugins/`: Custom plugins folder for additional functionality.

## Setup Instructions

1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Run `docker-compose up -d` to start the Docker containers.
4. Access the WordPress site in your web browser at `http://localhost:8000`.
5. Follow the on-screen instructions to complete the WordPress setup.
6. Activate the Astra Child theme.
7. Install Polylang plugin and add the languages to create language navigation.
8. Create some Pages and Posts for them to appear in the nav menu and pullup respectively.
9. Add featured image and excerpt text to Post.

## Contributors

- Bibhor Shrestha

