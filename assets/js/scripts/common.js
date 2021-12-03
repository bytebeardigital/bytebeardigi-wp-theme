jQuery(function($) {
    var $grid = $("#projectGrid").isotope({
        itemSelector: "a",
        layoutMode: "fitRows"
      });
      
      $("#filters").on("click", "a", function() {
        var filterValue = $(this).attr("data-filter");
        // use filterFn if matches value
        $grid.isotope({ filter: filterValue });
      });
      
});