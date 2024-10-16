<!--! ================================================================ !-->
    <!--! [Start] Tasks Details Offcanvas !-->
    <!--! ================================================================ !-->
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="portfolioProviderOffcanvas">
        <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
            <div class="d-flex align-items-center">
                <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Details Close"><i class="feather-arrow-left"></i></div>
                <span class="vr text-muted mx-4"></span>
                <a href="javascript:void(0);">
                    <h2 class="fs-14 fw-bold text-truncate-1-line">Portfolio</h2>
                </a>
            </div>
        </div>
        <div class="offcanvas-body">
            <form action="{{ route('portfolios.store')}}" enctype='multipart/form-data' method="POST">
            @csrf
            <div class="row">
                <div class="col-md-7"> 
                  <div class="row"> 
                     <h4> Add work</h4>
                        <div class="col-md-12 mt-3">
                           <h5> Work's title</h5>
                            <div class="mb-4">
                                <label class="form-label">Give a concise but meaningful title to your work. <span class="text-danger">*</span></label>
                                <input type="text" name="work_title" class="form-control" placeholder="Enter a title for your work here...">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-4">
                                <div class="showcase form-group card">
                                    <h5>Image or Video</h5>
                                    <p>Display some images or videos showcasing your work.</p>
                                    <div id="workIllustrationsContainer">
                                        <main class="container">
                                            <div class="no-content">No image or video added yet.</div>
                                            <div class="buttons row mt-3">
                                                <div class="col">
                                                    <a href="javascript:void(0);" id="imageFileBtn" onclick="showInput('image')" class="btn btn-primary w-100">
                                                        <i class="feather-upload me-2"></i>
                                                        <span>Upload Image</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="javascript:void(0);" id="youtubeUrlBtn" onclick="showInput('youtube')" class="btn btn-outline-primary w-100">
                                                        <i class="fa-solid fa-link me-2"></i>
                                                        <span>YouTube Video</span>
                                                    </a>
                                                </div>
                                            </div>
                    
                                            <div id="inputContainer" class="mt-3">
                                                <div id="imageInput" class="input-field" style="display: none;">
                                                    <label for="imageFile">Upload Image:</label>
                                                    <input type="file" id="imageFile" name="multi_image_video[]" accept="image/*" class="form-control @error('multi_image_video.*') is-invalid @enderror">
                                                    @error('multi_image_video.*')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                    
                                                <div id="youtubeInput" class="input-field" style="display: none;">
                                                    <label for="youtubeUrl">Add your YouTube Video URL:</label>
                                                    <input type="text" id="youtubeUrl" name="youtube_url" placeholder="Enter YouTube video URL" class="form-control @error('youtube_url') is-invalid @enderror">
                                                    @error('youtube_url')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </main>
                    
                                        <div class="text-dark mt-3" id="imageInputInfo" style="display: none;">
                                            Recommended size: <b>2MB max</b>. Recommended resolution: <b>1200x900 px</b>. Please try to keep a landscape ratio of: <b>1.3:1</b>.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <h5>Expertise</h5>
                            <div class="form-group mb-4">
                                <label class="form-label">Indicate the fields of expertise requested for the work you delivered.</label>
                                <select class="form-control" id="serviceSelect" name="service_sub_category_id">
                                    <option value="">Select a service...</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name_en }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-12 mt-3">
                            <h5>Skills <span>(optional)</span></h5>
                            <div class="mb-4">
                                <label class="form-label">Indicate the skills or competences needed.</label>
                                <select class="form-control" id="skillsSelect" name="skills[]" multiple></select>
                            </div>
                        </div>
                        
                        <script>
                            document.getElementById('serviceSelect').addEventListener('change', function() {
                                const serviceId = this.value;
                                
                                // If no service is selected, clear the skills dropdown
                                if (!serviceId) {
                                    document.getElementById('skillsSelect').innerHTML = '';
                                    return;
                                }
                        
                                // Make an AJAX request to fetch the skills based on the selected service
                                fetch(`/api/services/${serviceId}/skills`)
                                    .then(response => response.json())
                                    .then(data => {
                                        const skillsSelect = document.getElementById('skillsSelect');
                                        skillsSelect.innerHTML = ''; // Clear current options
                                        
                                        data.forEach(skill => {
                                            const option = document.createElement('option');
                                            option.value = skill.id;
                                            option.text = skill.name; // Assuming 'name' is the column for skill name
                                            skillsSelect.appendChild(option);
                                        });
                                    })
                                    .catch(error => {
                                        console.error('Error fetching skills:', error);
                                    });
                            });
                        </script>
                        
                        <div class="col-md-12 mt-3">
                           <h5> Start date </h5>
                            <div class="mb-4">
                                <input type="date" class="form-control" name="start_date" placeholder="Enter a budjet...">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                           <h5> End date</h5>
                            <div class="mb-4">
                                <input type="date" class="form-control" name="end_date" placeholder="Enter a budjet...">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                           <h5> Budget <span> (optional) </span></h5>
                            <div class="mb-4">
                                <label class="form-label">Indicate what was the total budget allocated to this work delivery.<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="budget" placeholder="Enter a budjet...">
                                <label class="form-label">Confidential: This information won’t be visible publicly but will help us send you more accurate and relevant opportunities.<span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="col-md-12">
                           <div class="my-3"> 
                                    <h5> Description <span> (optional) </span></h5>
                                    <label class="form-label">Describe the details of your collaboration with the client on the work delivered.</label>
                            </div>
                           <div class="mb-4">
                                <div class="form-group">
                                    <h6> Introduction</h6>
                                    <label class="form-label">As an introduction, briefly describe the work delivered in a few sentences.</label>
                                    <textarea class="form-control" id="exampleTextarea" name="introduction" rows="5" placeholder="Bu yerga matn kiriting..."></textarea>
                                </div>
                             </div>
                        </div>
                        <div class="col-md-12">    
                           <div class="mb-4">
                                <div class="form-group">
                                    <h6> Challenges </h6>
                                    <label class="form-label">As an introduction, briefly describe the work delivered in a few sentences.</label>
                                    <textarea class="form-control" id="exampleTextarea" rows="5" name="challenges" placeholder="Bu yerga matn kiriting..."></textarea>
                                </div>
                             </div>
                        </div>
                        <div class="col-md-12">    
                           <div class="mb-4">
                                <div class="form-group">
                                    <h6> Solution </h6>
                                    <label class="form-label">As an introduction, briefly describe the work delivered in a few sentences.</label>
                                    <textarea class="form-control" id="exampleTextarea" rows="5" name="solution" placeholder="Bu yerga matn kiriting..."></textarea>
                                </div>
                             </div>
                        </div>
                        <div class="col-md-12">    
                           <div class="mb-4">
                                <div class="form-group">
                                    <h6> Impact</h6>
                                    <label class="form-label">As an introduction, briefly describe the work delivered in a few sentences.</label>
                                    <textarea class="form-control" id="exampleTextarea" name="impact" rows="5" placeholder="Bu yerga matn kiriting..."></textarea>
                                </div>
                             </div>
                        </div>
                        <div class="col-md-12 mt-3">
                           <h5> Reference link <span> (optional) </span></h5>
                            <div class="mb-4">
                                <label class="form-label">Provide a link to the result of your collaboration (e.g. A link to the website, the video, the event).</label>
                                <input type="text" class="form-control" name="source_link" placeholder="Enter a link for you work...">
                            </div>
                        </div>

                  </div>
                </div>
                <div class="col-md-5 sticky-column "> 
                  <div class="row"> 
                     <h4> Client</h4>
                        <div class="col-md-12 mt-3">
                           <h6> Company name</h6>
                            <div class="mb-4">
                                <input type="text" class="form-control" name="company_name" placeholder="Enter a title for your work here...">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                           <h6> Location</h6>
                            <div class="mb-4">
                                <input type="text" class="form-control" name="company_location" placeholder="Enter a title for your work here...">
                            </div>
                        </div>
                        <div class="col-md-12">
                         <h6> Sector</h6>
                            <div class="form-group mb-4">
                                <select class="form-control" data-select2-selector="status" name="sector_id">
                                    @foreach ($sectors as $sector)
                                        <option value="{{ $sector->id }}" data-bg="bg-primary" selected>{{ $sector->name_uz }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                         <h6> Geographic scope <span> (optional) </span> </h6>
                            <div class="form-group mb-4">
                                <select class="form-control" data-select2-selector="status" name="geographic_scope">
                                    <option value="Local" data-bg="bg-primary" selected>Local</option>
                                    <option value="Regional" data-bg="bg-secondary">Regional</option>
                                    <option value="National" data-bg="bg-success">National</option>
                                    <option value="International" data-bg="bg-danger">International</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                         <h6> Audience <span> (optional) </span> </h6>
                            <div class="form-group mb-4">
                                <select class="form-control" data-select2-selector="status" name="audience">
                                    <option value="B2B" data-bg="bg-primary" selected>B2B</option>
                                    <option value="B2C" data-bg="bg-secondary">B2C</option>
                                    <option value="B2B & B2C" data-bg="bg-success">B2B & B2C</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                         <h6> Ask this client for a review <span> (optional) </span> </h6>
                             <div class="mb-4">
                                <input type="text" class="form-control" placeholder="Enter a title for your work here...">
                            </div>
                            <label> Condidential: The email of your client is confidential and will not be stored or shown anywhere.</label>
                        </div>
                  </div>
                </div>
                <input type="hidden" name="provider_id" value="{{ auth()->user()->id }}">
                <button type="submit">Submit</button>
            </div>    
            </form>    
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Tasks Details Offcanvas !-->
    <!--! ================================================================ !-->


    <script> 
        function showInput(type) {
            // Barcha input maydonlarini va qo'shimcha ma'lumotlarni dastlab yashirish
            document.getElementById('imageInput').style.display = 'none';
            document.getElementById('youtubeInput').style.display = 'none';
            document.getElementById('imageInputInfo').style.display = 'none';

            // Tanlangan input maydoni va tugma dizaynini ko'rsatish
            if (type === 'image') {
                document.getElementById('imageInput').style.display = 'block';
                document.getElementById('imageInputInfo').style.display = 'block';
                document.getElementById('imageFile').click();  // Fayl yuklash dialogini avtomatik ochish
            } else if (type === 'youtube') {
                document.getElementById('youtubeInput').style.display = 'block';
            }
        }


    </script>

    <style>
        .sticky-column {
            position: -webkit-sticky; /* Safari uchun */
            position: sticky;
            top: 0; /* Ekran yuqorisidan qanchalik uzoqda bo'lishini belgilaydi */
            /* Agar kerak bo'lsa, boshqa uslublarni qo'shing */
            height: 100vh; /* Bo'lim balandligini ekran balandligi bilan moslashtiradi */
            overflow: auto; /* Agar bo'lim juda uzun bo'lsa, scroll bo'lishini ta'minlaydi */
        }
    </style>