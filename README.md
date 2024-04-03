# User Management API Documentation

This document provides an overview of the User Management API project built using Laravel.

## Overview

The User Management API is designed to facilitate user registration, login, and retrieval of user details through a RESTful API interface. It offers endpoints for user registration, user login, and fetching user details.

## Setup

To set up the project locally, follow these steps:

### Prerequisites

- PHP >= 7.4
- Composer
- MySQL or any compatible database

### Installation

1. Clone the repository:

    ```bash
    git clone <repository_url>
    ```

2. Install dependencies:

    ```bash
    cd user-management-api
    composer install
    ```

3. Copy the `.env.example` file to `.env` and configure your database settings:

    ```bash
    cp .env.example .env
    ```



4. Run migrations to create the necessary database tables:

    ```bash
    php artisan migrate
    ```

5. Serve the application:

    ```bash
    php artisan serve
    ```

## API Endpoints

### 1. User Registration

- **Endpoint:** `/api/register`
- **Method:** `POST`
- **Request Body:**
  ```json
  {
      "name": "John Doe",
      "email": "john@example.com",
      "phone": "+20123456789",
      "password": "password"
  }
  ```
- **Response:**
  ```json
  {
      "message": "User registered successfully",
      "user": {
          "id": 1,
          "name": "John Doe",
          "email": "john@example.com",
          "phone": "+20123456789",
          "created_at": "2022-04-03T10:00:00.000000Z",
          "updated_at": "2022-04-03T10:00:00.000000Z"
      }
  }
  ```

### 2. User Login

- **Endpoint:** `/api/login`
- **Method:** `POST`
- **Request Body:**
  ```json
  {
      "email": "john@example.com",
      "password": "password"
  }
  ```
- **Response:**
  ```json
  {
      "message": "Login successful",
      "user": {
          "id": 1,
          "name": "John Doe",
          "email": "john@example.com",
          "created_at": "2022-04-03T10:00:00.000000Z",
          "updated_at": "2022-04-03T10:00:00.000000Z"
      }
  }
  ```

### 3. Fetch User Details

- **Endpoint:** `/api/user`
- **Method:** `GET`
- **Headers:** `Authorization: Bearer <access_token>`
- **Response:**
  ```json
  {
      "user": {
          "id": 1,
          "name": "John Doe",
          "email": "john@example.com",
          "phone": "+20123456789",
          "created_at": "2022-04-03T10:00:00.000000Z",
          "updated_at": "2022-04-03T10:00:00.000000Z"
      }
  }
  ```

## Error Handling

The API returns appropriate HTTP status codes and error messages for various scenarios, such as validation errors, unauthorized access, etc.

## Conclusion

The User Management API provides basic functionalities for user registration, login, and retrieval of user details. It can be further extended and customized to meet specific project requirements.

