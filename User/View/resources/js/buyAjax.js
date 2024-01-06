$(document).ready(function () {
   

    function updateFilteredResults(page) {
        // Get selected values from select boxes
        var pType = $("#pType").val();
        var pUnit = $("#pUnit").val();
        var pRegion = $("#pRegion").val();
        var pTownship = $('#pTownship').val();
        var minimumPrice = $('#minimumPrice').val();
        var maximumPrice = $('#maximumPrice').val();
        var sortBy = getSelectedSortBy(); // Get the selected sort value

        // Send AJAX request to the PHP script
        $.ajax({
            type: "POST",
            url: "../../Controller/BuyFilterAjax.php",
            data: {
                pType: pType,
                pUnit: pUnit,
                pRegion: pRegion,
                pTownship: pTownship,
                minimumPrice: minimumPrice,
                maximumPrice: maximumPrice,
                sortBy: sortBy,
                page: page
            },
            success: function (response) {
                // Update the filtered results div
                $("#filteredResultsContainer").html(response);

            },
            
            error: function (xhr, textStatus, errorThrown) {
                console.error('Error occurred: ' + textStatus, errorThrown);
            }
        });
    }

    // Attach change event handlers to select boxes and radio buttons
    $("#pType, #pUnit, #pRegion, #pTownship, #minimumPrice, #maximumPrice, input[name='sort_by']").on("change", function () {
        updateFilteredResults(1); // Reset to the first page when filters change
    });

    // Attach click event handler to pagination links
    $("#filteredResultsContainer").on("click", ".pagination a", function (e) {
        e.preventDefault();

        var page = $(this).attr("href").split("=")[1];
        updateFilteredResults(page);
    });

    updateFilteredResults(1); // Load initial results on page load
    function getSelectedSortBy() {
        // Get the selected radio button's value
        var selectedSortBy = $("input[name='sort_by']:checked").val();
        return selectedSortBy;
    }

   
    
});

