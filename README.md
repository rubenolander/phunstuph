THERE WILL BE NO GIFS IN MY HOUSE



# Ruben's WRC 2022 / phunstuph

This minor page has been used a place for me to ~~create some art~~ practice PHP and programming think in general. It's existence is thanks to school work but I will look at it as a stepping stone to my future life with imposter syndrome. 

"*This was the first project I did, connected to web development. Sweet jeebus. But look how far I've come today!*" - FutuRuben, late 2023

You can find the deployed page by following the link below.
http://www.ruebn.se/phunstuph/



# Installation

1. Download this repository and save it where you can find it.
2. Boot up your Terminal of choice.
3. In the terminal window, make your way to the /directory/you/chose/phunstuph
4. Paste the following line in the terminal window:
        php -S localhost:8888
5. Open your browser of choice.
6. Enter the following adress in your browser:
        localhost:8888
7. You should now have loaded up the same content as the previously linked web page, only locally. Horray!



# Code Review

Code review written by [Dan Fogelberg](https://github.com/DanFogelberg).

1. index.php:30, 43 - These comments are redundant. We can already see that the following lines are functions, and assume that they are located in functions.php. 
2. functions.php:28-34 - This is not a function. Having code execute in functions.php makes the flow of the code very hard to follow. So these lines should either be made into a function that is called elsewhere or moved to a different file. 
3. functions.php:28-34 - The user submitted data in POST should be validated or filtered before being used.
4. index.php:4-6, 87 - Every require should use the same syntax. The require on line 87 uses __DIR__ while the others do not. 
5. functions.php:36-48 - This function doesn’t need to use print_r. Since you are echoing specific values in arrays echo works fine. You could also clean this up and make it more readable by concatenating or just putting the variables into strings rather than making multiple calls to echo/prin_r.

# Testers

Tested by the following people:

1. Dan Fogelberg
2. Johanna Pihl
