$(document).ready(function() {
    $('#searchInput').on('input', function() {
        let searchTerm = $(this).val().toLowerCase();

        $('.herb-item').each(function() {
            let herbName = $(this).find('.herb-desc').text().toLowerCase();
            if (herbName.includes(searchTerm)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});