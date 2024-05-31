# orchard-test
Orchard Test Activities (Drupal 10 CMS)

## Set up instructions
### Prerequisites
- Docker
- DDEV

### Step by Step local set up
1. Clone the repository https://github.com/yunycedejesus/orchard-test.
2. Start Docker.
3. Run `ddev start` on terminal.
4. Run `ddev import-db --src=orchard-db.sql` on terminal.
5. Login on CMS. Use the credentials below:
`username: placeholder-for-uid-1`
`password: OrchardD10$$`

## Task 1
### Background changing depends on the menu root.
- Access the home page.
- See the Main Menu on the top right of the page.
- Test the Root A and Root B including it's children by clicking the menu itself.

## Task 2
### Product of the Day.
- Access the home page.
- See the Main Menu on the top right of the page click `Admin Product` menu, it will redirect you to the admin page of Product of the Day.
- - `Orchard product of the day settings admin` this page provides settings for flagged items block title(working) and email setting(not utilize).
- - `Orchard product of the day contents admin` this page provides admin capability to add new, edit, delete and set which product will display on front page.
- - - `Add New Product of the Day` this button allows admin to create new content for product of the day.
- - - `Edit Flagged Items` this button allows admin to configure the list of flagged product that displays on the front page.