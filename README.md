![conv@4x](https://user-images.githubusercontent.com/21107275/120108669-e2825180-c183-11eb-9d61-f4f4182e12af.png)

Current version: v0.02 alpha

Convivial is an event management dashboard for admins, where the user can create events, assign ticket values based on catagory, purchase tickets for customers, see purchase statistics, event performance and more.

To try out the platform and build on top of it, clone this repo and read on! This document will provide information regarding installation and usage.

Tech stack:

Backend
 - [Laravel 8](https://laravel.com/)
 - [Sanctum](https://laravel.com/docs/8.x/sanctum) (For authentication)

Front end
 - [Vue 3](https://v3.vuejs.org/)
 - [Vuesax](https://vuesax.com/) (UI library) 
 - [Axios](https://www.npmjs.com/package/axios) (handling api requests)
 - [VueX](https://vuex.vuejs.org/) (State management for user authentication)


## Demo Video


https://user-images.githubusercontent.com/21107275/120634445-e1556b00-c488-11eb-919d-8fb1875b8d47.mp4




# Installation

## Step 1: Clone the repo

After clonning the repo to your local machine, you'll find 2 directories inside the main folder. One is for the backend api (convivial_api) and the other is for the front end (convivial_ui)

## Step 2: Environment setup & Installation

At first, let's setup the backend.
For this, you need to install the following packages(just follow the associated links for installation guidelines):
 - [XAMPP](https://www.apachefriends.org/index.html)
 - [Laravel](https://laravel.com/docs/8.x/installation#your-first-laravel-project)

Once these are ready, the environment for running the backend server is good to go!

Next, let's setup the packages for front-end. 

At first, we need to install Node. For this, follow these steps with respect to the OS that you are using:
**Windows & Mac OS users**
 - Simply download and install the corrosponding node installer from [here](https://nodejs.org/en/)

**For Ubuntu:**

```curl -sL https://deb.nodesource.com/setup_12.x | sudo -E bash -
sudo apt-get install -y nodejs
```

Once this step is complete, go to the directory "convivial_ui" (The root dir of the vue app) and run:

```npm install```

This will automatically install all the necessary packages that are required by the app.

## Step 3: Running the server

Inorder to make the server up and work properly, we need to setup the database. For this:
 - Open the XAMPP manager and go to the Manage servers tab
 - Make sure that the MySQL database and Apache web server are running. If they are not running, start them.
 - Now, open the [phpMyAdmin](http://localhost/phpmyadmin). Here you can see the databases on the left side.
 - Create a new DB by clicking the +new button on top of the left side bar of phpMyAdmin. Name it "convivial_db".
 - Now, open the convivial_api project in your favourite code editor (VS Code preferred).
 - Open the .env file. In this, edit the following:

```DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=convivial_db    //if you've given a different name for your DB, add that here.
DB_USERNAME=root            //Your DB Username
DB_PASSWORD=                //Your password to access the mySQL DB
```
 - Save all the changes.
 - On VS code, click "ctrl + ~" ("command + ~" for mac users) to bring up the terminal. If you are using a different code editor, just open the root directory of this project in your terminal.
 - Execute the following command to generate all the required database tables:
```php artisan migrate```

 - Now let's fill up the tables using the seeds. For this, run:

```php artisan db:seed```
 
 That's it. You have all the necessary parts to run the backend of this project and use all it's api. To run the server, in the terminal, run:

```php artisan serve```

This will start the server and make the api end-points available.
*Note the api server ip from the terminal. Make sure that the port shown is :8000. If not, either stop all the servers running on your machine and run it again. Or, go to all the .vue files in your front-end app and update the ip:port in the api calls to the one shown in your terminal.

Available apis and usages:

```
- /createnewevent        //Register a new event (Post)
- /createnewticket       //Create a new ticket for a customer (Post)
- /getsalesoverview      //Get an overview of the sales
- /getsalesdetails       //Get detailed info about sales
- /getbookingdetails     //Get detailed info on ticket purchases
- /getbestsellers        //Get the name of the best selling event
- /gettrendingevents     //Get the detailed list of the top 6 trending events
- /geteventdata/{id}     //Get all details of a specific event (selected by passing the event ID as parameter)
- /getsportsevents       //Get the detailed list of all the sports events in the DB
- /getfunevents          //Get the detailed list of all the fun and family events in our DB
- /login                 //Login and get the Bearer token (Post)
- /register              //Register a new admin (Post)
```

If you want, go on and try out these api on [Postman](https://www.postman.com/)

## Step 4: Running the front end

Previously, when we ran the command "npm install", it installed all the necessary packages to run the application.
All we need to do now is to run the app. To do this, in your terminal, just run(make sure that your current directory is the root of this app):

```npm run serve```

Awesome! You did it! The app is now up and running.
Visit "**[localhost:8080](http://localhost:8080/login)**" and you'll be greated with the login page.


# User guidelines

Now, let's discuss the features of this platform and how to use it.

At first, use Postman to call the /register api to create a new user (follow the attached image)
(Or simply use the default users added in the seeds. Email: **john@gmail.com**, Password: **irisworld**)

![Screenshot 2021-05-31 at 3 02 33 PM](https://user-images.githubusercontent.com/21107275/120173026-427b0580-c221-11eb-9e2a-33869ee68c70.png)

Then, go to **login** page (localhost:8080/login). Here, login using your credentials. 

![Screenshot 2021-05-30 at 10 01 27 PM](https://user-images.githubusercontent.com/21107275/120112922-a821b000-c195-11eb-9874-df3846100209.png)

After successfull authentication, you'll be redirected to the **event dashboard**. 

![Screenshot 2021-05-30 at 10 58 48 PM](https://user-images.githubusercontent.com/21107275/120114101-2c2a6680-c19b-11eb-9499-94d5afedb4a3.png)

Here, you can see all the events that are out there and a small overview of the revenue. From here, you can click on any event to open and see the event details and register tickets for customers. You can select between available ticket types too!

![Screenshot 2021-05-30 at 10 59 31 PM](https://user-images.githubusercontent.com/21107275/120114139-6562d680-c19b-11eb-9481-68bd4f2cc601.png)

The UI has a side nav bar which will help you to navigate to the new event creation page and reports page.

![Screenshot 2021-05-30 at 11 01 32 PM](https://user-images.githubusercontent.com/21107275/120114149-74498900-c19b-11eb-9b7a-dd5492648e44.png)

The **new event** page will help you create a new event, by filling in all the event details and cover image (custom cover image is still experimental). 

![Screenshot 2021-05-30 at 11 01 48 PM](https://user-images.githubusercontent.com/21107275/120114180-93481b00-c19b-11eb-85a2-5983a8a59541.png)

On the right side of the new event page, you can see the live preview card, which will show a preview of how the card will look on your dashboard.

![Screenshot 2021-05-30 at 10 59 41 PM](https://user-images.githubusercontent.com/21107275/120114155-7c092d80-c19b-11eb-87b2-443c0b6b910d.png)

Go to the **Reports** page to see all the statistics of all the events, revenue information, top performing events, all ticket and customer information on a single screen. This will give you a good idea of the overall business performance ahd help you take better decisions.

![Screenshot 2021-05-30 at 11 02 12 PM](https://user-images.githubusercontent.com/21107275/120114223-be326f00-c19b-11eb-9054-09c067891838.png)

On each event card, you can see an icon with a $ symbol in it. It shows the revenue made by that event and the color represents the type of ticket. If its a normal ticket, it will be blue, otherwise, it will be golden in color.

**Known issues and bugs:**
 - ~~Uploading custom image breaks the api call.~~ (Added option to give link to images from the web)
 - The card size in new event page UI breaks when viewed in iPad screen size.
 - ~~Reports page not showing total revenue per event~~ (Fixed)
 - ~~CORS related issues~~ (Fixed)
 - ~~Login page scrolls unnecessarily.~~ (Fixed)
 - ~~User auth based api calls currently unsupported at the UI side. The backend supports it and is working.~~ (Fixed)
 - Form validation is not implemented. Make sure that you enter all the necessary fields.

*Wait for the next update for more bug fixes and features :)
