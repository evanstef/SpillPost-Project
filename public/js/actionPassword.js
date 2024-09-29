const passwordRegister = document.getElementById('password_register');
const passwordConfirmRegister = document.getElementById('password_confirmation_register');

// icon hide
const showPasswordRegister = document.getElementById('show_register_password');
const hidePasswordRegister = document.getElementById('hide_register_password');

// icon hide and show
const showPasswordConfirmRegister = document.getElementById('show_register_confirm_password');
const hidePasswordConfirmRegister = document.getElementById('hide_register_confirm_password');

showPasswordRegister.addEventListener('click', () => {
    passwordRegister.setAttribute('type', 'text');
    showPasswordRegister.classList.add('hidden');
    hidePasswordRegister.classList.remove('hidden');
});

hidePasswordRegister.addEventListener('click', () => {
    passwordRegister.setAttribute('type', 'password');
    showPasswordRegister.classList.remove('hidden');
    hidePasswordRegister.classList.add('hidden');
});

showPasswordConfirmRegister.addEventListener('click', () => {
    passwordConfirmRegister.setAttribute('type', 'text');
    showPasswordConfirmRegister.classList.add('hidden');
    hidePasswordConfirmRegister.classList.remove('hidden');
});

hidePasswordConfirmRegister.addEventListener('click', () => {
    passwordConfirmRegister.setAttribute('type', 'password');
    showPasswordConfirmRegister.classList.remove('hidden');
    hidePasswordConfirmRegister.classList.add('hidden');
});


// ini buat form update password yang ada di profile

// // semua inputan password
// const passwordUpdatedCurrent = document.getElementById('update_password_current_password');
// const passwordUpdatedNew = document.getElementById('update_password_password');
// const passwordUpdatedConfirm = document.getElementById('update_password_password_confirmation');

// // semua show icon password
// const showPasswordUpdatedCurrent = document.getElementById('show_updated_current_password');
// const showPasswordUpdatedNew = document.getElementById('show_updated_new_password');
// const showPasswordUpdatedConfirm = document.getElementById('show_updated_confirm_new_password');

// // semua hide icon password
// const hidePasswordUpdatedCurrent = document.getElementById('hide_updated_current_password');
// const hidePasswordUpdatedNew = document.getElementById('hide_updated_new_password');
// const hidePasswordUpdatedConfirm = document.getElementById('hide_updated_confirm_new_password');


// // show password current
// showPasswordUpdatedCurrent.addEventListener('click', () => {
//     passwordUpdatedCurrent.setAttribute('type', 'text');
//     showPasswordUpdatedCurrent.classList.add('hidden');
//     hidePasswordUpdatedCurrent.classList.remove('hidden');
// });

// // hide password current
// hidePasswordUpdatedCurrent.addEventListener('click', () => {
//     passwordUpdatedCurrent.setAttribute('type', 'password');
//     showPasswordUpdatedCurrent.classList.remove('hidden');
//     hidePasswordUpdatedCurrent.classList.add('hidden');
// });


// // show password new
// showPasswordUpdatedNew.addEventListener('click', () => {
//     passwordUpdatedNew.setAttribute('type', 'text');
//     showPasswordUpdatedNew.classList.add('hidden');
//     hidePasswordUpdatedNew.classList.remove('hidden');
// });

// // hide password new
// hidePasswordUpdatedNew.addEventListener('click', () => {
//     passwordUpdatedNew.setAttribute('type', 'password');
//     showPasswordUpdatedNew.classList.remove('hidden');
//     hidePasswordUpdatedNew.classList.add('hidden');
// });

// // show password confirm
// showPasswordUpdatedConfirm.addEventListener('click', () => {
//     passwordUpdatedConfirm.setAttribute('type', 'text');
//     showPasswordUpdatedConfirm.classList.add('hidden');
//     hidePasswordUpdatedConfirm.classList.remove('hidden');
// });

// // hide password confirm
// hidePasswordUpdatedConfirm.addEventListener('click', () => {
//     passwordUpdatedConfirm.setAttribute('type', 'password');
//     showPasswordUpdatedConfirm.classList.remove('hidden');
//     hidePasswordUpdatedConfirm.classList.add('hidden');
// });

// akhir dari form update password yang ada di profile
