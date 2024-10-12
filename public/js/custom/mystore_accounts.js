// ------- DataTable Initialization ------- //
$(document).ready(function() {
   
    var dTable = $('#account-list-table').DataTable({
        "info": false,
        "lengthChange": false,
        "pageLength": 6,
        "ordering": false,
        "dom": "lrtip", // Remove the default search box
        language: {
            searchPlaceholder: "Search listing",
            search: "",
        }
    });

    // Custom search box functionality
    $('#myCustomSearchBox').on('keyup', function() {
        dTable.search($(this).val()).draw(); // Use the stored DataTable reference
    });
});
// ------- DataTable Initialization END ------- //



// ------ Function to equalize card heights ------ //
$(document).ready(function() {
    
    function equalizeCardHeights() {
        let maxHeight = 0;

        // Reset heights
        $('.card-account-list').css('height', 'auto');

        // Find the tallest card
        $('.card-account-list').each(function() {
            const cardHeight = $(this).outerHeight();
            if (cardHeight > maxHeight) {
                maxHeight = cardHeight;
            }
        });

        // Set all cards to the tallest height
        $('.card-account-list').css('height', maxHeight + 'px');
    }

    equalizeCardHeights();

    // Recalculate on window resize
    $(window).resize(equalizeCardHeights);
});

// ------ Function to equalize card heights END ------ //