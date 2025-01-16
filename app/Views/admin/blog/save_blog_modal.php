<div class="modal" tabindex="-1" id="exampleModal">
    <div class="modal-dialog">
        <?= form_open('', ['id' => 'blogForm'], ['id' => '']) ?>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create New Blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="mb-3">
                        <label for="title" class="form-label">Blog Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter blog title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Blog Description</label>
                        <textarea name="description" id="description" class="form-control" rows="5" placeholder="Write your blog description here..." required></textarea>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-secondary float-end" id="saveBlog">Save Blog</button>
            </div>
        </div>
        <?= form_close() ?>
    </div>
</div>