<!--! ================================================================ !-->
<!--! [Start] Tasks Details Offcanvas !-->
<!--! ================================================================ !-->
@php
    use App\Models\PortfolioClient;

@endphp
@foreach ($portfolios as $portfolio)
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="portfolioProviderEditOffcanvas{{ $portfolio->id }}">
        <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
            <div class="d-flex align-items-center">
                <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas"
                    data-bs-toggle="tooltip" data-bs-trigger="hover" title="Details Close"><i
                        class="feather-arrow-left"></i></div>
                <span class="vr text-muted mx-4"></span>
                <a href="javascript:void(0);">
                    <h2 class="fs-14 fw-bold text-truncate-1-line">Редактировать портфолио</h2>
                </a>
            </div>
        </div>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="offcanvas-body">
            <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-md-7">
                        <div class="row">
                            <h4> Добавить работу</h4>
                            <div class="col-md-12 mt-3">
                                <h5> Название работы</h5>
                                <div class="mb-4">
                                    <label class="form-label">Дайте краткое, но содержательное название своей работе. <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="Введите название вашей работы здесь..." name="work_title"
                                        value="{{ $portfolio->work_title }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <div class="showcase form-group card">
                                        @php
                                            $multiImageVideoPaths = json_decode($portfolio->multi_image_video, true);
                                        @endphp

                                        @if (is_array($multiImageVideoPaths))
                                            @foreach ($multiImageVideoPaths as $filePath)
                                                <div>
                                                    <img src="{{ Storage::url($filePath) }}" alt="Media file"
                                                         style="max-width: 100px;" />
                                                </div>
                                            @endforeach
                                        @endif
                                        <h5>Изображение или видео</h5>
                                        <p>Покажите несколько изображений или видео, демонстрирующих вашу работу.</p>
                                        <div id="workIllustrationsContainer">
                                            <main class="container">
                                                <div class="no-content">Пока не добавлено ни одного изображения или видео.</div>
                                                <div class="buttons row mt-3">
                                                    <div class="col">
                                                        <a href="javascript:void(0);" id="imageFileBtn" onclick="showInput('image')" class="btn btn-primary w-100">
                                                            <i class="feather-upload me-2"></i>
                                                            <span>Загрузить изображение</span>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="javascript:void(0);" id="youtubeUrlBtn" onclick="showInput('youtube')" class="btn btn-outline-primary w-100">
                                                            <i class="fa-solid fa-link me-2"></i>
                                                            <span>Видео на YouTube</span>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div id="inputContainer" class="mt-3">
                                                    <div id="imageInput" class="input-field" style="display: none;">
                                                        <label for="imageFile">Загрузить изображение:</label>
                                                        <input type="file" id="imageFile" name="multi_image_video[]" accept="image/*" multiple class="form-control @error('multi_image_video.*') is-invalid @enderror">
                                                        @error('multi_image_video.*')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div id="youtubeInput" class="input-field" style="display: none;">
                                                        <label for="youtubeUrl">Добавьте URL вашего видео на YouTube:</label>
                                                        <input type="text" id="youtubeUrl" name="youtube_url[]" placeholder="Введите URL-адрес видео YouTube" class="form-control @error('youtube_url.*') is-invalid @enderror">
                                                        @error('youtube_url.*')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </main>

                                            <div class="text-dark mt-3" id="imageInputInfo" style="display: none;">
                                                Рекомендуемый размер: <b>2MB max</b>. Рекомендуемое разрешение: <b>1200x900 px</b>. Пожалуйста, постарайтесь сохранить альбомную ориентацию: <b>1.3:1</b>.
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="col-md-12">
                                <h5>Экспертиза</h5>
                                <div class="form-group mb-4">
                                    <label class="form-label">Укажите области знаний, требуемые для работы, которую вы выполнили.</label>
                                    <select class="form-control" id="editServiceSelect" name="service_sub_category_id">
                                        <option value="">Выберите услугу...</option>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}"
                                                {{ $portfolio->service_sub_category_id == $service->id ? 'selected' : '' }}>
                                                {{ $service->name_en }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <h5>Навыки <span>(необязательный)</span></h5>
                                <div class="mb-4">
                                    <label class="form-label">Укажите навыки или компетенции, необходимые вашей команде для выполнения запрошенной работы.</label>
                                    <select class="form-control" id="editSkillsSelect" name="skills[]" multiple>
                                        @foreach ($portfolio->skills as $skill)
                                            <option value="{{ $skill->id }}" selected>{{ $skill->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div class="col-md-12 mt-3">
                                <h5>Дата начала </h5>
                                <div class="mb-4">
                                    <input type="date" class="form-control" name="start_date"
                                        placeholder="Введите бюджет..."
                                        value="{{ \Carbon\Carbon::parse($portfolio->start_date)->format('Y-m-d') }}">
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <h5> Дата окончания</h5>
                                <div class="mb-4">
                                    <input type="date" class="form-control" name="end_date"
                                        placeholder="Введите бюджет..."
                                        value="{{ \Carbon\Carbon::parse($portfolio->end_date)->format('Y-m-d') }}">
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <h5> Бюджет <span> (необязательный) </span></h5>
                                <div class="mb-4">
                                    <label class="form-label">Укажите, какой общий бюджет был выделен на выполнение этой работы.<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="budget"
                                        placeholder="Введите бюджет..." value="{{ $portfolio->budget }}">
                                    <label class="form-label">Конфиденциально: эта информация не будет видна публично, но поможет нам отправлять вам более точные и релевантные возможности.<span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="my-3">
                                    <h5> Описание <span> (необязательный) </span></h5>
                                    <label class="form-label">Опишите подробности вашего сотрудничества с клиентом по выполненной работе.</label>
                                </div>
                                <div class="mb-4">
                                    <div class="form-group">
                                        <h6> Введение</h6>
                                        <label class="form-label">В качестве введения кратко опишите выполненную работу в нескольких предложениях.</label>
                                        <textarea class="form-control" id="exampleTextarea" rows="5" name="introduction"
                                            placeholder="Введите текст здесь...">{{ $portfolio->introduction }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <h6> Проблемы </h6>
                                        <label class="form-label">В качестве вступления кратко опишите работу.
                                            изложено в нескольких предложениях.</label>
                                        <textarea class="form-control" id="exampleTextarea" rows="5" name="challenges"
                                            placeholder="Введите текст здесь...">{{ $portfolio->challenges }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <h6> Решение </h6>
                                        <label class="form-label">В качестве вступления кратко опишите работу.
                                            изложено в нескольких предложениях.</label>
                                        <textarea class="form-control" id="exampleTextarea" rows="5" name="solution"
                                            placeholder="Введите текст здесь...">{{ $portfolio->solution }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <div class="form-group">
                                        <h6> Влияние</h6>
                                        <label class="form-label">В качестве введения кратко опишите выполненную работу в нескольких предложениях.</label>
                                        <textarea class="form-control" id="exampleTextarea" name="impact" rows="5"
                                            placeholder="Введите текст здесь...">{{ $portfolio->impact }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <h5> Ссылка для справки <span> (необязательный) </span></h5>
                                <div class="mb-4">
                                    <label class="form-label">Предоставьте ссылку на результат вашего сотрудничества (например, ссылку на сайт, видео, мероприятие).</label>
                                    <input type="text" class="form-control" name="source_link"
                                        placeholder="Введите ссылку на вашу работу..." value="{{ $portfolio->source_link ?? ' ' }}">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-5 sticky-column">
                        <div class="row">
                            <h4>Клиент</h4>
                            @php
                                $client = PortfolioClient::where('portfolio_id', $portfolio->id)->first();
                            @endphp
                            <div class="col-md-12 mt-3">
                                <h6>Название компании</h6>
                                <div class="mb-4">
                                    <input type="text" class="form-control" name="company_name"
                                        placeholder="Введите название вашей работы здесь..."
                                        value="{{ $client->company_name ?? 'null' }}">
                                </div>

                            </div>

                            <div class="col-md-12 mt-3">
                                <h6>Расположение</h6>
                                <div class="mb-4">
                                    <input type="text" class="form-control" name="company_location"
                                        placeholder="Введите название вашей работы здесь..."
                                        value="{{ $client->location ?? 'null' }}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <h6>Сектор</h6>
                                <div class="form-group mb-4">
                                    @foreach ($portfolio->clients as $client)
                                        <select name="sector_id" class="form-control"
                                            data-select2-selector="status">
                                            @foreach ($sectors as $sector)
                                                <option value="{{ $sector->id }}"
                                                    {{ $client->sector_id == $sector->id ? 'selected' : '' }}>
                                                    {{ $sector->name_en }}
                                                </option>
                                            @endforeach
                                        </select>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-12">
                                <h6>Географический охват <span>(необязательный)</span></h6>
                                <div class="form-group mb-4">
                                    <select class="form-control" data-select2-selector="status"
                                        name="geographic_scope">
                                        <option value="National"
                                            {{ $portfolio->geographic_scope == 'National' ? 'selected' : '' }}>Национальный
                                        </option>
                                        <option value="International"
                                            {{ $portfolio->geographic_scope == 'International' ? 'selected' : '' }}>
                                            International</option>
                                        <option value="Local"
                                            {{ $portfolio->geographic_scope == 'Local' ? 'selected' : '' }}>Местный
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h6> Аудитория <span>(необязательный)</span> </h6>
                            <div class="form-group mb-4">
                                <select class="form-control" data-select2-selector="status" name="audience">
                                    <option value="B2B" data-bg="bg-primary"
                                        {{ $portfolio->audience == 'B2B' ? 'selected' : '' }}>B2B</option>
                                    <option value="B2C" data-bg="bg-secondary"
                                        {{ $portfolio->audience == 'B2C' ? 'selected' : '' }}>B2C</option>
                                    <option value="B2B & B2C" data-bg="bg-success"
                                        {{ $portfolio->audience == 'B2B & B2C' ? 'selected' : '' }}>B2B & B2C</option>
                                </select>
                            </div>
                        </div>



                    </div>


                    <input type="hidden" name="provider_id" value="{{ auth()->user()->id }}">
                    <button class="btn btn-primary d-inline-block mt-4" type="submit">Представлять на рассмотрение</button>
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

                // Fayl yuklash dialogini avtomatik ochish
                const imageInput = document.getElementById('imageFile');
                if (imageInput) {
                    imageInput.click();
                }
            } else if (type === 'youtube') {
                document.getElementById('youtubeInput').style.display = 'block';
            }
        }
    </script>
<script>
    document.getElementById('editServiceSelect').addEventListener('change', function() {
        const serviceId = this.value;

        // Log the selected service ID
        console.log('Selected service ID:', serviceId);

        // If no service is selected, clear the skills dropdown
        if (!serviceId) {
            document.getElementById('editSkillsSelect').innerHTML = '';
            return;
        }

        // Proceed with fetching skills
        fetch(`/api/services/${serviceId}/skills`)
            .then(response => response.json())
            .then(data => {
                console.log('Skills data:', data); // Log the returned skills data for inspection

                const skillsSelect = document.getElementById('editSkillsSelect');
                skillsSelect.innerHTML = ''; // Clear current options

                data.forEach(skill => {
                    const option = document.createElement('option');
                    option.value = skill.id;
                    option.text = skill.name;
                    skillsSelect.appendChild(option);
                });

                // Re-select skills that were already assigned to the portfolio
                const preselectedSkills = @json($portfolio->skills->pluck('id')->toArray());
                preselectedSkills.forEach(skillId => {
                    const option = skillsSelect.querySelector(`option[value="${skillId}"]`);
                    if (option) {
                        option.selected = true;
                    }
                });
            })
            .catch(error => {
                console.error('Error fetching skills:', error);
            });
    });

    // Trigger change event to load skills for the initially selected service
    document.getElementById('editServiceSelect').dispatchEvent(new Event('change'));



</script>
@endforeach

