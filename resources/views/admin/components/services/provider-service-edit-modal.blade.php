<style>
    .select2-selection__rendered .select2-selection__choice {
        width: max-content;
    }
</style>

@foreach($services as $service)
<!-- Modal for Editing Service -->
<div class="offcanvas offcanvas-end w-50" id="editServiceModal{{ $service->id }}" tabindex="-1">
    <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
        <div class="d-flex align-items-center">
            <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Close">
                <i class="feather-arrow-left"></i>
            </div>
            <span class="vr text-muted mx-4"></span>
            <h2 class="fs-14 fw-bold text-truncate-1-line">Edit Service</h2>
        </div>
    </div>
    <div class="offcanvas-body">
        <form action="{{ route('providers.service.update', $service->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="row">
                <!-- Service Type Selection -->
                <div class="col-sm-12 col-lg-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Service Type:</label>
                        <select name="service-type" id="edit-service-type-{{ $service->id }}" class="form-control">
                            @foreach($serviceTypes as $serviceType)
                                <option class="text-black"  value="{{ $serviceType->id }}" {{ $serviceType->id == $service->id ? 'selected' : '' }}>
                                    {{ $serviceType->name_en }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="col-sm-12 col-lg-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Skills:</label>
                        <select name="skills[]" id="edit-skills-list-{{ $service->id }}" class=" select22" multiple="multiple">
                            @foreach($service->skills as $skill)
                            <option value="{{ $skill->skill_id }}"
                                @if($service->providerSkills->pluck('id')->contains($skill->skill_id)) selected @endif>
                                {{ $skill->name_en ?? $skill->skill->name }}
                            </option>
                        @endforeach
                        
                        </select>
                    </div>
                </div>

                <!-- Starting Price -->
                <div class="col-sm-12 col-lg-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Starting Price:</label>
                        <div class="row mt-2">
                            <div class="col d-flex align-items-center">
                                <label for="edit-custom-price-{{ $service->id }}" class="d-flex align-items-center">
                                    <input type="number" class="ms-2 p-1" id="edit-custom-price-input-{{ $service->id }}" name="startingPrice" value="{{($service->providerService->price) }}" placeholder="€20000"/>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Description -->
                <div class="col-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Description (optional):</label>
                        <textarea class="form-control" name="description" style="height: 18em;">{{($service->providerService->description) }}</textarea>
                    </div>
                </div>
            </div>

            <input type="hidden" value="{{ auth()->user()->manager->provider_id }}" name="provider_id">
            
            <div class="row">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-submit">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function () {
    // Populate Skills based on selected Service Type
    $('select[id^="edit-service-type-"]').on('change', function () {
        const serviceId = $(this).attr('id').split('-').pop(); // Extract service ID from the element ID
        const selectedServiceId = $(this).val();
        const skillsList = $(`#edit-skills-list-${serviceId}`);


        $.ajax({
            url: '/api/skills',
            method: 'GET',
            success: function (data) {
                 
                skillsList.empty(); // Clear existing options

                if (Array.isArray(data)) {
                    const filteredSkills = data.filter(skill => skill.service_id == parseInt(selectedServiceId));
                    console.log('Skills Data:', filteredSkills, skillsList);
                    filteredSkills.forEach(function (skill) {
                        const option = $('<option></option>').val(skill.id).text(skill.name_en);
                        skillsList.append(option);
                    });

                    // Preserve previously selected skills
                    const selectedSkills = skillsList.data('selected-skills') || [];
                    skillsList.val(selectedSkills).trigger('change'); // Ensure selected skills are reflected
                } else {
                    console.error('Unexpected data format:', data);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Error fetching skills:', textStatus, errorThrown);
            }
        });
    });

    // Trigger change event for all service type selects on page load to populate skills
    $('select[id^="edit-service-type-"]').each(function () {
        $(this).trigger('change');
    });

    // Save selected skills in data attribute when service type is changed
    $('select[id^="edit-service-type-"]').each(function () {
        const serviceId = $(this).attr('id').split('-').pop();
        const skillsList = $(`#edit-skills-list-${serviceId}`);
        
        skillsList.data('selected-skills', skillsList.val()); // Save selected skills
    });
});

</script>

    <script>
        $(document).ready(function() {
            $('.select22').select2({
                placeholder: "Select Skills",
                allowClear: true,
                width: '100%'
            });
        });
    </script>
    <!-- Include Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />

<!-- Include jQuery (necessary for Select2) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>

