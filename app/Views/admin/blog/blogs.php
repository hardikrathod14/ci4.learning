<?php init_header($title); ?>
<div class="container my-5">
    <button type="button" class="btn btn-outline-secondary mb-3 float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Create Blog
    </button>
    <table class="table table-hover border">
        <thead>
            <tr class="table-secondary">
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody id="blogData">

        </tbody>
    </table>
</div>
<?php echo view('admin/blog/save_blog_modal'); ?>
<?php init_footer() ?>
<script type="text/javascript">
    $(function() {
        function showFloatingAlert(type, message) {
            // Create the alert container
            const alert = document.createElement('div');
            alert.className = `alert alert-${type} alert-dismissible fade show`;
            alert.style.position = 'fixed';
            alert.style.top = '20px';
            alert.style.right = '20px';
            alert.style.zIndex = '1050';
            alert.style.width = 'auto';
            alert.style.boxShadow = '0 4px 8px rgba(0,0,0,0.2)';

            // Set the alert content
            alert.innerHTML = `${message} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>`;

            // Append the alert to the body
            document.body.appendChild(alert);

            // Auto-remove the alert after 5 seconds
            setTimeout(() => {
                alert.classList.remove('show');
                alert.addEventListener('transitionend', () => {
                    alert.remove();
                });
            }, 5000);
        }


        function loadBlogs() {
            $.ajax({
                type: "get",
                url: "<?= site_url('admin/load_blogs') ?>",
                dataType: "html",
                success: function(response) {
                    $(document).find('#blogData').html(response)
                }
            });
        }
        loadBlogs();

        $(document).on('click', '.edt-blog', function(e) {
            e.preventDefault();
            $(document).find('input[name="id"]').val($(this).data('id'));
            $(document).find('#title').val($(this).data('title'));
            $(document).find('#description').val($(this).data('description'));
            $('#exampleModal').modal('show');
        });

        $(document).on('click', '#saveBlog', function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "<?= site_url('admin/blog/new') ?>",
                data: $('#blogForm').serialize(),
                dataType: "json",
                success: function(response) {
                    $('#exampleModal').modal('hide');
                    showFloatingAlert(response.type, response.message);
                }
            });
        });
    });
</script>