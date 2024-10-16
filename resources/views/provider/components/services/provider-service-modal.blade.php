<style>
    .select2-selection__rendered .select2-selection__choice {
        width: max-content;
    }
</style>


<!--! ================================================================ !-->
<!--! [Start] Tasks Details Offcanvas !-->
<!--! ================================================================ !-->
<form action="{{ route('service.store') }}" method="post">
    @csrf
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="serviceProviderOffcanvas">
        <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
            <div class="d-flex align-items-center">
                <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas"
                     data-bs-toggle="tooltip" data-bs-trigger="hover" title="Close">
                    <i class="feather-arrow-left"></i>
                </div>
                <span class="vr text-muted mx-4"></span>
                <h2 class="fs-14 fw-bold text-truncate-1-line">Create Service</h2>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <!-- Service Type Selection -->
                <div class="col-sm-12 col-lg-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Service Type:</label>
                        
                        <select name="service_sub_category_id" id="service-type" class="form-control select2">
                            <option value="">Select a service...</option>
                            @foreach($serviceTypes as $service)
                                <option value="{{ $service->id }}">{{ $service->name_en }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Skills:</label>

                        <select name="skills[]" id="skills-list" class="form-select form-control max-select" data-select2-selector="tag" multiple>
                            <!-- Skills will be dynamically loaded here -->
                        </select>
                    </div>
                </div>
                <!-- Starting Price -->
                <div class="col-sm-12 col-lg-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Starting Price:</label>
                        <div class="row mt-2">
                            <div class="col d-flex align-items-center">
                                <label for="price-1000" class="d-flex align-items-center">
                                    <input type="radio" id="price-1000" name="price" value="1000">
                                    <span class="ms-2">€1000</span>
                                </label>
                            </div>
                            <div class="col d-flex align-items-center">
                                <label for="price-2000" class="d-flex align-items-center">
                                    <input type="radio" id="price-2000" name="price" value="2000">
                                    <span class="ms-2">€2000</span>
                                </label>
                            </div>
                            <div class="col d-flex align-items-center">
                                <label for="price-5000" class="d-flex align-items-center">
                                    <input type="radio" id="price-5000" name="price" value="5000">
                                    <span class="ms-2">€5000</span>
                                </label>
                            </div>
                            <div class="col d-flex align-items-center">
                                <label for="price-10000" class="d-flex align-items-center">
                                    <input type="radio" id="price-10000" name="price" value="10000">
                                    <span class="ms-2">€10000</span>
                                </label>
                            </div>
                            <div class="col d-flex align-items-center">
                                <label for="custom-price" class="d-flex align-items-center">
                                    <input type="radio" id="custom-price" name="price" value="custom">
                                    <input type="number" class="ms-2 p-1" name="custom_price" id="custom-price-input" placeholder="€20000" disabled />
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <script>
                    // Disable custom price input by default
                    const customPriceInput = document.getElementById('custom-price-input');
                    
                    // Handle enabling and disabling of custom price input
                    document.querySelectorAll('input[name="price"]').forEach((radio) => {
                        radio.addEventListener('change', function() {
                            if (this.value === 'custom') {
                                customPriceInput.disabled = false;
                            } else {
                                customPriceInput.disabled = true;
                                customPriceInput.value = ''; // Reset custom input if another option is selected
                            }
                        });
                    });
                </script>
                

                <!-- Description -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Description (optional):</label>
                        <textarea class="form-control" name="description" style="height: 18em;"></textarea>
                    </div>
                </div>
            </div>
            <input type="hidden" value="{{ auth()->user()->id }}" name="provider_id">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <button class="btn btn-primary btn-submit" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function () {
    // Populate Service Type options
    const serviceTypeSelect = $('#service-type');

    $.ajax({
        url: '/api/service-lists',
        method: 'GET',
        success: function (data) {
            console.log('Service Lists Data:', data); // Check what is being returned
            if (data.status === 'success' && Array.isArray(data.data)) {
                data.data.forEach(function (service) {
                    const option = $('<option class="text-black"></option>').val(service.id).text(service.name_en);
                    serviceTypeSelect.append(option);
                }); 
            } else {
                console.error('Unexpected data format:', data);
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.error('Error fetching service types:', textStatus, errorThrown);
        }
    });

    // Populate Skills based on selected Service Type
    $('#service-type').on('change', function () {
        const selectedServiceId = $(this).val();

        $.ajax({
            url: '/api/skills',
            method: 'GET',
            success: function (data) {
                console.log('Skills Data:', data); // Check what is being returned
                const skillsList = $('#skills-list');
                skillsList.empty(); // Clear existing options

                if (Array.isArray(data)) {
                    const filteredSkills = data.filter(skill => parseInt(skill.service_id) === parseInt(selectedServiceId));
                    console.log(filteredSkills);
                    filteredSkills.forEach(function (skill) {
                        console.log(skill.name_en);
                        const option = $('<option></option>').val(skill.id).text(skill.name_en);
                        skillsList.append(option);
                    });
                } else {
                    console.error('Unexpected data format:', data);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Error fetching skills:', textStatus, errorThrown);
            }
        });
    });
});

</script>
<script>
    document.getElementById('service-type').addEventListener('change', function() {
        const serviceId = this.value;

        // Clear the skills list
        const skillsList = document.getElementById('skills-list');
        skillsList.innerHTML = ''; // Clear current options

        // If no service is selected, return early
        if (!serviceId) {
            return;
        }

        // Fetch skills based on the selected service
        fetch(`/api/services/${serviceId}/skills`)
            .then(response => response.json())
            .then(data => {
                // Check if data is an array
                if (Array.isArray(data)) {
                    data.forEach(skill => {
                        const option = document.createElement('option');
                        option.value = skill.id;
                        option.textContent = skill.name;
                        skillsList.appendChild(option);
                    });
                } else {
                    console.error('Unexpected data format:', data);
                }
            })
            .catch(error => {
                console.error('Error fetching skills:', error);
            });
    });
</script>



<!--! ================================================================ !-->
<!--! [End] Tasks Details Offcanvas !-->
<!--! ================================================================ !-->
