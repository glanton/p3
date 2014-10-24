# p3

Project Three of dwa15

### URL

[p3.alexf.me](http://p3.alexf.me/)

### Project Desc

This is Project 3 (p3), also known as *Developer's Best Friend*. In my case we'll be calling it Litsum/proProfile, a one-two development punch.

I chose ten well-known classics (which I've read, of course!) from available public domain books, and randomly mash their sentences together to create dummy paragraphs (what I'm calling Litsum), which works in similar fashion to various Lorem Ipsum generators strewn across the Internet.

For the test profiles (the proProfile tool) I generate random images in php encoded as base64, and also have a couple of standard options (birthdate, location). Using some Litsum code I provide the option to include a "favorite quote."

###Demo Info

I will demo in-person next Thursday.

### Additional Info

Post-deadline submission note: See the commit for details but I just fixed some typos and added some comments to the code while it's still fresh. All functionality was up and running when I submitted the link.

There's a lot of credit to go around here, and I know I'll never be able to do justice to all of the help and techniques I found on StackOverflow. Some main sources, though:

- Project Gutenberg, where I found complete text files for the ten books I used
- The following authors and books: LM Montgomery - Anne of Green Gables, Brahm Stoker - Dracula, Mary Shelley - Frankenstein, Charles Dickens - Great Expectations, Joseph Conrad - Heart of Darkness, Charlotte Bronte - Jane Eyre, Herman Melville - Moby Dick, James Joyce - A Portrait of the Artist as a Young Man, Jane Austen - Pride and Prejudice, Nathaniel Hawthorne - The Scarlet Letter
- [thesitewizard](http://www.thesitewizard.com/php/create-image.shtml), where I learned about generating images in php
- Ray Larabie, from [Typodermic Fonts](http://typodermicfonts.com/), who created and distributed for free the TTF file for Expressway, which turned out to be the perfect font for created the smileys on my generated profile pictures
- [CSS Sticky Footer](http://www.cssstickyfooter.com/), which didn't really make a difference on my latop but should look nice on larger screens
- Wikipedia, where I found a nice city and country list
- [mongabay.com](http://names.mongabay.com/data/1000.html), which has a great list of the 1,000 most common last names in the United States
- [hadley](https://github.com/hadley/data-baby-names) on Github, which gave me a huge and awesome list of first names

I'm happy with most of how the project came out, but the code is a lot less DRY than I would like. I think a lot of this could be fixed with a few good classes but I was already too far into the project when we started doing classes to want to switch. As it is routes.php is a little bit of a mess. The other major (and more noticeably) change I'd like to make is to make the book mash-up more efficient. Right now it loads the full content of all ten books to only pull out at most a few hundred sentences.

I'd like to split the books into fairly uniform chunks, and pick a limited number of chunks from which to randomly draw the sentences of each paragraph. There cold potentially be a relationship of chunks per paragraph just to keep things diverse.

I'd guess it would be possible to cut down more than 90% of the processing this way and still have a just-as-random mash-up. A more scalable solution would be to write a php script that checks the book folder for new books and then auto-indexes new ones for future use, but now I'm really getting ahead of myself!