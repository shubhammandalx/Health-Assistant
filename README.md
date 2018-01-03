# Health Assistant

We have created a project on topic number 3 to solve the problem in healthcare, we have created a city location based search where a patient can search about the doctors in his/her city and schedule and appointment with the doctor which even the doctor can see along with the details of the patient to the doctor as well as details of doctors appointed to the patient.

## Getting Started

Firstly, you need to clone in the path from where the your apache runs, in case of XAMPP on Windows,
  #### C:\xampp\htdocs\Health-Assistant
and incase of Ubuntu
  #### /var/usr/www/html if using LAMP on ubuntu systems

### Prerequisites
PHP 7.1 is highly recommended
So please use update versions of softwares which will run apache server, give prior priority to XAMPP
You need to install XAMPP software or any other software which supports APACHE and MySQL
All the files are in *.php format, so use any proper editor to observe the code
The website pages will only look properly when they are run in 
  ### localhost/Health-Assistant
in your browser page

```
Some examples are added to the screenshots folder
```

### Installing


### IMPORT DATABASE FIRST
For importing the database, go to localhost/phpmyadmin, there go create a database named as 
   ## health_assit 
   the go inside that blank database and click on import to import that .sql file which is located in the "db folder" as     health_assist.sql, there you will find a screenshot of db too.
   then, in the project directly go to the "config.php" file where you have to set the username and password accordinly to your system


Now you will see the website running at 
##localhost/Health-Assistant

```
don't forget to start XAMPP and run APACHE and MySQL
```

## Running the tests

We have created a beautyful login and signup for both doctor as well as patient.
Also there is a notifier at login if the session is already set then it even asks to directly go inside the site like a cookie.
In patients portal, we have initially listed all the doctors as this competition is priorly based on designing, then we have used city wise search for elements in the list of doctors, we have given Appointments to the appointment tab where doctor and patient can see their appointments respectively.


### And coding style tests

We have created this site from our own barely hands, by just using Bootstrap, jQuery for additional designing purposes, the website is responsive and very nicely coded day and night prior to 3 day before the submission date.
On the main index file we have added parallax scrolling effect which really took a ton of time to complete.

## Deployment

Open your browser and type -
### locahost/health-assistant

## Built With

* [Eclipse PDO (https://eclipse.org/) - Which is the Eclipse Foundation open source community website.
* [PHPMYADMIN] - Database Management


## Authors

##### Sumeet Jadhav [VIIT] [ENGINEERING] [SECOND YEAR]
##### Nishad Patil [PCP] [DIPLOMA] [THIRD YEAR]
##### Neel Khalade [PCP] [DIPLOMA] [THIRD YEAR]

## Acknowledgments

* BOOTSTRAP (https://getbootstrap.org)
* JQUERY (https://jquery.com)
