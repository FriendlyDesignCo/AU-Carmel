# Carmel Insitute web template

The files in this Github repo contain all of the code you should need to build out the full Carmel Institute website. Note that most custom elements within the layout (such as feeds or content areas) can be repurposed to create new page layouts. Additionally the site uses Bootstrap, so all of Bootstrap's CSS and JS is at your disposal.

## Sass Partials

All of the custom styles can be found in the /scss/ folder. These files make use of Sass's ability to separate code into multiple files which allows for better organization.

If you plan on making CSS edits, you are strongly encouraged to work within the /scss/ folder. In order to do so you will either need to have Sass installed on your local machine or you'll need to use a third party preprocessor such as CodeKit in order to compile SCSS into CSS. Note that if you prefer to use the command line, you'll want to use the following command to watch the /scss/ folder for changes:

1. Navigate to main project directory
2. Type the following into Terminal
```
sass --watch scss:css
```

Editing the compiled main.css is not recommended as if you make edits in main.css and then later compile the /scss/ folder using Sass, your changes to main.css will be overwritten.

## Questions?
Get in touch with someone@friendlydesign.co, we'll be happy to answer any questions you might have.