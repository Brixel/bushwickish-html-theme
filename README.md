# Brixel Theme

**Warning: Everything in this repo has to be considered UNSAFE and UNSTABLE until further notice**

### A theme for our website

This website theme is a html template that serves as a base for a new website for Brixel Hackerspace Hasselt. 

It's based upon the great "Bushwick" theme for Anchor CMS, but stripped down to just a html version with a couple of tweaks so we can use it together with our wiki.

### Rendered Markdown wiki content project

This theme is the next step in wouter's [PPPPP - or Plain Practical PHP Page Parser](https://github.com/Brixel/Plain-Practical-PHP-Page-Parser).

The goal is to create a website that takes it's content from a dedicated wiki page. 
The content on the wiki page is written between <no wiki>-tags and written in markdown rather than the usual markup.

PPPPP recognises the markdown sections and translates them to html. That html content is then placed inside this theme.
And thus is providing our space with a good looking (no wiki) front-page that is easy to edit (via wiki) without the need of a seperate CMS.

### Sort Of Pages

At the moment there are 3 kinds of pages:

- **Posts template:** *Only 1 should be present, it's a bloglike thing*
- **Article template:** *Gives the full blogpost*
- **Page template:** *Gives the full page*

How we're going to use this isn't clear at this moment. One way we could use this, is by having the **POSTS** page as the default homepage. The "Latest Article" block could be looped for important "sticky" messages. Underneath these, we could allow "blogposts" which in fact, is just a list of the 5 latest project pages.

The contact page etc can be made out of a "Page" template.

The Article template could be used if we were to include markdown in all our wiki projects. The author could write markdown between <no wiki> tags and make it hidden on the wiki itself (our wiki should support custom markup tags). This way the blog posts won't be visible on the wiki, but on the front page. projects without <blog> tags could be left untouched.

It remains to be seen how we should implement this.


### About Bushwick

Bushwick is a lightweight, responsive blogging theme, designed to show beautiful content alongside beautiful imagery.

View a sample at <http://bushwick.molovo.co.uk>, or grab the code from [Github](http://github.com/molovo/bushwick)

<small>Contains custom extensions to Markdown syntax, to allow for the use of buttons and image alignment within the content. [Read more...](http://bushwick.molovo.co.uk/writing-guidelines)</small>
