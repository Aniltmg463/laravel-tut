<x-layout>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header">
                <ul class="nav nav-tabs justify-content-center" id="formTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal"
                            type="button" role="tab">Personal</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="professional-tab" data-bs-toggle="tab" data-bs-target="#professional"
                            type="button" role="tab">Professional</button>
                    </li>
                </ul>
            </div>
            <form action="#" method="POST">
                @csrf
                <div class="tab-content p-4" id="formTabsContent">
                    <!-- Personal -->
                    <div class="tab-pane fade show active" id="personal" role="tabpanel">
                        <h4 class="text-center mb-4">Personal Details</h4>
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}">
                        </div>
                        <div class="mb-3">
                            <label for="middlename" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="middlename" name="middlename" value="{{ old('middlename') }}">
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}">
                        </div>
                        <div class="mb-3">
                            <label for="dob" class="form-label">Date of Birth <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="dob" name="dob" value="{{ old('dob') }}">
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
                            <select class="form-select" id="gender" name="gender">
                                <option selected disabled>Select Gender</option>
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                        </div>
                        <div class="text-end">
                            <button class="btn btn-primary" type="button" onclick="switchTab(1)">Next</button>
                        </div>
                    </div>

                    <!-- Professional -->
                    <div class="tab-pane fade" id="professional" role="tabpanel">
                        <h4 class="text-center mb-4">Professional Details</h4>
                        <div class="mb-3">
                            <label for="job_title" class="form-label">Job Title</label>
                            <input type="text" class="form-control" id="job_title" name="job_title" value="{{ old('job_title') }}">
                        </div>
                        <div class="mb-3">
                            <label for="department" class="form-label">Department</label>
                            <input type="text" class="form-control" id="department" name="department" value="{{ old('department') }}">
                        </div>
                        <div class="mb-3">
                            <label for="employee_id" class="form-label">Employee ID</label>
                            <input type="text" class="form-control" id="employee_id" name="employee_id" value="{{ old('employee_id') }}">
                        </div>
                        <div class="mb-3">
                            <label for="employee_type" class="form-label">Employee Type <span class="text-danger">*</span></label>
                            <select class="form-select" name="employee_type" id="employee_type">
                                <option selected disabled>Select employee type</option>
                                <option value="full_time">Full Time</option>
                                <option value="part_time">Part Time</option>
                                <option value="remote">Remote</option>
                                <option value="intern">Intern</option>
                                <option value="contractual">Contractual</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="hire_date" class="form-label">Joining Date <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="joining_date" name="joining_date" value="{{ old('joining_date') }}">
                        </div>
                        <div class="mb-3">
                            <label for="hire_date" class="form-label">Offer Letter<span class="text-danger">*</span></label>
                            <input type="file" id="offerLetterDropify" class="border" name="offer_letter"/>
                        </div>

                        <div class="mb-3">
                            <label for="hire_date" class="form-label">PAN<span class="text-danger">*</span></label>
                            <input type="file" id="panDropify"class="border" name="pan"/>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-secondary" onclick="switchTab(0)">Back</button>
                            <button type="button" class="btn btn-primary" onclick="switchTab(2)">Next</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function switchTab(index) {
            const tabTriggerEls = document.querySelectorAll('#formTabs button');
            if (tabTriggerEls[index]) {
                const tab = new bootstrap.Tab(tabTriggerEls[index]);
                tab.show();
            }
        }
    </script>
</x-layout>
