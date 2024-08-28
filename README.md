# The Design of a Database-Driven Web Application for NCEA Level 3

Project Name: **Photography Portfolio Website**

Project Author: **Rory Stock**

Assessment Standards: **91902** and **91903**


-------------------------------------------------

This is my Level 3 NCEA project for Digital Technologies.

## Documentation

The documentation for this project is split into the following sections:

- [Design and Review](docs/Design.md)
- [Development and Testing](docs/Development.md)
- [Setup and Admin Access](docs/Setup.md)

---

## Files Worked On

As Laravel creates a lot of files itself when you make a new project, many of the files are ones that I have not worked on. The files that I have worked on are:

### Controllers (/app/Http/Controllers):

    AdminController.php
    EventController.php
    ImageController.php
    MailController.php
    RouteController.php

### Components (/app/View/Components):

    editEventForm.php

### Config (/config):

    admin.php
    filesystems.php

### Database (/database/migrations):

    0001_01_01_000000_create_users_table.php
    2024_08_22_001019_create_events_table.php

### CSS (/resources/css):

    app.css

### Views (/resources/views):

    auth/login.blade.php

    components/admin-content.blade.php
    components/contact-form.blade.php
    components/edit-event-form.blade.php
    components/image-modal.blade.php
    components/modal.blade.php
    components/new-event-form.blade.php
    components/slide-over.blade.php

    includes/footer.blade.php
    includes/head.blade.php
    includes/header.blade.php
    includes/nav.blade.php

    layouts/default.blade.php

    pages/contact.blade.php
    pages/events.blade.php
    pages/home.blade.php
    pages/view-event.blade.php

### Routes (/routes):

    web.php

### Storage (/storage/app/public):

    /icons/*
    /images/homeImages/cover/*
    /images/homeImages/main/*

### Environment File (/):

    .env
    .env.example

### Other (/):

    tailwind.config.js