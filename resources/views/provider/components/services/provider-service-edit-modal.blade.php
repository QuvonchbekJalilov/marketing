@foreach ($services as $service)
    <!-- Modal for Editing Service -->
    <div class="offcanvas offcanvas-end w-50" id="editServiceModal{{ $service->id }}" tabindex="-1">
        <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
            <div class="d-flex align-items-center">
                <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas"
                    data-bs-toggle="tooltip" data-bs-trigger="hover" title="Close">
                    <i class="feather-arrow-left"></i>
                </div>
                <span class="vr text-muted mx-4"></span>
                <h2 class="fs-14 fw-bold text-truncate-1-line">Edit Service</h2>
            </div>
        </div>
        <div class="offcanvas-body">
            <form action="{{ route('service.update', $service->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="row">
                    <!-- Service Type Selection -->
                    <div class="col-sm-12 col-lg-12">
                        <div class="form-group mb-4">
                            <label class="form-label">Service Type:</label>
                            <select name="service_sub_category_id" id="edit-service-type-{{ $service->id }}"
                                class="form-control select2">
                                @foreach ($serviceTypes as $serviceType)
                                    <option value="{{ $serviceType->id }}"
                                        {{ $serviceType->id == $service->service_type_id ? 'selected' : '' }}>
                                        {{ $serviceType->name_en }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Skills -->
                    <div class="col-sm-12 col-lg-12">
                        <div class="form-group mb-4">
                            <label class="form-label">Skills:</label>

                            <select name="skills[]" id="edit-skills-list-{{ $service->id }}"
                                class="form-select form-control max-select" data-select2-selector="tag" multiple>
                                @foreach ($skills as $skill)
                                    <option value="{{ $skill->id }}"
                                        {{ in_array($skill->id, $service->skills->pluck('id')->toArray()) ? 'selected' : '' }}>
                                        {{ $skill->name }}
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
                                @foreach ([1000, 2000, 5000, 10000] as $price)
                                    <div class="col d-flex align-items-center">
                                        <label for="edit-price-{{ $price }}-{{ $service->id }}"
                                            class="d-flex align-items-center">
                                            <!-- Use the actual price value here instead of $service->price -->
                                            <input type="radio"
                                                id="edit-price-{{ $price }}-{{ $service->id }}" name="price"
                                                value="{{ $price }}"
                                                {{ $service->price == $price ? 'checked' : '' }}>
                                            <span class="ms-2">€{{ $price }}</span>
                                        </label>
                                    </div>
                                @endforeach
                                <div class="col d-flex align-items-center">
                                    <label for="edit-custom-price-{{ $service->id }}"
                                        class="d-flex align-items-center">
                                        <input type="radio" id="edit-custom-price-{{ $service->id }}" name="price"
                                            value="custom" {{ $service->price > 10000 ? 'checked' : '' }}>
                                        <input type="number" class="ms-2 p-1" name="custom_price"
                                            id="edit-custom-price-input-{{ $service->id }}"
                                            value="{{ $service->price > 10000 ? $service->price : '' }}"
                                            placeholder="€20000" {{ $service->price > 10000 ? '' : 'disabled' }} />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Description -->
                    <div class="col-12">
                        <div class="form-group mb-4">
                            <label class="form-label">Description (optional):</label>
                            <textarea class="form-control" name="description" style="height: 18em;">{{ $service->description }}</textarea>
                        </div>
                    </div>
                </div>

                <input type="hidden" value="{{ auth()->user()->id }}" name="provider_id">

                <div class="row">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endforeach

<script>
    $(document).ready(function() {
        // When the service type dropdown changes, load related skills
        $('select[id^="edit-service-type-"]').on('change', function() {
            const serviceId = $(this).attr('id').split('-').pop();
            const selectedServiceTypeId = $(this).val(); // Get the selected service type ID
            const skillsList = $(`#edit-skills-list-${serviceId}`); // Get the related skills dropdown

            // Make an AJAX call to the route '/services/{id}/skills' using the selected service type ID
            $.ajax({
                url: `/api/services/${selectedServiceTypeId}/skills`, // Use the service type ID in the URL
                method: 'GET',
                success: function(data) {
                    skillsList.empty(); // Clear the existing skills

                    if (Array.isArray(data)) {
                        // Populate the skills dropdown with the fetched skills
                        data.forEach(function(skill) {
                            const option = $('<option></option>').val(skill.id)
                                .text(skill.name);
                            skillsList.append(option);
                        });

                        // If any skills were previously selected for the service, mark them as selected
                        const selectedSkills = skillsList.data('selected-skills') || [];
                        skillsList.val(selectedSkills).trigger('change');
                    } else {
                        console.error('Unexpected data format:', data);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error fetching skills:', textStatus, errorThrown);
                }
            });
        });

        // Trigger change event on page load to prepopulate skills for all existing services
        $('select[id^="edit-service-type-"]').each(function() {
            $(this).trigger('change');
        });

        // Handle enabling/disabling custom price input
        $('input[name="price"]').on('change', function() {
            const serviceId = $(this).attr('id').split('-').pop();
            const customPriceInput = $(`#edit-custom-price-input-${serviceId}`);

            if ($(this).val() === 'custom') {
                customPriceInput.prop('disabled', false);
            } else {
                customPriceInput.prop('disabled', true);
            }
        });

        // Initially trigger price logic for existing values
        $('input[name="price"]').each(function() {
            const serviceId = $(this).attr('id').split('-').pop();
            const customPriceInput = $(`#edit-custom-price-input-${serviceId}`);

            if ($(this).val() === 'custom' && $(this).is(':checked')) {
                customPriceInput.prop('disabled', false);
            }
        });
    });
</script>
