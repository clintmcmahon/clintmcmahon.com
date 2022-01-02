<?php

$PageTitle = "Filter DataTable By Column Value With Custom Dropdown Menu";

function customPageHeader()
{ ?>
    <!--Arbitrary HTML Tags-->
<?php }

include_once('../../header.php');
?>
<script>
    hljs.highlightAll();
</script>
<div class="main-wrapper">

    <article class="blog-post px-3 py-5 p-md-5">
        <div class="container single-col-max-width">
            <header class="blog-post-header">
                <h2 class="title mb-2">Filter DataTable By Column Value With Custom Dropdown Menu</h2>
                <div class="meta mb-3"><span class="date">Published February 17, 2021 </span></div>
            </header>

            <div class="blog-post-body">
                <figure class="blog-banner">
                    <img class="img-fluid" src="/assets/images/blog/filter.jpg" alt="image">
                </figure>
                <p>In addition to the default search box in DataTables, it’s nice to have the ability to filter by a specific DataTable column. This example shows how to use a custom drop-down menu to filter a <a href="https://datatables.net/" target="_blank" rel="noopener">DataTable</a> by column value. I’m going to create a drop-down menu that displays the unique list of strings from a column called Category and when the user selects a category from the dropdown-menu, the datatable will be rendered with only records with the Category from the selected value.</p>
                <p><a href="https://clintmcmahon.github.io/add-filter-datatable/" target="_blank" rel="noopener">View full working example.</a><br>
                    <a href="https://github.com/clintmcmahon/add-filter-datatable" target="_blank" rel="noopener">Download full repo.</a>
                </p>
                <p>
                    <img class="w-100" src="/assets/images/blog/filterdatatable.png" alt="Filtered DataTable" />
                </p>
                <h3 class="mt-5 mb-3">HTML</h3>
                <p>There are two main parts to the HTML, the category filter drop-down menu and the datatable. The values in the category filter will be the values that are to be filtered from the table when the user selects an item.</p>

                <pre>
					    <code class="language-html">
&lt;!-- Create the dropdown filter --&gt;
   &lt;div class="category-filter"&gt;
      &lt;select id="categoryFilter" class="form-control"&gt;
        &lt;option value=""&gt;Show All&lt;/option&gt;
        &lt;option value="Classical"&gt;Classical&lt;/option&gt;
        &lt;option value="Hip Hop"&gt;Hip Hop&lt;/option&gt;
        &lt;option value="Jazz"&gt;Jazz&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;
    &lt;!-- Set up the datatable --&gt;
    &lt;table class="table" id="filterTable"&gt;
      &lt;thead&gt;
        &lt;tr&gt;
          &lt;th scope="col"&gt;Artist&lt;/th&gt;
          &lt;th scope="col"&gt;Category&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Public Enemy&lt;/td&gt;
          &lt;td scope="col"&gt;Hip Hop&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Chet Baker&lt;/td&gt;
          &lt;td scope="col"&gt;Jazz&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Billie Holiday&lt;/td&gt;
          &lt;td scope="col"&gt;Jazz&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Vivaldi&lt;/td&gt;
          &lt;td scope="col"&gt;Classical&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Jurrasic 5&lt;/td&gt;
          &lt;td scope="col"&gt;Hip Hop&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Onyx&lt;/td&gt;
          &lt;td scope="col"&gt;Hip Hop&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Tchaikovsky&lt;/td&gt;
          &lt;td scope="col"&gt;Classical&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Oscar Peterson&lt;/td&gt;
          &lt;td scope="col"&gt;Jazz&lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;
					    </code>
				    </pre>
                <h3>JavaScript</h3>
                <p>
                    The JavaScript part relies on jQuery but can be modified to use vanilla javascript if you don’t have jQuery as part of the project. The code is commented below to give you an idea of what’s happening.
                <pre>
        <code>

    $("document").ready(function () {
      $("#filterTable").dataTable({
        "searching": true
      });
      //Get a reference to the new datatable
      var table = $('#filterTable').DataTable();
      //Take the category filter drop down and append it to the datatables_filter div. 
      //You can use this same idea to move the filter anywhere withing the datatable that you want.
      $("#filterTable_filter.dataTables_filter").append($("#categoryFilter"));
      
      //Get the column index for the Category column to be used in the method below ($.fn.dataTable.ext.search.push)
      //This tells datatables what column to filter on when a user selects a value from the dropdown.
      //It's important that the text used here (Category) is the same for used in the header of the column to filter
      var categoryIndex = 0;
      $("#filterTable th").each(function (i) {
        if ($($(this)).html() == "Category") {
          categoryIndex = i; return false;
        }
      });
      //Use the built in datatables API to filter the existing rows by the Category column
      $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
          var selectedItem = $('#categoryFilter').val()
          var category = data[categoryIndex];
          if (selectedItem === "" || category.includes(selectedItem)) {
            return true;
          }
          return false;
        }
      );
      //Set the change event for the Category Filter dropdown to redraw the datatable each time
      //a user selects a new filter.
      $("#categoryFilter").change(function (e) {
        table.draw();
      });
      table.draw();
    });

        </code>
    </pre>
                </p>
                <h3>Full HTML & JavaScript</h3>
                <p>
                    Here is the full HTML with Javascript and a bit of CSS included.
                </p>
                <pre>
                    <code>
                    &lt;!doctype html&gt;

&lt;html lang="en"&gt;

&lt;head&gt;
  &lt;meta charset="utf-8"&gt;

  &lt;title&gt;Add select drop-down filter to DataTable&lt;/title&gt;
  &lt;meta name="description" content=""&gt;
  &lt;link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" /&gt;
  &lt;link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" /&gt;
&lt;style&gt;
  select.form-control{
    display: inline;
    width: 200px;
    margin-left: 25px;
  }
&lt;/style&gt;
&lt;/head&gt;

&lt;body&gt;
  &lt;div class="container mt-4"&gt;
    &lt;!-- Create the drop down filter --&gt;
    &lt;div class="category-filter"&gt;
      &lt;select id="categoryFilter" class="form-control"&gt;
        &lt;option value=""&gt;Show All&lt;/option&gt;
        &lt;option value="Classical"&gt;Classical&lt;/option&gt;
        &lt;option value="Hip Hop"&gt;Hip Hop&lt;/option&gt;
        &lt;option value="Jazz"&gt;Jazz&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;

    &lt;!-- Set up the datatable --&gt;
    &lt;table class="table" id="filterTable"&gt;
      &lt;thead&gt;
        &lt;tr&gt;
          &lt;th scope="col"&gt;Artist&lt;/th&gt;
          &lt;th scope="col"&gt;Category&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Public Enemy&lt;/td&gt;
          &lt;td scope="col"&gt;Hip Hop&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Chet Baker&lt;/td&gt;
          &lt;td scope="col"&gt;Jazz&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Billie Holiday&lt;/td&gt;
          &lt;td scope="col"&gt;Jazz&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Vivaldi&lt;/td&gt;
          &lt;td scope="col"&gt;Classical&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Jurrasic 5&lt;/td&gt;
          &lt;td scope="col"&gt;Hip Hop&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Onyx&lt;/td&gt;
          &lt;td scope="col"&gt;Hip Hop&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Tchaikovsky&lt;/td&gt;
          &lt;td scope="col"&gt;Classical&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td scope="col"&gt;Oscar Peterson&lt;/td&gt;
          &lt;td scope="col"&gt;Jazz&lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;

  &lt;/div&gt;

  &lt;script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"&gt;&lt;/script&gt;

  &lt;script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"&gt;&lt;/script&gt;

  &lt;script&gt;
    $("document").ready(function () {

      $("#filterTable").dataTable({
        "searching": true
      });

      //Get a reference to the new datatable
      var table = $('#filterTable').DataTable();

      //Take the category filter drop down and append it to the datatables_filter div. 
      //You can use this same idea to move the filter anywhere withing the datatable that you want.
      $("#filterTable_filter.dataTables_filter").append($("#categoryFilter"));
      
      //Get the column index for the Category column to be used in the method below ($.fn.dataTable.ext.search.push)
      //This tells datatables what column to filter on when a user selects a value from the dropdown.
      //It's important that the text used here (Category) is the same for used in the header of the column to filter
      var categoryIndex = 0;
      $("#filterTable th").each(function (i) {
        if ($($(this)).html() == "Category") {
          categoryIndex = i; return false;
        }
      });

      //Use the built in datatables API to filter the existing rows by the Category column
      $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
          var selectedItem = $('#categoryFilter').val()
          var category = data[categoryIndex];
          if (selectedItem === "" || category.includes(selectedItem)) {
            return true;
          }
          return false;
        }
      );

      //Set the change event for the Category Filter dropdown to redraw the datatable each time
      //a user selects a new filter.
      $("#categoryFilter").change(function (e) {
        table.draw();
      });

      table.draw();
    });
  &lt;/script&gt;
&lt;/body&gt;

&lt;/html&gt;
                    </code>
                </pre>
                <div class="blog-comments-section">
					<div id="disqus_thread"></div>
					<script>
					    /**
					     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT 
					     *  THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR 
					     *  PLATFORM OR CMS.
					     *  
					     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: 
					     *  https://disqus.com/admin/universalcode/#configuration-variables
					     */
					    /*
					    var disqus_config = function () {
					        // Replace PAGE_URL with your page's canonical URL variable
					        this.page.url = PAGE_URL;  
					        
					        // Replace PAGE_IDENTIFIER with your page's unique identifier variable
					        this.page.identifier = PAGE_IDENTIFIER; 
					    };
					    */
					    
					    (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
					        var d = document, s = d.createElement('script');
					        
					        // IMPORTANT: Replace 3wmthemes with your forum shortname!
					        s.src = 'https://3wmthemes.disqus.com/embed.js';
					        
					        s.setAttribute('data-timestamp', +new Date());
					        (d.head || d.body).appendChild(s);
					    })();
					</script>
					<noscript>
					    Please enable JavaScript to view the 
					    <a href="https://disqus.com/?ref_noscript" rel="nofollow">
					        comments powered by Disqus.
					    </a>
					</noscript>
				</div><!--//blog-comments-section-->
            </div>
            <!--//container-->
    </article>

    <?php
    include_once("../footer.php");
    ?>
</div>
<!--//main-wrapper-->