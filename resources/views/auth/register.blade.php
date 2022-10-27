@include('site.layouts.header')

<!-- page content-->
<div class="container flex-grow-1">
    <!-- Outer Row -->
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5 py-lg-12">
                                <div>
                                            <form method="post" action="/Account/ExternalLogin">
                                                <div>
                                                        <button type="submit" class="btn btn-block btn-lg font-weight-bold btn-outline-danger"
                                                        style="background:white;color: #b01625" name="provider" value="Google" title="Signup Using Google">
                                                            <i class="fab fa-google"></i>
                                                            Signup Using Google
                                                        </button>
                                                        <button type="submit" class="btn btn-block btn-lg font-weight-bold btn-outline-primary"
                                                        style="background:white;color: #197fc3" name="provider" value="Facebook" title="Signup Using Facebook">
                                                            <i class="fab fa-facebook"></i>
                                                            Signup Using Facebook
                                                        </button>
                                                </div>
                                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8JXsDInc141CjKWdYjw_9uoOaqitw6TXuhErGKKJPMffLhBWkKYBfOYg5EIeDGcPxiodKyeW9LOXA4zsNCIo7477DlYrP8euD-__CfY7zBHAPZa1GIgEJf1jK3Pxx3Cm2B0RbD_rBOI5n7Svhv9pm5c" /></form>
                                </div>

                                <form method="post" action="{{ route('register') }}">
                                    @csrf
                                    <div>
                                        <div class="text-danger validation-summary-valid" style="margin-top:30px" data-valmsg-summary="true"><ul><li style="display:none"></li>
</ul></div>
                                        <input type="hidden" id="ReferralCode" name="ReferralCode" value="" />
                                        <div class="form-group">
                                            <label for="Email">Email Address</label>
                                            <input type="text"
                                                   class="form-control"
                                                   name="email"
                                                   id="Email"
                                                   placeholder="name@example.com" />
                                        </div>
                                        <div class="form-group">
                                            <label for="Password">Password</label>
                                            <input type="password" class="form-control" id="Password" data-val="true" data-val-length="The Password must be at least 6 and at max 100 characters long." data-val-length-max="100" data-val-length-min="6" data-val-required="The Password field is required." maxlength="100" name="password" />
                                            <small>Password must be at least 6 characters long and must have at least one digit ('0'-'9')</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="ConfirmPassword">Confirm password</label>
                                            <input type="password" class="form-control" id="ConfirmPassword" data-val="true" data-val-equalto="The password and confirmation password do not match." data-val-equalto-other="*.Password" name="password_confirmation" />
                                        </div>
                                        <input hidden type="text" id="Token" name="Token" value="" />
                                        <input value="Email" hidden type="text" id="SignUpUsing" name="SignUpUsing">
                                        <button type="submit" class="btn btn-primary">
                                            Sign Up
                                        </button>
                                    </div>
                                <input name="__RequestVerificationToken" type="hidden" value="CfDJ8JXsDInc141CjKWdYjw_9uoOaqitw6TXuhErGKKJPMffLhBWkKYBfOYg5EIeDGcPxiodKyeW9LOXA4zsNCIo7477DlYrP8euD-__CfY7zBHAPZa1GIgEJf1jK3Pxx3Cm2B0RbD_rBOI5n7Svhv9pm5c" /></form>

                                <div class="small mt-2">
                                    Already created an account using your email and password?
                                    <a class="d-block" href="/Account/Signin">Sign In Using E-mail Address</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Main Footer -->
    <footer class="bg-light border-top container-fluid p-3">
        <div class="d-flex flex-row">
            <div>© 2022 <a href="https://devskill.com">Dev Skill</a></div>
            <div class="text-right col">
                <a href="https://www.facebook.com/groups/devskillbd">
                    <img width="100"
                         src="/img/FindUs-FB-RGB.svg"
                         alt="Facebook Page" />
                </a>
            </div>
        </div>
    </footer>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/js/adminlte.min.js"></script>
    
<script src="/lib/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="/lib/jquery-validation-unobtrusive/jquery.validate.unobtrusive.min.js"></script>

<script>
    // Utility function
    function isEmptyOrSpaces(str) {
        return str === null || str.match(/^ *$/) !== null;
    }

    function addInputValidClass(field) {
        $(field).removeClass('input-validation-error');
        $(field).addClass('valid');
    }

    function addInputErrorClass(field) {
        $(field).removeClass('valid');
        $(field).addClass('input-validation-error');
    }

    // Return true if has error, otherwise false
    function checkTimeValue(time) {
        if (!time) {
            return true;
        }
        time = time.split(':');
        if (time[0] > 23 || time[1] > 59) {
            return true;
        } else if (time[0] === "" || time[1] === "") {
            return true;
        } else if (time[0][1] === "_" || time[1][1] === "_") {
            return true;
        }
        
        return false;
    }

    function validateTime(e) {
        let time = e.target.value;
        // Took logic in separate method to be used during form submission
        if (checkTimeValue(time)) {
            addInputErrorClass(e.target);
        } else {
            addInputValidClass(e.target);
        }
    }

</script>
<script>
    // Validate collection of input elements and return true if hasError, otherwise return false
    function validateInputCollection(selectionString) {
        let inputCollection = $(selectionString);
        inputCollection = Object.entries(inputCollection);
        let inputCollectionToValidate = [];
        let len = inputCollection.length;
        let hasError = false;

        inputCollection.forEach((item, index) => {
            if (index >= (len - 2)) {
                return;
            }
            inputCollectionToValidate.push(item[1]);
        });

        inputCollectionToValidate.forEach((item, index) => {
            if (isEmptyOrSpaces(item.value)) {
                hasError = true;
                $(item).removeClass('valid');
                $(item).addClass('input-validation-error');
            } else {
                $(item).removeClass('input-validation-error');
                $(item).addClass('valid');
            }
        });

        return hasError;
    }
</script>

<script>
    // For Select2 Validation
    function validateSelect2Input(defaultValue) {
        let collection = $('.select2.select2-container .selection .select2-selection .select2-selection__rendered');
        collection = Object.entries(collection);
        let hasError = false;

        collectionToValidate = [];
        collection.forEach((item, index) => {
            if (index === collection.length - 1) {
                return;
            }
            collectionToValidate.push(item);
        })

        for (let i = 0; i <= collectionToValidate.length - 2; i++) {
            if (collectionToValidate[i][1].title === defaultValue) {
                $(collectionToValidate[i]).removeClass('valid');
                $(collectionToValidate[i][1]).parent().removeClass('valid');
                $(collectionToValidate[i]).addClass('select2-validation-error'); // For image
                $(collectionToValidate[i][1]).parent().addClass('select2-validation-error'); // For border color
                hasError = true;
            } else {
                $(collectionToValidate[i]).removeClass('select2-validation-error');
                $(collectionToValidate[i][1]).parent().removeClass('select2-validation-error');
                $(collectionToValidate[i]).addClass('valid'); // For image
                $(collectionToValidate[i][1]).parent().addClass('valid'); // For border color
            }
        }

        return hasError;
    }
    
</script>

<script>
    // Script to update unobtrusiveValidation when dynamic content is added in form
    (function ($) {
        $.fn.updateValidation = function () {
            var $this = $(this);
            var form = $this.closest("form")
                .removeData("validator")
                .removeData("unobtrusiveValidation");
            $.validator.unobtrusive.parse(form);

            return $this;
        };
    })(jQuery);
</script>

<script>
    //This script contains validation for custom data annotations

    // For EnsureOneItemAttribute data annotation
    $.validator.addMethod("oneItem", function (value, element, parameters) {
        if (value === undefined || isEmptyOrSpaces(value)) {
            return false;
        }

        return true;
    });

    $.validator.unobtrusive.adapters.add("oneItem", [], function (options) {
        options.rules.oneItem = {};
        options.messages["oneItem"] = options.message;
    });

    // To ensure jquery considers empty string in Class Start or End time as invalid
    $.validator.addMethod("noEmptyString", function (value, element, parameters) {
        if (isEmptyOrSpaces(value)) {
            return false;
        }

        return true;
    });

    $.validator.unobtrusive.adapters.add("noEmptyString", [], function (options) {
        options.rules.oneItem = {};
        options.messages["noEmptyString"] = "Valid Time is required";
    });
    
    // For DateGreaterThanSevenDaysInFutureAttribute data annotation
    $.validator.addMethod("startdate", function (value, element, parameters) {
        let inputDate = new Date(value.split('/')[2], value.split('/')[1] - 1, value.split('/')[0]);
        let expectedDate = new Date();
        expectedDate.setDate(expectedDate.getDate() + 7);

        if (expectedDate.getTime() < inputDate.getTime()) {
            return true;
        }

        return false;
    });

    $.validator.unobtrusive.adapters.add("startdate", [], function (options) {
        options.rules.startdate = {};
        options.messages["startdate"] = options.message;
    });

    // For Enforce data annotation
    $.validator.addMethod("enforcetrue", function (value, element, param) {
        return element.checked;
    });

    $.validator.unobtrusive.adapters.addBool("enforcetrue");
</script>


<script src="https://www.google.com/recaptcha/api.js?render=6Lcdcd4ZAAAAADp1_NYVXpOZu9mhnYjrq0ewyIbs"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6Lcdcd4ZAAAAADp1_NYVXpOZu9mhnYjrq0ewyIbs', {action: 'homepage'}).then(function(token) {
            $('#Token').val(token);
        });
    });
</script>

</body>
</html>
