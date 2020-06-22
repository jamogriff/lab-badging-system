# lab-badging-system
 This is the third iteration of the core user management software of the Inworks prototyping lab. This web app interfaces with lab user data and allows Inworks staff to:
- update user's equipment credentials based on lab-training. This change reflects a "level-up" badge for the user on our large monitor in the space.
- allows lab staff to add or drop user's from the large monitor screen to reflect who is working in the space at any given time.
- search our repository of Inworks users to find specific user's and their associated skills.
The backend of this web-app was built with PHP with a MySQL database. Frontend utilized Bootstrap 4's CSS/JS code along with a CDN serving jQuery.

Code Walkthrough:
- This code contains a rather expansive file directory to allow for scalability and new features to be added and tested without disturbing too much of the codebase. File navigation functions were made to dynamically navigate this file structure.
- The private directory contains categorized function files and reusable web elements (header, footer, navigation).
- Public contains images, icons, stylesheets, and some css testing pages.
- Admin contains the meat of the code.
	+ Login.php is a robust user authentication login page, which utilizes password hash matching and responsive error messages.
	+ Index.php is the page where any Inworks users who have scanned their RFID cards in the space will show up. Each user is color-coded depending on whether they are a student, researcher or community member. Credentials can be changed for each user on this page.
	+ The navigation section allows admins to search users using a a very simple search mechanism. Relevant users will then populate as cards with their picture and a button to log them into the lab.
	+ Snapshot.php and capture.php were for testing the functionality of capturing how many users are in the space along with a timestamp. This code still needs to be refined.
	+ All pages should be secure from URL manipulation since each page checks whether $_SESSION variables are set upon user login.
	
Lessons Learned:
- Building an authentication system from scratch (password hashing, validation functions, error message arrays).
- Utilizing $_SESSION and $_POST superglobals.
- Making creative and useful functions (e.g. dynamic file navigation, string validation functions).
- Designing a robust file directory framework for scalability and future modularity.
  