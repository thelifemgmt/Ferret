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

<b>Grid</b>

The grid is very simple to use. Start with a row, and insert your boxes (or columns) inside.

<div class="row">
	<div class="box-8">
		YOUR CONTENT
	</div><!--/.box-8-->
	
	<div class="box-8">
		YOUR CONTENT
	</div><!--/.box-8-->
</div><!--/.row-->

<b>Nested Row</b>

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