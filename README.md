This is a demo project in which I make a tiny website to test for how PHP and JS work, and to learn those.

# How to use
>
>*Install and use Laragon, which is what I used for this project. This section reflects my experience with it.*
>

## Installation
You can use any of local dev environments, such as MAMP, XAMPP, WampServer, Laragon, Docker or any other available. You can even go ahead and configure Apache, MySQL and PHP by themselves. I used Laragon, which can be installed from [here](https://laragon.org/download). Additionally, for MySQL, I installed [TabelPlus](https://tableplus.com/download/), which is just a GUI for MySQL.

The way I use it is that I configured a server on Linux, for "production", and use Laragon for "development".

## Configuration
In Laragon, right-click > hover `www` (or `Laragon`) > `Switch Document Root` > click `Select another`. This will prompt you to browse for the folder you want your website to be in.

## How to use
Simply press the `Start All` button. Wait for all programs to have the blue tick next to their name, then you can press `Web` to visualize the website. The `Root` button shows the file explorer of the root folder and the `Terminal` simply opens a terminal in the root folder.

# Technical information
## Stack
The frontend is done by using vanilla Javascript, HTML and CSS.
The backend is done using PHP (v8.3.30), with MySQL (v8.4.3). Using Apache (v2.4.66) for HTTP processing and client-server connection.

## Folder structure
`client\` - frontend folder. Relies on HTML, CSS and JavaScript.

`server\` - backend folder. Relies on PHP.

`public\` - contains media: images, background photos, profile pictures, and documents (such as pdfs). Currently the documents are not utilized.

`issues\` - contains screenshots of the existing or solved issues flagged in ISSUES.md.

## Database structure
There is no current database. Once there is, I will add its structure here.

# Notes / Ideas
- Accessibility (cards, size, font, width, etc.)
- Light/dark mode
- EN/RO language change (and instructions on how to add FR or other languages)
    - ~~[Nice solution on StackOverflow](https://stackoverflow.com/questions/32008125/using-javascript-to-change-website-language)~~ <-- JS only.
- value colorset
- background and designs for the website
- link to external links (e.g. social media)
- Gantt-like diagram of past projects with their timelines, and on-going projects
- mobile website