# Development of a Database-Driven Web Application for NCEA Level 3

Project Name: **Photography Portfolio Website**

Project Author: **Rory Stock**

Assessment Standards: **91902** and **91903**


-------------------------------------------------

## Documentation

- [Home](../README.md)
- [Design and Review](Design.md)
- [Development and Testing](Development.md)

-------------------------------------------------

## Using the live website

Go to [rorystock.com](https://www.rorystock.com) to view the live website.

To access the admin page click on the button in the bottom right of the footer. This will take you to the login page. The default login details are:

    Email: admin@rorystock.com

    Password: adminadmin

Once logged in you will be redirected to the event page. There will now be a button in the top left of the page. When clicked the admin panel will come up. From here you can add new events and images to the website as well as edit and delete existing ones.

As images have to be in an event folder in the cloudflare r2 bucket to show on the website I have given a list of events that are already in the bucket. To add images to the website you will place the name of the folder in the event folder field when adding a new event.

List:
    
    2024-07-10 - Gravity Enduro Camp
    2024-08-06 - Cable Bay Dig Crew - 1
    2024-08-10 - Sam Gale Coaching

---

## Localhost Setup

If you want to run the project locally, you will need to have follow the steps below.

First PHP, NPM and Composer will need to be installed on the computer.

Next open a new terminal window in the project directory (easiest in a code editor) and run the following commands:

#### Install the project dependencies:

    composer install

#### Install the node dependencies:

    npm install

#### Configure the project environment by copying '.env.example' and renaming it to '.env'.

Required environment variables are:

    APP_KEY=

    RESEND_API_KEY=re_94mbww6r_6PdHpNnfRaUyEJRekfMZ82Bk
    MAIL_FROM_ADDRESS=rorystock06@gmail.com

    CLOUDFLARE_R2_ACCESS_KEY_ID=a5912dfa2d202d5bfe6bc065f487a01f
    CLOUDFLARE_R2_SECRET_ACCESS_KEY=03a04fd2b301b60c08dfb78610457c2c2c8a880686738d03b3fbaaad1e4df9b9
    CLOUDFLARE_R2_BUCKET=rorystock-photostorage
    CLOUDFLARE_R2_ENDPOINT=https://2b099d945447f7175ff8eddeaa4556f5.r2.cloudflarestorage.com
    CLOUDFLARE_R2_URL=

    ADMIN_EMAIL=admin@rorystock.com
    ADMIN_PASSWORD=adminadmin
    ADMIN_NAME=admin

<strong>Note:</strong> The names of the environment variable are already in the env.example file. The values would just need to be filled in.

#### Create an application key:

    php artisan key:generate

#### Then place the application key in the .env file:

    APP_KEY=base64:your_key_here

#### To make sure the database is setup correctly run:

    php artisan migrate

#### Next run:

    npm run dev

#### In a second terminal tab run the following command:

    php artisan serve

#### This will create a localhost link that can be opened in a web browser.

---

### Useful Commands

To clear and remake the database run:

    php artisan migrate:fresh

If no images are showing on the home page of the website run
    
    php artisan storage:link

---

If for some reason something is still not working, the Laravel documentation is very detailed and helpful.

[Laravel Documentation](https://laravel.com/docs/11.x)

---
