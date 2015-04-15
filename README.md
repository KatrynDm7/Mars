# Mars

The application uses Decorator pattern.<br/>
The input data is read from the file.<br/>
But the application is implemented in such way that will not be difficult to add the ability to read data from the DB.<br/><br/>

Input:<br/>
Each rover has two lines of input. The first line gives the rover's position [x and y co-ordinates and the rover's orientation], and the second line is a series of instructions telling the rover how to explore the plateau.  The possible letters are 'L', 'R' and 'M'. 'L' and 'R' makes the rover spin 90 degrees left or right respectively, without moving from its current spot.
'M' means move forward one grid point, and maintain the same heading.
<br/><br/>
Output:<br/>
The output for each rover should be it's final co-ordinates and heading.
<br/><br/>
Example
<br/>
Test input:<br/>
5 5<br/>
1 2 N<br/>
LMLMLMLMM<br/>
3 3 E<br/>
MMRMMRMRRM
<br/><br/>
Test output:<br/>
1 3 N<br/>
5 1 E<br/>

