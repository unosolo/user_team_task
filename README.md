# user_team_task
Repo for Scott's task #3

# Structure
It folows a basic mvc folder organization

  **migration**, all the sql scripts used for database objects creation
  
  **public**,    all the resources accessed from the browser (front-end).
  
  **src**,       all the backend scripts, and has the following structure
    
    controller  entry point for each page or uri.
    
    model       scripts for data retrieval
    
    view        plain html template for rendering data.

# Installation
  
I used npm for installing javascript libraries, then go to the **public** directory an run the following command after the repository is cloned.
    
    npm install
    
    
**public/index.php** is the only entrypoint for the web app.
