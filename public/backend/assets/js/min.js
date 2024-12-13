<script>
    $(document).ready(function() {
        $('#title').change(function() {
            var selectedTitle = $(this).val();
            // Make an AJAX request to fetch QuantityIn from controller
            $.ajax({
                url: "{{ route('fetch.quantity') }}",
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    Title: selectedTitle
                },
                success: function(response) {
                    $('#QuantityIn').val(response.quantity);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Error fetching quantity.');
                }
            });
        });
    });
</script>
