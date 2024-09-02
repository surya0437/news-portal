<!-- General JS Scripts -->
<script src="/assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="/assets/bundles/apexcharts/apexcharts.min.js"></script>
<script src="/assets/bundles/datatables/datatables.min.js"></script>
<script src="/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="/assets/js/page/datatables.js"></script>
<!-- Page Specific JS File -->
<script src="/assets/js/page/index.js"></script>
<!-- Template JS File -->
<script src="/assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="/assets/js/custom.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
{{-- Confirm Delete --}}
<script>
    $(document).on('click', 'a[data-confirm-delete]', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "This action cannot be undone!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm'
        }).then((result) => {
            if (result.isConfirmed) {
                var token = '{{ csrf_token() }}';
                $.ajax({
                    type: 'DELETE',
                    url: url,
                    data: {
                        '_token': token
                    },
                    success: function(data) {
                        window.location.replace(window.location.href)
                    },
                    error: function(data) {
                        console.warn(data);
                        window.location.replace(window.location.href)
                    }
                });
            }
        });
    });
</script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
