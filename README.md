# CSCI-4950-Senior-Project

## Quick-Start Guide
Required Software - Python, mySQL Workbench ????

### To install Python:
1. Navigate to: https://www.python.org/downloads/
2. Download the latest version of python
3. Run the executable downloaded and install python
4. Ensure Python is installed on the PATH as it will be needed to start the webserver 

### To install MySQL Workbench:
1. Navigate to: https://dev.mysql.com/downloads/workbench/
2. Download the MySQL Version appropriate for your machine
3. Run the Program downloaded
4. Run MySQL Workbench and go through the setup

### To start a local webserver:

1. Open a command prompt or terminal Window
2. Type python3 -m http.server 8000
3. a local webserver should be open on localhost, port 8000

### To start a local database:
1. ???
2. ???
3. Profit


## HTML Files
index.html - The landing page of the website. There is a navigation bar to access the other pages and a message at the center of the page to prompt users to signin or signup

login.html - This page is where users can signin to their account or new users can make an account. This page also features a navigation bar to the other pages

rules.html - Exactly as it sounds, this page lays out the rules of the game being played. Like the other pages it features a navigation bar to get to the other pages

game.html - Gives a brief overview of the game

scoreboard.html - The scoreboard page displays the top 50 users and their scores

admin.html - The admin login page. This gives access to administrative controls, including access to the website backend and ability to remove users.

## PHP Files
PlayerKilled.php - 

SortingPlayers.php - 

access.php - 

connect.php - 

login.php - 

loginForum.php - 

logout.php - handles user logout request and returns them to the main page index.html

scoreboard.php - the main page for the scoreboard. It mainly is html with php used to interact with the database to properly to maintain a live score evertime the page is refreshed

scoreboardinteract.php - holds functions that are necessary for accessing user's usernames and user's scores.

thegame.php - 

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
