const validateAllFormFields = () => {
  const firstName = document.forms["loginform"]["firstName"].value;
  const password = document.forms["loginform"]["password"].value;
  if (firstName == "") {
    alert("First Name shouldn't be empty");
    return false;
  }
  if (password.length <= 7) {
    alert("Password should have minimum length of 8");
    return false;
  }
};
const validateEmail = () => {
  const email = document.forms["loginform"]["email"].value;
  return email.match(
    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zAZ]{2,}))$/
  );
};
const validatePhoneNumber = () => {
  const phoneNumber = document.forms["loginform"]["phoneNumber"].value;
  var re = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
  return re.test(phoneNumber);
};
const onKeyDownForEmail = () => {
  alert("Be sure with your Email as It can't be changed later");
};
