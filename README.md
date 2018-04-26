# assignment05-phoenix
## City: Phoenix
### IA: Masaru Fujimaki
### Designer: Xuanyang Wang
### Coder: BEI Lu

Website location: http://www.urcsc174.org/assignment05/assignment05-phoenix/
Github: https://github.com/mfujimak/assignment05-phoenix
Database: local

### IA - Masaru Fujimaki

Layout Suggestions：
Designer could decide whether or not to keep the original home page styles.
The HTML form could be positioned on a new page, and this page should use the same layout as the students' pages do. 
For background, Designer can use some colors that fit the content of the webpage(mysterious and fanatastic.) Designer can try to use some background images of each characters. 
Design could use different color for the hover attribute on navigation.
F-pattern for three charcters' webpages and Z-pattern for the index. 

Typeface/Font Suggestion：
I suggest the designer to use fonts that add mysterious and marvellous moods to webpages titles.
The h1s need to be styled using fonts that are clear and powerful.
All the body paragraphs should use the same font.

About HTML Form：
For this assignment, the form should be used to vote for user's favorite characters among three.
create a login system and after they logged in, they should be directed to a webpage which user can vote for their favorite characters.  
the form should have : name of the users and their favorite characters(radiobutton will be simple and clear). 


### Designer - Xuanyang Wang
Page Layout
I used bootstrap combining with custom patterns on the pages.
For the background, I chosed blue as the theme color that fits the disney topic. Just as the IA has noted, the dark blue backgrounds conveys a mysterious mood. The light blue background on the home page creates a sense of an fantastic amusement park, which is exactly the right mood for disney world.
    Z-pattern: I applied z-pattern on the home page because it is not text-heavy. As the IA has suggested, the logo of each character is positioned at three corners and the vote button is positioned on bottom right. 
    F-pattern: F-pattern was used in the page with more information regarding the three characters. This page has more content and thus it fits well with an f-pattern layout. Each section starts with title, then body paragraphs, and finally a picture on the right. It would make more sense for viewers because they will first pay attention to the most relevent content.

Typography
As the IA has instructed, I chose Norican and Montserrat as the main fonts on the website. Norican is used for page titles to convey a mysterious and marvelous mood, and it fits the disney topic. Montserrat is used for other body paragraphs and administration page becuase of its higher readability. My choice of fonts were inspired by the offcial disney website, which has also adopted a cusive font well paired with a sans-serif font.

C.R.A.P. Principles
    Contrast: Different font size for headings and content; use of contrasting color for text and backgrounds.
    Repetition: Same format for each section; same font chioce, background and color theme on each page.
    Alignment: Left alignment is used across the pages.
    Proximity: Each section on the characters' page is seperated by white spaces.

Background image source: https://lilynevergrowsup.wordpress.com/2016/04/18/fond-decran-disneyland/
    
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





