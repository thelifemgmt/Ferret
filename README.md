Ferret
======

The Fast and Simple Responsive Framework for Rapid Development
---

The Ferret Framework is a fast and simple grid-based framework for rapid development. Ferret is 100% customizable, fully scalable, and built with LESS. Ferret also utilizes a custom grid that allows you to define how many columns make up the rows of the grid, giving you complete control of your project. You can have a 1 column grid, all the way up to a 24 column grid. And since Ferret is percentage based, you can even have an odd amount of grid columns such as 19 columns or 13 columns. 

Ferret works in all modern browsers, and even not so modern browsers like IE 8. Need support in IE 6 or 7? All you have to do is include the ie6-7 LESS stylesheet and boom... full IE support!

* Fully Responsive
* 100% Customizable
* Built with LESS CSS
* 1-24 Grid Columns
* Full Browser Support

Still in Development

Updated (9/12/13)
---

* Updated grid
* Updated Media Queries for mobile first design
* Relocated all component LESS files and component specific variables
* Other minor updates

Full recode in the works

How to Use
---

<b>Ferret Setup</b>

Ferret is built using LESS CSS. Before using Ferret, make sure you have a LESS compiler setup and watching the project.

When setting up Ferret for your project, first start with the <i>project_settings.less</i> file in the <i>less/project</i> folder. Inside is all the project settings and variables to control the look and feel of the default settings. You can set your colors, margins, fonts, typography, and many other things all in that file. 

You can also control the grid settings inside this file. Default setting is 16 boxes (columns) with 20px gutters. You can change your box count to any amount between 1 and 24. Most common box counts are 12, 16, or 24 of course, but its totally up to you.



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

By default, all these components are included and compiled into the your project CSS. If you know your project won't be needing a certain component, or you plan to use your own markup for a particular component, it is very easy to remove the unnecessary code from Ferret. In the <i>ferret.less</i> file inside the <i>less/</i> folder you will find all included components. All you need to do is remove (or comment out) the related imported files. Once down, recompile your LESS folder, and your good to go.