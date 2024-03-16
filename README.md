## Prerequisites
- PHP >= 8.1
- Composer

## Installation
1. **git clone** https://github.com/https://github.com/Loujain-Siddikah/User-ProductManager.git
2. Copy .env.example file to .env and edit database credentials there
3. Install the project dependencies by run **composer install**
4. **cp .env.example .env**
5. Update the necessary database configuration and other environment variables including database credentials and Pusher configuration.
6. Run **php artisan key:generate**
7. Run **php artisan migrate**
8. Run **php artisan serve**
9. Start a websocket server by running  **php artisan websockets:serve**  in a separate terminal window.

## Project Features
### Repository Design Pattern 
 A repository design pattern is used that separates data access logic from controllers, thus improving code organization, maintainability and scalability.

### Factory Design Pattern
  the Factory Design Pattern used to manage different types of popups dynamically. The Factory pattern allows us to encapsulate the creation logic for popups, enabling easy extension and modification without directly exposing the instantiation logic in the client code.

### Authentication 
  #### login
    Authenticate a user, upon successful login, the API will return an authentication token.

### Request Validation
In this API, I utilize Laravel's built-in validation features to ensure that incoming data meets the specified criteria before processing it. This helps maintain data integrity and security within the application.

### Authorization
This API implements authorization using roles, leveraging Spatie's Laravel Permissions package.
to make the owner only can manage popups.

### Real-time Notification 
Events are triggered within the application codebase when user interactions with popups.
Broadcasting allows sending these events to subscribed clients(owner) in real-time using broadcasting pusher drivers .
Im using Laravel's event broadcasting features to dispatch events and broadcast them to owner channel.
and im using websocket server with pusher to broadcast the event in real time.

### Owner Features
Owner can manage popups(create, update, delete) and he will receive notification in realtime when user interact with popups.

### User Features
User can interaction with popups.

### Factories and Seeders for Test Data
To facilitate testing and development, this project uses Laravel's factory and seeder functionality to generate fake data.

## Testing with Postman
You can test this project by using Postman. Follow these steps:
1. Download and install Postman from the Postman website.
2. Import the Postman collection by clicking on the "Import" button in Postman and selecting the User-ProductManager/postman_collection/UsersProductsManagementApi.postman_collection.json.
3. Once imported, you will see the collection and its requests in the left sidebar.
4. Configure any necessary environment variables within Postman if required for authentication tokens, base URLs, or other configuration values.
5. Start testing the project by sending requests using the imported collection.