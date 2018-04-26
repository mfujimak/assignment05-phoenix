# assignment05-phoenix
## City: phoenix
### IA: Masaru Fujimaki
### Designer: Xuanyang Wang
### Coder: BEI Lu

Website location: http://www.urcsc174.org/assignment05/assignment05-phoenix/
Github: https://github.com/mfujimak/assignment05-phoenix
Database: local

### IA - Masaru Fujimaki
 


Layout Suggestions：
Each web pages could have a common footer.
Designer could decide whether or not to keep the original home page styles.
The HTML form could be positioned on a new page, and this page should use the same layout as the students' pages do. 
For background, Designer can use some colors that fit the content of the webpage(mysterious and fanatastic.) Designer can try to use some background images of each characters. 
Design could use different color for the hover attribute on navigation.
F-pattern for three charcters' webpages and Z-pattern for the index. 

Typeface/Font Suggestion：
I suggest the designer to use fonts that add mysterious and marvellous moods to webpages.
The h1s need to be styled using fonts that are clear and powerful.
All the body paragraphs should use the same font.

About HTML Form：
For this assignment, the form should be used to vote for user's favorite characters among three.
create a login system and after they logged in, they should be directed to a webpage which user can vote for their favorite characters.  
the form should have : name of the users and their favorite characters(radiobutton will be simple and clear). 


### Coder - Bei Lu

#Survey and Login
I started with creating a MySQL database for this assignment. Then I implemented register.php and logout.php for login purposes. After this, I created a survey page for users to vote for their favorite character. Then I started to write the back-end scripts. 

"vote.php" is where I process survey information and insert it into table "vote".
"login.php" contains JavaScript codes for validating user name and password, and allow log in when both are validated.
"register.php" is where I create user name and password sets for each user.
"survey.php" is the front-end html form for voting, and when submit, data will be sent to "vote.php" to process.
After successfully inserted vote data, we will show a thank you page with navigation bar for users to browse again.

#Admin functions 
I used AJAX to implement the four administration functions (see, add, edit, delete).
After log in, admin user will be directed to a admin page, where admin panel is displayed. User can see and change data in real time without refreshing. "admin.php" calls each individual script to do different task.
"delete.php" delete data;
"insert.php" insert data;
"edit.php" edit data;
"select.php" choose which data is displayed, edited, or deleted;

#Standards
I've completed validation for both css and html.
php include function was used to exclude redundance (navigation bar).





