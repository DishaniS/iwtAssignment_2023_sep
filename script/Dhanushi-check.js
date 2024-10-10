function enableButton()
{
    if(document.getElementById("agree").checked)
	{
		document.getElementById("submit").disabled=false;
	}
	else
	{
		document.getElementById("submit").disabled=true;
	}
}

function validateForm()
{
    let isValid = true;
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-pwd').value;
    const age = parseInt(document.getElementById('age').value);
    const weight = parseInt(document.getElementById('weight').value);
    const height = parseInt(document.getElementById('height').value);
    const dob = new Date(document.getElementById('dob').value);
    const email = document.getElementById('email').value;
    const terms = document.getElementById('terms');
    const contactNo = document.getElementById("phone").value;
    const name = document.getElementById("name").value;

        if (password != confirmPassword)
        {
            alert("Password Do Not Match");
            isValid = false;
        }

        if(age <= 0 || isNaN(age))
        {
            document.getElementById('age-error').textContent = 'Enter Valid age!';
            isValid = false;
        }
        else {
            document.getElementById('age-error').textContent = ''; // Clear the error message
        }

        if (!isStrongPassword(password)) 
        {
            document.getElementById('password-error').textContent = 'Password must be at least 8 characters and include uppercase, lowercase, digits, and special characters.';
            return false;
        }
        else {
            document.getElementById('password-error').textContent = ''; // Clear the error message
        }

        if (weight <= 0 || isNaN(weight)) {
            document.getElementById('weight-error').textContent = 'Weight must be greater than 0';
            isValid = false;
        }
        else {
            document.getElementById('weight-error').textContent = ''; // Clear the error message
        }

        if (height <= 0 || isNaN(height)) {
            document.getElementById('height-error').textContent = 'Height must be greater than 0';
            isValid = false;
        }
        else {
            document.getElementById('height-error').textContent = ''; // Clear the error message
        }
        const currentYear = new Date().getFullYear();
            if (dob.getFullYear() < 1930 || dob.getFullYear() > 2024) {
                document.getElementById('dob-error').textContent = 'Date of birth should be between 1930 and 2024';
                isValid = false;
            }
            else {
                document.getElementById('dob-error').textContent = ''; // Clear the error message
            }
        if (!/^[A-Za-z\s]+$/.test(name)) {
            document.getElementById("name-error").textContent = "Name should only contain letters and spaces.";
            isValid = false;
        }
        else {
            document.getElementById('name-error').textContent = ''; // Clear the error message
        }
        if (!/^\d{10}$/.test(contactNo)) {
            document.getElementById("phone-error").textContent = "Contact number should be exactly 10 digits.";
            isValid = false;
        }
        else {
            document.getElementById('phone-error').textContent = ''; // Clear the error message
        }
        if (isValid == true)
        {
            return true;
        }
}

    function isStrongPassword(password) 
    {
        const passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#\$%\^&\*]).{8,}$/;
        return passwordRegex.test(password);
    }

    function clearForm() 
    {
        // Clear all input fields
        const inputFields = document.querySelectorAll('input');
        inputFields.forEach((input) => (input.value = ''));

        const selectField = document.querySelector('#gender'); // Use the correct selector here
        selectField.value = 'blank';

        // Clear error messages
        const errorMessages = document.querySelectorAll('.error');
        errorMessages.forEach((error) => (error.textContent = ''));
    }

    function show()
    {
        var showpwd = document.getElementById('password');
        if(showpwd.type == 'password')
        {
            showpwd.type = 'text';
        }
        else
        {
            showpwd.type = 'password';
        }
    }

    function show1()
    {
        var showcpwd = document.getElementById('confirm-pwd');
        if(showcpwd.type == 'password')
        {
            showcpwd.type = 'text';
        }
        else
        {
            showcpwd.type = 'password';
        }
    }

    function handleSubmit(event) {
        if (!validateForm()) {
            event.preventDefault(); // Prevent the form from submitting
        }
    }

