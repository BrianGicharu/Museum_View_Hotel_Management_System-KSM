-- CREATE THE DATABASE
CREATE DATABASE IF NOT EXISTS MUSEUM_VIEW_HOTEL;

-- CREATE ALL DATABASE TABLES
-- Users Table
CREATE TABLE IF NOT EXISTS USERS(
    USER_ID VARCHAR(32) PRIMARY KEY,
    USER_NAME VARCHAR(32) UNIQUE NOT NULL,
    POSITION VARCHAR(32),
    FIRST_NAME VARCHAR(16) NOT NULL,
    SECOND_NAME VARCHAR(16) NOT NULL,
    LAST_NAME VARCHAR(16),
    PASSWORD VARCHAR(128),
);

-- Reception Table
CREATE TABLE IF NOT EXISTS RECEPTION(
    R_ID VARCHAR(32) PRIMARY KEY,
    USER_NAME VARCHAR(32) UNIQUE NOT NULL,
    STATUS VARCHAR(32),
    FIRST_NAME VARCHAR(16) NOT NULL,
    SECOND_NAME VARCHAR(16) NOT NULL,
    LAST_NAME VARCHAR(16),
    PASSWORD VARCHAR(128),
);

-- Admin Table
CREATE TABLE IF NOT EXISTS ADMIN(
    ADMIN_ID VARCHAR(32) PRIMARY KEY,
    USER_NAME VARCHAR(32) UNIQUE NOT NULL,
    PASSWORD VARCHAR(128),
    FIRST_NAME VARCHAR(16) NOT NULL,
    SECOND_NAME VARCHAR(16) NOT NULL,
    LAST_NAME VARCHAR(16)
);

-- Store Table
CREATE TABLE IF NOT EXISTS STORE(
    ITEM_ID VARCHAR(32) PRIMARY KEY,
    DESTINATION VARCHAR(32),
    ITEM_NAME VARCHAR(32) UNIQUE,
    QUANTITY INT NOT NULL,
    UNIT_PRICE FLOAT
);

-- Guests Table
CREATE TABLE IF NOT EXISTS GUESTS(
    GUEST_ID VARCHAR(32) PRIMARY KEY,
    FULL_NAME VARCHAR(64) NOT NULL,
    STATUS VARCHAR(16),
    PHONE VARCHAR(32),
    LUGGAGE VARCHAR(256)
);

-- Rooms Table
CREATE TABLE IF NOT EXISTS ROOMS(
    ROOM_ID VARCHAR(16) PRIMARY KEY,
    CATEGORY VARCHAR(16),
    CAPACITY INT NOT NULL
);

-- Session Table
CREATE TABLE IF NOT EXISTS SESSION(
    SESSION_ID VARCHAR(32) PRIMARY KEY,
    USER_NAME VARCHAR(32),
    USER_ID VARCHAR(32),
    SESSION_CREATION_DATE INT,
    SESSION_DESTROY_DATE INT,
    -- FOREIGN KEY(USER_ID) REFERENCE 
);

-- Session Logs Table
CREATE TABLE IF NOT EXISTS SESSION_LOGS(
    SESSION_ID VARCHAR(32) PRIMARY KEY,
    USER_NAME VARCHAR(32),
    USER_ID VARCHAR(32),
    SESSION_CREATION_DATE INT,
    SESSION_DESTROY_DATE INT,
    -- FOREIGN KEY(USER_ID) REFERENCE 
);