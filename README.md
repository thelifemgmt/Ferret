Ferret
======

The Fast and Simple, Mobile-first Responsive Framework for Rapid Development
---

Ferret Framework is a fast and simple, mobile-first framework for rapid development. Ferret is 100% customizable, fully scalable, and supports both LESS and Sass. Ferret also utilizes a custom grid that allows you to define how many columns make up the rows of the grid, giving you complete control of your project. You can have a 1 column grid, or a 60 column grid... it's totally up to you! And since Ferret is percentage based, you can even have an odd amount of grid columns such as 13 columns, 19 columns, or 31 columns. 

Ferret works in all modern browsers, and even not so modern browsers like ie7 and ie8. Need support in one or both of those browsers? Just define it in the project-settings.scss file and BOOM... full ie support!

* Fully Responsive
* 100% Customizable
* Built in Sass (and older LESS support)
* Unlimited Grid Columns
* Browser Support back to ie7
* Built Mobile-First


Updated (5/23/14)
---

* Better ie7-8 support using optional settings variables (Sass only)
* The LESS codebase will continue to live in this repo, but will no longer be supported. Use at your own risk
* IE6 support is 100% removed


How to Use
---

<b>Ferret Setup</b>

Ferret is built in both LESS and Sass, giving you the option to choose what you prefer. Before using Ferret, make sure you have a LESS or Sass compiler setup and watching the project. If you don't have a compiler, I suggest you try <a href="http://incident57.com/codekit/" target="_blank">CodeKit</a>.

When setting up Ferret for your project, first start with the <i>project-settings</i> file in the <i>less/project</i> or <i>Sass/project</i> folder. Inside is all the project settings and variables to control the look and feel of the default settings. You can set your colors, margins, fonts, typography, and many other things all in that file. 

You can also control the grid settings inside this file. Default setting is 16 boxes (columns) with 20px gutters. You can have as little or as many boxes as you want. You want 71 boxes... no problem! Most common box counts are 8, 12, 16, or 24.

<b>Update:</b> I am no longer maintaining the LESS codebase. If you are new to Ferret, then I would suggest going with Sass.



<b>Basic Grid Use</b>

The grid is very simple to use. Start with a row, and insert your 'boxes' (default name) inside.

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



<b>Gutters</b>	
You can change the gutters between boxes on a row. You can have no gutters, or larger gutters.

No gutters:

	<div class="row no-gutters">
		<div class="box-8">
			YOUR CONTENT
		</div><!--/.box-8-->
		
		<div class="box-8">
			YOUR CONTENT
		</div><!--/.box-8-->
	</div><!--/.row-->
	
Large gutters:

	<div class="row large-gutters">
		<div class="box-8">
			YOUR CONTENT
		</div><!--/.box-8-->
		
		<div class="box-8">
			YOUR CONTENT
		</div><!--/.box-8-->
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

By default, all these components are included and compiled into the your project CSS. If you know your project won't be needing a certain component, or you plan to use your own markup for a particular component, it is very easy to remove the unnecessary code from Ferret. In the <i>ferret.less</i> or <i>ferret.scss</i> file inside the <i>less/</i> or <i>Sass/</i> folder you will find all included components. All you need to do is remove (or comment out) the related imported files. Once that is done, recompile your LESS or Sass ferret file, and your good to go.