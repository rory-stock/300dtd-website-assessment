# The Design of a Database-Driven Web Application for NCEA Level 3

Project Name: **Photography Portfolio Website**

Project Author: **Rory Stock**

Assessment Standards: **91902** and **91903**


-------------------------------------------------

## Documentation

- [Home](../README.md)
- [Development and Testing](Development.md)
- [Setup and Admin Access](Setup.md)

-------------------------------------------------

## System Requirements

### Identified Need or Problem

Need a simple way to share and display my portfolio and photos from events. At the moment my event photos can only be viewed through google drive which is quite slow and not the most user friendly. 

### End-User Requirements

Owner of site: Needs to be able to easily add/update images in portfolio and somewhat automate adding event images.

Viewers of site: Members of the public. Need to be able to easily access and download images. Site needs to be fast and responsive so that it is more useful than google drive.

Possible Clients: Need to be able to easily see examples of my work and an easy way to contact me.

End user feedback: For feedback I will ask for feedback from my parents. My dad used to be a professional ski/mountaineering/adventure photographer so should be able to provide some good/relevant feedback on the website.

### Proposed Solution

A website that allows users to easily access view and download my photos

Users should be able to search for any images that have their race plate in (race plate in metadata - metadata added while editing photos, searchable through website)

Admin/Owner will be able to easily add images to the website and add new events/projects from within the website
 - This would require an admin account with special permissions so that they can modify the site
    - Some of the features that should be included in the admin panel are: 
        - Ability to archive old event images so that they don't take up so much space in the r2 bucket
        - Ability to add new events
        - Ability to add new images to the website, and which section they should be in (Home, portfolio, events)

-------------------------------------------------

## Relevant Implications

### Accessibility

Ensuring that the product is available to a wide range of end users including users with different devices and abilities.

This website will likely be used on different platforms such as different mobile devices as well as desktop computers. 

This means that the website will need to be easily readable usable on different screen sizes and devices.

### Aesthetics

This implication relates to how the website looks

Considering that this website is a photography portfolio, it is important that the website looks good and is visually appealing.

The website should have a clean and simple design that allows the images to be the main focus. The user should be able to easily navigate the website and find the images they are looking for.

### Consistency

This principle means that websites should be consistent in their design and layout and generally stick to conventions for UI and layout

This website should be consistent in its design and layout. This means that the user should be able to easily navigate the website and find what they are looking for.

I will need to consider how I layout the website before I start making it so that each page is consistent and easy to navigate.

### Intellectual Property

This principle relates to the ownership of the content on the website.

Because this is a photography portfolio website, it is important that the images on the website are correctly credited with the correct metadata included in the images.

This means that I will need to ensure that images displayed on the website contain metadata that includes copyright/credit/IPTC data.

### Functionality

This principle relates to how well the website works and whether it meets its intended purpose.

The website should do everything that it is supposed to do without crashing or running into any bugs.

This means that I wil need to properly test the website and make sure that it works as intended for a range of users.

-------------------------------------------------

## Relevant User Experience (UX) Principles

### Useful

The product should be useful and fulfil a need for the user.

The product should be useful for the owner in that it provides a simple way to display their portfolio and photos from events. It should also be useful for viewers of the site in that it provides a simple way to view and download images.

I will need to make sure that it fulfils the needs of both the owner and the user by making sure that the website is easy and more efficient than just using a cloud service.

### Findable

The website should be easy to navigate so the users can find what they are looking for.

Users may not have the best IT skills so the website should be easy to understand with each button or link clearly labelled.

Buttons such as expand image and download should be easy to find and use. The menu should be easy to navigate and the search function should be easy to use.

### Usable

Easy to use for end users.

The website should be easy to use for both the owner and the user. The owner should be able to easily add images to the website and the user should be able to easily find and download images.

If it is not easy to use then users will be less likely to effectively engage with the website and its content.

-------------------------------------------------

## Final System Design

### Database Structure

![Database Structure](images/finalDatabaseStructure.png)

### User Interface Design

![User Interface Design](images/finalUserInterfaceDesign.png)

-------------------------------------------------

## Completed System

### Database Structure

![Database Structure](images/completedDatabaseStructure.png)
<strong>Note:</strong> Only the 'events' table and 'event_images' table are created by me. The rest are created by Laravel when setting up the project. I have modified the 'users' table though.

### User Interface Design

Home Page:
![User Interface Design](images/completedUserInterfaceDesign.png)<br><br>

Events Page:
![User Interface Design](images/completedUserInterfaceDesign2.png)<br><br>

Contact Page:
![User Interface Design](images/completedUserInterfaceDesign3.png)<br><br>

View Event Page:
![User Interface Design](images/completedUserInterfaceDesign4.png)<br><br>

Admin Panel:
![User Interface Design](images/completedUserInterfaceDesign5.png)<br><br>

Add/Edit Event Panel:
![User Interface Design](images/completedUserInterfaceDesign6.png)<br><br>

Download Image Panel:
![User Interface Design](images/completedUserInterfaceDesign7.png)

-------------------------------------------------

## Review and Evaluation

### Meeting the Needs of the Users

Replace this text with a brief evaluation of how well you met the needs of the users that you defined at the start of the project, etc. Look back at the list of requirements you initially set and discuss how well your system has met each one.

### Meeting the System Requirements

Replace this text with a brief evaluation of how well you met the requirements that you defined at the start of the project, etc. Look back at the list of features / functionality you initially set and discuss how well your system has implemented each one.

## Review of Implications

### Review of Aesthetics

Replace this text with brief notes showing how the implication was addressed in the final outcome. Accompany the notes with screenshots / other media to illustrate specific features.

### Review of Consistency

Replace this text with brief notes showing how the implication was addressed in the final outcome. Accompany the notes with screenshots / other media to illustrate specific features.

### Review of Intellectual Property

Replace this text with brief notes showing how the implication was addressed in the final outcome. Accompany the notes with screenshots / other media to illustrate specific features.

### Review of Functionality

Replace this text with brief notes showing how the implication was addressed in the final outcome. Accompany the notes with screenshots / other media to illustrate specific features.

## Review of UX Principles

### Review of Usefulness

Replace this text with brief notes showing how the UX principle was addressed in the final outcome. Accompany the notes with screenshots / other media to illustrate specific features.

### Review of Findability

Replace this text with brief notes showing how the UX principle was addressed in the final outcome. Accompany the notes with screenshots / other media to illustrate specific features.

### Review of Usability

Replace this text with brief notes showing how the UX principle was addressed in the final outcome. Accompany the notes with screenshots / other media to illustrate specific features.

-------------------------------------------------