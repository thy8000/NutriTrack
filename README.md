# NutriTrack
NutriTrack is a personal project. NutriTrack is a Wordpress custom theme with a dashboard for nutricionists to manage their customers. 

# Arquitetura do Projeto

## Estrutura de Pastas

```plaintext
/NutriTrack
|-- /config
|   |-- theme-settings.php
|   |-- database.php
|-- /public
|   |-- /assets
|   |   |-- /css
|   |   |   |-- main.css
|   |   |-- /js
|   |       |-- main.js
|   |-- /images
|-- /resources
|   |-- /views
|       |-- /partials
|           |-- header.php
|           |-- footer.php
|           |-- sidebar.php
|       |-- /templates
|           |-- page-home.php
|           |-- single-event.php
|-- /routes
|   |-- api.php
|   |-- web.php
|-- /languages
|   |-- en_US.mo
|   |-- en_US.po
|-- /tests
|   |-- Feature
|   |-- Unit
|-- /vendor
|-- .env
|-- composer.json
|-- composer.lock
|-- wp-config.php
