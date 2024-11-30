# Devholder
Preview at : [https://devholder.us.to](https://devholder.us.to)
     
## A PHP Api to generate Placeholder Images

Devholder is a PHP application that can be used to generate Placeholder images. It uses the PHP [Intervention](https://github.com/Intervention/image) library to generate images. It doesn't require heavy setup. Just upload the files to your server, and you're good to go. Consider updating the PHP [Intervention](https://github.com/Intervention/image) library before uploading it to your server.

To use placeholder images, specify `/widthxheight/format` in the image tag's `src` attribute and learn to configure the images as below.

---

### Image Size

Specify the image's dimensions using the format width x height. For example:

    /600x300/svg?txt-size=70

Use the `txt-size` query string in the URL to adjust the text size. The default size is 70.

---

### Format

Supports various formats such as SVG, JPG, and PNG. Specify the format as follows:

    /600x300/svg?txt-size=70

    /600x300/png?txt-size=70

    /600x300/jpg?txt-size=70

The default format is SVG.

---

### Colour

Specify colors using hex codes for the background and text by using the `bg` and `txt-clr` query strings respectively. For example:

    /600x300/jpg?bg=C5C5C5&txt-clr=000000&txt-size=70

---

### Custom Text

Include custom text in the URL using the query string `txt`. Use `+` for spaces. For example:

    /600x300/jpg?bg=C5C5C5&txt-clr=000000&txt=Hello+World&txt-size=70

---

### Fonts

Specify the font using the query string in the URL. Font names are case-sensitive.

    /600x300/jpg?bg=C5C5C5&txt-clr=000000&txt=Hello+World&txt-size=70&font=Outfit

The default font is Outfit. You can upload your own custom font and remember to rename it simply so it won't give you errors.

Available fonts:

- Outfit
- Montserrat
- Poppins

Remember to capitalize the initial letter when specifying font names.

---
