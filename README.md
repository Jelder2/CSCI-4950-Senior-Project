# CSCI-4950-Senior-Project

## Quick-Start Guide
Required Software: XAMPP

## To install XAMPP:
1. Navigate to: https://www.apachefriends.org/index.html
2. Download the latest XAMPP version appropriate for your operating system
3. Run the program downloaded
4. Once XAMPP is installed ensure the web server and the database server are running, if they are not start them
5. It will be possible to tell if they have started if you navigate to localhost in a web broswer and are greeted by the XAMPP Dashboard and you can create databases in the phpmyadmin dashboard

## To run the files locally (After XAMPP is installed):
1. Download or pull the files from this GitHub repository
2. Navigate to where you chose for the XAMPP Files to be installed (Windows Default is C(Or whatever drive):\xampp\)
3. Navigate to the htdocs folder
4. If you downloaded the files from this GitHub please unzip them now, If you pulled them skip this step
5. Move the folder into htdocs, this will be part of the url (NOTE: If you want a shorter name for easier navigation, change 'CSCI-4950-Senior-Project' to something else)
6. Once that is done you should be able to open up a web browser and navigate to localhost/CSCI-4950-Senior-Project/index.html (or whatever you named the folder) to view the pages
IMPORTANT NOTE: Some files may not function properly due to the database connections not being the same. If that is the case, the information will have to change to match your database information. These files include, but are not limited to: scoreboardinteract.php, connect.php, admin.php
IMPORTANT NOTE 2: The scoreboard will not function properly until there are values that can be pulled from the database.


## HTML Files
index.html - The landing page of the website. There is a navigation bar to access the other pages and a message at the center of the page to prompt users to signin or signup

login.html - This page is where users can signin to their account or new users can make an account. This page also features a navigation bar to the other pages

rules.html - Exactly as it sounds, this page lays out the rules of the game being played. Like the other pages it features a navigation bar to get to the other pages

admin.html - The admin login page. This gives access to administrative controls, including access to the website backend and ability to remove users.

## PHP Files
SortingPlayers.php - Once the admin starts the game by pushing the button on adminBehind.php, the code will run putting all players from the database into an array and then shuffling the order. The players are then put into a new sql table `playerList` 

connect.php -  connects to the database and inputs the sign up variables into the database

loginForum.php - Validates the email and password login for users.

logout.php - handles user logout request and returns them to the main page index.html

scoreboard.php - the main page for the scoreboard. It mainly is html with php used to interact with the database to properly to maintain a live score evertime the page is refreshed

scoreboardinteract.php - holds functions that are necessary for accessing user's usernames and user's scores.

adminBehind.php - handles the creation and administration of the admin page. Hidden behind game.html

thegame.php - handles whether the user is logged in or not.

## <br>
## CSS Files (assets/stylesheets)

adminstyle.css - The styling sheet for admin.html/php. 

indexstyle.css - the styling sheet for index.html. The styling mainly includes the navigation bar styling, background for the page and the large text present.

loginstyle.css - the styling sheet for login.html. The styling consists of adding in the background image, navigation bar styling, and handling the login form shape and size.

rulesstyle.css - the styling sheet for rulesstyle.css. It features some CSS to have the title on the page to be typed. Like the others, it features the navigation bar styling and background image styling. It also features styling on the ordered list of rules present.

scoreboard.css - the styling sheet for scoreboard.html/php. Like the others, it features navigation bar and background image styling to maintain the theme of the other pages. It also features styling for a centralized and compact scoreboard that can be scrolled through.

## <br>
## Image Files (assets/images)

adminbackground.jpg - The background for the admin page. It features a sunset, ocean, constellations, shooting stars and a person on a cliff.

loginbackground.jpg - The background for the login page for users. It features northern lights, clouds, mountains, a sunrise, a manmade structure, boat, and person in a field with a small animal.

logo.png - The logo of the website. It is used to navigate to the homepage.

rulesbackground.jpg - The rules page background image. It features a sunset, ocean, constellations, shooting stars and a person on a cliff.

scoreboard.png - The backgroudn image for the scoreboard page. It features what looks like a temple, trees, and a person.
