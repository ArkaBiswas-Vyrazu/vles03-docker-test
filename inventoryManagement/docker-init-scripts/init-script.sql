-- Drop the database if it exists (use backticks for database name)
DROP DATABASE IF EXISTS `IMS_DEV`;

-- Create the database if it does not exist (use backticks for database name)
CREATE DATABASE IF NOT EXISTS `IMS_DEV`
    /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */
    /*!80016 DEFAULT ENCRYPTION='N' */;

-- Create the user if not exists (using backticks for username)
CREATE USER IF NOT EXISTS 'user1'@'%' IDENTIFIED BY 'Password@123';

-- Grant all privileges to the user for the specific database (not global)
GRANT ALL PRIVILEGES ON `IMS_DEV`.* TO 'user1'@'%';

-- Ensure privileges are flushed so they take effect
FLUSH PRIVILEGES;