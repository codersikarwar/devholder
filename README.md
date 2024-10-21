# PHP Placeholder Images Generator
A simple php application that can be used to generate Placeholder images. It uses php [intervention](https://github.com/Intervention/image) library to generate images. It doesn't require heavy setup. Just upload the files on your server and you are good to go. Consider updating the php [intervention](https://github.com/Intervention/image) library before uploading it to your server.


To use placeholder images just specify /placeholder.php? in images tags src attribute and learn to configure the images as the below


### Image Size

Specify the image's dimensions using the format width x height. For example:

     /placeholder.php?size=600x300&txt-size=70
          
        

Use the txt-size query string in the URL to adjust the text size. The default size is 70.

* * *

### Format

supports various formats such as SVG, JPG, and PNG. Specify the format as follows:

      /placeholder.php?size=600x300&format=svg&txt-size=70

      /placeholder.php?size=600x300&format=png&txt-size=70

      /placeholder.php?size=600x300&format=jpg&txt-size=70
      
    

The default format is svg.

* * *

### Colour

Specify colors using hex codes after the size for background and text by bg and txt-clr query string respectively. For example:

    /placeholder.php?size=600x300&format=jpg&bg=C5C5C5&txt-clr=000000&txt-size=70
    
  

* * *

### Custom Text

Include custom text in the URL using the query string txt. Use '+' for spaces. For example:

      /placeholder.php?size=600x300&format=jpg&bgC5C5C5&txt-clr=000000&txt=Hello+World&txt-size=70
      
    

* * *

### Fonts

Specify the font using the query string in the URL. Font names are case-sensitive.

      /placeholder.php?size=600x300&format=jpg&bg=C5C5C5&txt-clr=000000&txt=Hello+World&txt-size=70&font=Outfit
      
    

Default font is Outfit. You can upload yourn own custom font and remeber to rename it simple so it won't give you error.
Available fonts:

*   Outfit
*   Montserrat
*   Poppins

Remember to capitalize the initial letter when specifying font names
