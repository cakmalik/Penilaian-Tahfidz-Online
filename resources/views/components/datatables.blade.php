<div>
    <div>
        @push('head')
            <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
            <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        @endpush
        @push('foot')
            <script>
                $(document).ready(function() {
                    $('#datatable').DataTable({
                        // serverSide: true,
                        "ordering": false
                    });
                });
            </script>
        @endpush
    </div>

</div>
