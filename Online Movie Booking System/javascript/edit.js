
// Function to populate form fields with saved profile data
function populateProfile() {
    var profile = JSON.parse(localStorage.getItem('userProfile'));
    if (profile) {
        document.getElementById('firstName').value = profile.firstName;
        document.getElementById('lastName').value = profile.lastName;
        document.getElementById('nic').value = profile.nic;
        document.getElementById('email').value = profile.email;
        document.getElementById('contactNumber').value = profile.contactNumber;
        document.getElementById('gender').value = profile.gender;
    }
}

// Function to save profile data to localStorage
function saveProfile() {
    var profile = {
        firstName: document.getElementById('firstName').value,
        lastName: document.getElementById('lastName').value,
        nic: document.getElementById('nic').value,
        email: document.getElementById('email').value,
        contactNumber: document.getElementById('contactNumber').value,
        gender: document.getElementById('gender').value
    };
    localStorage.setItem('userProfile', JSON.stringify(profile));
    alert('Profile saved successfully!');
}

// Function to enable editing of profile fields
function editProfile() {
    document.getElementById('profileForm').reset();
    localStorage.removeItem('userProfile');
    alert('You can now edit your profile.');
}