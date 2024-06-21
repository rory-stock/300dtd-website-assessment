# Development of a Database-Driven Web Application for NCEA Level 3

Project Name: **Photography Portfolio Website**

Project Author: **Rory Stock**

Assessment Standards: **91902** and **91903**


-------------------------------------------------

## Documentation

- [Home](README.md)
- [Design and Review](Design.md)

-------------------------------------------------

## Design, Development and Testing Log

### Friday 30th May

Getting the image download function working

I spent quite a lot of time trying to use the google drive api to allow site users to download images however I was struggling to get this to work. I want through a number of different services and options and have ended up using cloudflare r2 storage and the s3 api through the laravel framework to give a download button. This doesn't need any of google's oauth2 authentication making it much simpler to implement. When I use this function in the website I will create a variable for the image name/path instead of a static preselected image seen in the example below.

![Code snippet screenshot](<images/Screenshot 2024-05-30.png>)

> No user feedback relevant for this.

### Friday 31st May

Working on site flow using Excalidraw.

Started designing how the user will navigate between pages, and making sure that there are no dead ends in the site. <br>
This is only the user interface, I still need to make an admin interface to allow for uploading and managing the site.

![Excalidraw screenshot](images/image.png)

> Users happy with site flow at the moment, as the site progresses this may get modified slightly, but the site does not demand a particularly complex layout. I will however get user more user feedback for when I design the admin interface.

### Friday 31st May

Database design with DrawSQL

Started designing the database for the website. I may need to add more tables to the Image EXIF data table as I am not sure how many filters I will want. Admin accounts/security still need to be added.

![Draw SQL screenshot](images/image1.png)

> No particularly relevant user feedback, just making sure that any relevant image IPTC/copyright data is included in the database.

### Friday 31st May

Site Design with Figma

Made a draft design of the mobile and desktop versions of the site. It follows the same flow that I made in excalidraw. <br>
This is only the user interface, I still need to make an admin interface to allow for uploading and managing the site.
The font used in this design is [League Spartan](https://fonts.google.com/specimen/League+Spartan)

Mobile Site:
![Figma Mobile site screenshot](images/image3.png)

Desktop Site:
![Figma Desktop site screenshot](images/image4.png)

It is not shown in the screenshots but on the figma preview each page is interactive and you can click through the site.

> Site design feedback: The home page should have one main large image then other smaller images below it with a non-symmetrical layout. They also asked about copyright. At the bottom of each page I will add a copyright notice specifying ownership of the site/images. We also discussed the background and accent colours used on the site. We went through a few different options and agreed that a simple black/white/grey them is best as it allows the main content of the site, images to stand out. We decided to use white as the background as mountain bike photos tend to have darker colours and a white background would create a good contrast. We also discussed about whether or not there should be an about page, we thought that it would be a good idea to add in the future, but that there would not be enough to put in it at the moment.

Edited the mobile and desktop site designs to reflect the feedback. I also changed the projects page to a just an image gallery page which is more relevant at the moment. A projects page may be added in the future if there is enough content to put on it.

Updated Mobile Site:
![Screenshot of Figma mobile design](images/image5.png)

Updated Desktop Site:
![Screenshot of Figma desktop design](images/image6.png)

### Thursday 6th June

Admin section of database with DrawSQL

Added an admin table to my DrawSQL database design. To ensure admin security no passwords will be stored on the database, instead the passwords will be hashed and the hash will be stored.
![Screenshot of DrawSQL](images/image7.png)

> No user feedback relevant for this.

### Sunday 9th June

Admin page flow with Excalidraw

Designed the flow for the admin page. This will allow the user to upload images and manage the site. The admin page will be password protected and will only be accessible to the site owner. This page will be accessed with the /admin route with no button on the main site linking to it so as to avoid non-admin users going to it. The page itself will also require the admin to sign in.
![Screenshot of excalidraw](images/image8.png)

> Feedback lower down

### Sunday 9th June

Further updates to Figma design. Refining the design slightly and added a search button to the events page. There are two possible designs for the home page that I will show to my end users for feedback.

Updated Mobile Site: <br>
![Figma screenshot](images/image9.png)

Updated Desktop Site:
![Figma screenshot](images/image10.png)

> User feedback: The new layout with the different sized, non-symmetrical images is a great improvement. Users liked the alternate layout I designed which uses a type of parallax scrolling. Users liked the new non-symmetrical layout of the portfolio and events sections.

### Sunday 9th June

Finalising DB design with DrawSQL. Home page images will be stored in the public folder inside the project as these don't need to be stored on the database. 

![DrawSQL screenshot](images/image11.png)

This database design will address the end-users feedback about copyright by storing relevant IPTC/copyright information in the database.

### Sunday 9th June

Admin Page design with Figma

Added the admin pages for desktop and mobile. The authentication will be handled with the laravel breeze kit which comes with a UI. There won't be an admin section for mobile as it needs access to folders containing the photos which would only really be on a desktop/laptop. This layout only covers editing events, editing the other sections shouldn't be too different though and should really only have different wording with some different sections.

Desktop admin:
![Figma screenshot](images/image12.png)

> Users though the admin section was well thought out and would adequately provide a good way to update parts of the website.
