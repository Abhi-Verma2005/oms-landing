-- Create database and user if they don't exist
CREATE DATABASE IF NOT EXISTS stellar_wp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER IF NOT EXISTS 'stellar_user'@'%' IDENTIFIED BY 'stellar_password';
GRANT ALL PRIVILEGES ON stellar_wp.* TO 'stellar_user'@'%';
FLUSH PRIVILEGES;

-- Set default timezone
SET time_zone = '+00:00';
