1. Your pages are not secure i can still access the dashboard|add|del|delall pages even when im logged out
    Yeah the dashboard and add page will display errors when u try to access it. For a production ready app, you don't give access to anauthorized pages and above all, you don't display technical errors to users

2. Validated if email exists in the db before creating new users
3. Arranged your code and removed the head  tag from dashboard|add|del|delall|signout|login pages since its been included in connection.php
4. removed the session_start() from connection to a new session.php file so that i can secure the pages
    Note: i included session.php first before connection. its good practice to always add it first;

5. Added some todo for you 
    .check add.php page
    .when i open the site at first, check if i'm logged in. If yes, redirect me to dashboard directly instead of taking me to the login page again

6. I'll walk you through how to add fontawesome or glymphicons to sites
    . Also a popup should show for confirmation before deleting incase the delete button is pressed by mistake. I'll walk ou through that too

GOOD JOB OVERALL. There is still room for improvements.
