<!--! ================================================================ !-->
    <!--! [Start] Tasks Details Offcanvas !-->
    <!--! ================================================================ !-->
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="portfolioProviderViewOffcanvas">
        <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
            <div class="d-flex align-items-center">
                <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Details Close"><i class="feather-arrow-left"></i></div>
                <span class="vr text-muted mx-4"></span>
                <a href="javascript:void(0);">
                    <h2 class="fs-14 fw-bold text-truncate-1-line">Portfolio show</h2>
                </a>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <div class="col-md-7"> 
                  <div class="row"> 
                     <h4> Add work</h4>
                        <div class="col-md-12">
                            <div class="form-group mb-4">
                                <label class="form-label">Status:</label>
                                <select class="form-control" data-select2-selector="status">
                                    <option value="primary" data-bg="bg-primary" selected>Inprogress</option>
                                    <option value="secondary" data-bg="bg-secondary">Pending</option>
                                    <option value="success" data-bg="bg-success">Completed</option>
                                    <option value="danger" data-bg="bg-danger">Rejected</option>
                                    <option value="warning" data-bg="bg-warning">Upcoming</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-4">
                                <label class="form-label">Subject <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>

                       <div class="col-md-12">
                            <div class="showcase form-group card">
                                <h2>Image or Video</h2>
                                <p>Display some images or videos showcasing your work.</p>
                              <div id="workIllustrationsContainer">
                                    <main class="container">
                                        <div class="no-content">No image or video added yet.</div>
                                        <div class="buttons">
                                            <button onclick="showInput('image')">Add Image</button>
                                            <button onclick="showInput('youtube')">Add YouTube Video</button>
                                        </div>
                                        <div id="inputContainer">
                                            <div id="imageInput" class="input-field" style="display: none;">
                                                <label for="imageFile">Upload Image:</label>
                                                <input type="file" id="imageFile" name="imageFile" accept="image/*">
                                            </div>
                                            <div id="youtubeInput" class="input-field" style="display: none;">
                                                <label for="youtubeUrl">YouTube Video URL:</label>
                                                <input type="text" id="youtubeUrl" name="youtubeUrl" placeholder="Enter YouTube video URL">
                                            </div>
                                        </div>
                                    </main>
                                    <div class="info">Recommended size: <b>2MB max</b>. Recommended resolution: <b>1200x900 px</b>. Please try to keep a landscape ratio of: <b>1.3:1</b>.</div>
                                </div>

                            </div>
                        </div>
                  </div>
                </div>
                <div class="col-md-5"> 
                  <div class="row"> 
                     <h4> Client</h4>
                        <div class="col-md-12">
                            <div class="form-group mb-4">
                                <label class="form-label">Status:</label>
                                <select class="form-control" data-select2-selector="status">
                                    <option value="primary" data-bg="bg-primary" selected>Inprogress</option>
                                    <option value="secondary" data-bg="bg-secondary">Pending</option>
                                    <option value="success" data-bg="bg-success">Completed</option>
                                    <option value="danger" data-bg="bg-danger">Rejected</option>
                                    <option value="warning" data-bg="bg-warning">Upcoming</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">

                        </div>
                  </div>
                </div>
            </div>        
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Tasks Details Offcanvas !-->
    <!--! ================================================================ !-->


    <style>

/* Showcase Styles */
.showcase {
    padding: 2rem;
    text-align: center;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
}

.showcase h2 {
    font-weight: bold;
    margin-bottom: 1rem;
}

.showcase p {
    color: #666;
    margin-bottom: 2rem;
}

.no-content {
    color: #999;
    margin-bottom: 1rem;
}




.input-container {
    position: relative;
    margin-top: 1rem;
    overflow: hidden;
}

.input-field {
    display: none;
    margin-top: 1rem;
    transition: opacity 0.5s ease, height 0.5s ease;
}

.input-field.show {
    display: block;
    opacity: 1;
}

.input-field.hide {
    opacity: 0;
    height: 0;
    padding: 0;
    margin: 0;
}

.input-field label {
    display: block;
    margin-bottom: 0.5rem;
}

.input-field input {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.info {
    color: #666;
    margin-top: 1rem;
}


    </style>

    <script> 
function showInput(type) {
    // Hide all input fields initially
    document.getElementById('imageInput').style.display = 'none';
    document.getElementById('youtubeInput').style.display = 'none';
    
    // Show the selected input field
    if (type === 'image') {
        document.getElementById('imageInput').style.display = 'none';
        document.getElementById('imageFile').click();  // Automatically open file dialog
    } else if (type === 'youtube') {
        document.getElementById('youtubeInput').style.display = 'block';
    }
}




    </script>