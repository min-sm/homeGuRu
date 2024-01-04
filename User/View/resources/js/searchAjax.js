$(document).ready(function() {
    // Function to update filtered results
    function updateFilteredResults() {
        // Get selected values from select boxes
        var pOffer = $("#pOffer").val();
        var pType = $("#pType").val();
        var pUnit = $("#pUnit").val();
        var pRegion = $("#pRegion").val();
        var pTownship = $('#pTownship').val();
        var minimumPrice = $('#minimumPrice').val();
        var maximumPrice = $('#maximumPrice').val();
        var sortBy = getSelectedSortBy(); // Get the selected sort value
        var pCode = $('#pCode').val();

        // Send AJAX request to the PHP script
        $.ajax({
            type: "POST",
            url: "../../Controller/FilterAjax.php",
            data: {
                pOffer: pOffer,
                pType: pType,
                pUnit: pUnit,
                pRegion: pRegion,
                pTownship: pTownship,
                minimumPrice: minimumPrice,
                maximumPrice: maximumPrice,
                pCode: pCode,
                sortBy: sortBy // Include the sort value in the data
            },
            success: function(response) {
                // Update the filtered results div
                console.log("AJAX request successful!");
                console.log(".." + response);
                // Assuming your response is HTML content, update the container
                $("#filteredResultsContainer").html(response);
            },
            error: function(xhr, textStatus, errorThrown) {
                console.error('Error occurred: ' + textStatus, errorThrown);
            }
        });
    }

    // Attach change event handlers to select boxes and radio buttons
    $("#pCode, #pOffer, #pType, #pUnit, #pRegion, #pTownship, #minimumPrice, #maximumPrice, input[name='sort_by']").on("change", function() {
        updateFilteredResults();
    });

    function getSelectedSortBy() {
        // Get the selected radio button's value
        var selectedSortBy = $("input[name='sort_by']:checked").val();
        return selectedSortBy;
    }

    updateFilteredResults();
});