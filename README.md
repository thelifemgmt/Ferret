Ferret
======

The Fast and Simple, Mobile-first Responsive Framework for Rapid Development
---

Ferret Framework is a fast and simple, mobile-first framework for rapid development. Ferret is 100% customizable, fully scalable, and supports both LESS and SASS. Ferret also utilizes a custom grid that allows you to define how many columns make up the rows of the grid, giving you complete control of your project. You can have a 1 column grid, all the way up to a 24 column grid. And since Ferret is percentage based, you can even have an odd amount of grid columns such as 19 columns or 13 columns. 

Ferret works in all modern browsers, and even not so modern browsers like IE 8. Need support in IE 6 or 7? All you have to do is include the ie6-7 LESS or SASS stylesheet and boom... full IE 6-7 support!

* Fully Responsive
* 100% Customizable
* Your Choice of LESS or SASS
* 1-24 Grid Columns
* Full Browser Support

Still in Development

Updated (11/28/13)
---

* Added SASS support
* Reorganized LESS code to match new SASS code


How to Use
---

<b>Ferret Setup</b>

Ferret uses both LESS or SASS for the CSS. Before using Ferret, make sure you have a LESS or SASS compiler setup and watching the project.  If you don't have a compiler, I suggest you try <a href="http://incident57.com/codekit/" target="_blank">CodeKit</a>.

When setting up Ferret for your project, first start with the <i>project-settings</i> file in the <i>less/project</i> or <i>sass/project</i> folder. Inside is all the project settings and variables to control the look and feel of the default settings. You can set your colors, margins, fonts, typography, and many other things all in that file. 

You can also control the grid settings inside this file. Default setting is 16 boxes (columns) with 20px gutters. You can have as little or as many boxes as you want. You want 72 boxes... no problem! Most common box counts are 8, 12, 16, or 24. One note, if you are supporting ie6-7, Ferret only supports up to 24 boxes by default.



<b>Basic Grid Use</b>

The grid is very simple to use. Start with a row, and insert your boxes (or columns) inside.

	<div class="row">
		<div class="box-8">
			YOUR CONTENT
		</div><!--/.box-8-->
		
		<div class="box-8">
			YOUR CONTENT
		</div><!--/.box-8-->
	</div><!--/.row-->



<b>Nested Grid Rows</b>

You can also nest boxes inside boxes. When doing so, you must always start your nested content with a new row.

	<div class="row">
		<div class="box-16">
			YOUR CONTENT
			
			<div class="row">
				<div class="box-16">
					NESTED ROW CONTENT
				</div><!--/.box-16-->
			</div><!--/.row-->
		</div><!--/.box-16-->
	</div><!--/.row-->



<b>Add Row Spacing</b>

By default, rows have no spacing in-between each other. Sometimes spacing is nice. You can simply add a bottom margin to a row by adding 1 of 3 classes.

Default spacing:

	<div class="row with-spacing">
		<div class="box-16">
			YOUR CONTENT
		</div><!--/.box-16-->
	</div><!--/.row-->

More spacing:

	<div class="row with-more-spacing">
		<div class="box-16">
			YOUR CONTENT
		</div><!--/.box-16-->
	</div><!--/.row-->

or less spacing:

	<div class="row with-less-spacing">
		<div class="box-16">
			YOUR CONTENT
		</div><!--/.box-16-->
	</div><!--/.row-->



<b>Components</b>

Ferret has several included components to help you with quick development. Components include:

* Tabs
* Tables
* Lists
* Tooltips
* Modal
* Buttons
* Forms
* Pull Quotes
* and more...



<b>Buttons</b>

Buttons are very easy to create. Add a class of <i>.button</i> to any anchor or button tag. There a several default button styles already included in Ferret. Here are a few examples, or refer to the Ferret Demo for more.

Default button:

	<a class="button" href="">This is a Button</a>
	
Small button:

	<a class="button small" href="">This is a Small Button</a>
	
Large button:

	<a class="button large" href="">This is a Large Button</a>
	
X-large button:

	<a class="button x-large" href="">This is an X-large Button</a>	

Oval button:

	<a class="button oval" href="">This is an Oval Button</a>


Full-width button

	<a class="button full-width" href="">This is a Full-width Button</a>


---

By default, all these components are included and compiled into the your project CSS. If you know your project won't be needing a certain component, or you plan to use your own markup for a particular component, it is very easy to remove the unnecessary code from Ferret. In the <i>ferret.less</i> file inside the <i>less/</i> folder you will find all included components. All you need to do is remove (or comment out) the related imported files. Once down, recompile your LESS or SASS folder, and your good to go.