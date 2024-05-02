<div class="container">
    <div class="advanced_search">
        <h3>Register Your Property here!</h3>

        <form action="send_mail.php" method="POST" onsubmit="return validateForm()">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <input type="text" class="form-control " id="fname" name="name" placeholder="First Name*" required>
                        <span id="nameError" class="error-message" style="color: red;font-size: x-small;"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <input type="text" class="form-control " id="mobno" name="mobileno" placeholder="Mobile No*" required>
                        <span id="phoneError" style="color: red;font-size: x-small;"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <input type="text" class="form-control " id="email" name="email" placeholder="Enter Email*" required>
                        <span id="emailError" style="color: red;font-size: x-small;"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <input type="text" class="form-control " id="city" name="city" placeholder="City/Location*" required>
                        <span id="cityError" style="color: red;font-size: x-small;"></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn submit_btn" name="submit">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function validateForm() {
        var fname = document.getElementById("fname").value.trim();
        var city = document.getElementById("city").value.trim();
        var email = document.getElementById("email").value.trim();
        var phone = document.getElementById("mobno").value.trim();

        var nameError = document.getElementById("nameError");
        var cityError = document.getElementById("cityError");
        var emailError = document.getElementById("emailError");
        var phoneError = document.getElementById("phoneError");

        var isValid = true;

        // Validate first name
        if (fname === '') {
            nameError.textContent = 'Please enter your first name';
            isValid = false;
        } else {
            nameError.textContent = '';
        }

        // Validate city
        if (city === '') {
            cityError.textContent = 'Please enter your city/location';
            isValid = false;
        } else {
            cityError.textContent = '';
        }

        // Validate email
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            emailError.textContent = 'Please enter a valid email address';
            isValid = false;
        } else {
            emailError.textContent = '';
        }

        // Validate phone number
        var phonePattern = /^[6-9]\d{9}$/;
        if (!phonePattern.test(phone)) {
            phoneError.textContent = 'Please enter a valid Mobile number';
            isValid = false;
        } else {
            phoneError.textContent = '';
        }

        return isValid;
    }
</script>