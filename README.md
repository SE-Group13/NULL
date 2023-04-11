# Software Engineering Group Project (ECS506U)

## Group 13
Project Members: Ogulcan Gurelli, Abdussamed Han, Leon Lin Liu, Lok Nam, Ruihan Zhao, , Zareef Razzaque , Maria Surani

Module Organiser: Mustafa Bozkurt

### Pet minder App 

The Pet Minder application is designed to connect pet owners with pet minders, providing a hub for pet care services. The platform enables pet owners to search for minders based on various criteria, including ratings, testimonials, location, and availability. Likewise, minders can also search for pet owners seeking their services based on the same criteria.

With Pet Minder, pet owners can provide specific instructions to their minders, such as preferred walking routes, feeding schedules, and other pet care needs. Minders can track pets during walks or other activities, giving pet owners peace of mind knowing their pets are in good hands.

By offering a central platform for pet care services, Pet Minder aims to simplify the process of finding a trusted pet minder, and to provide an easy-to-use platform that streamlines communication between pet owners and minders.


## Installation

To install and run the application, follow these steps:

1. Download and install XAMPP on your computer.

2. Navigate in the terminal to the htdocs folder of XAMPP. (This is typically located in C:/xampp/htdocs on Windows, /opt/lampp/htdocs on Linux or /Applications/XAMPP/xamppfiles/htdocs)

3. Clone or download the repository from GitHub and extract the files.
    * You can run the command:
    ```
    git clone https://github.com/SE-Group13/Pet_Minder.git
    ```
4. Navigate in the terminal to the Pet_Minder/SWEProject/Data folder in order to grant access to write in the JSON files (which simulate our database). Please run the following commands (separately):

    ```
    chmod 777 interested_minders.json
    chmod 777 jobs.json

    ```

5. Navigate in the terminal to the Pet_Minder/SWEProject folder and run the following commands to install dependency for PayPal API.

    ```
    composer require paypal/rest-api-sdk-php

    ```

6. Open processPayment.php and successPayment.php files from Pet_Minder/SWEProject/PHP Scripts folder, replace "token" and "secret" with your own
one from from https://developer.paypal.com/dashboard/accounts. (Don't remove "")

7. Start the Apache server in XAMPP.

8. Open your web browser and go to http://localhost/Pet_Minder/SWEProject/index.php to access the application.



