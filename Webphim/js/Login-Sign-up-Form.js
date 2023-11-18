// Css power up
// push height for element
if(document.querySelector('.sign-up-img-form')){
    const ipFormSignUp = document.querySelector('.input-form-sign-up')
    let heightForm = ipFormSignUp.offsetHeight + 'px'
    let background = document.querySelector('.sign-up-img-form')
    window.onload = e => {
        background.style.heigh = heightForm
    }
}

// Javsscript start
const root = document.querySelector(':root')
const submitbtnSignUp= document.querySelector('.submit-sign-up-js')


// Function handle common

// email regular expressions
const validateEmail = (email) => {
    return String(email)
    .toLowerCase()
    .match(
        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};
// end email regular expressions

//validated login form
if(document.querySelector('.Login-form')){
    const account = document.querySelector('.account')
    const pass = document.querySelector('.password')
    const accData = document.querySelector('.container-form input[type=text]');
    const passData = document.querySelector('.container-form input[type=password]');
    const accountErr = document.querySelector('.account-error')
    const passErr = document.querySelector('.pass-error')
    const layoutLogin = document.querySelector('.Login-form .input-form')
    const submitbtn = document.querySelector('.submit')
    let heightValueBefore = "435px"


    submitbtn.onclick = (e) => {
        let marginValueAfter = "8px 5px"
        let heightValueAfter = "475px"
    
        // handle null data account
        if(!accData.value){
            e.preventDefault();
            accountErr.innerHTML = `Account is not None`
            account.style = `max-height: var(--heightInput);margin: ${marginValueAfter};`
            root.style.setProperty('--heightForm', heightValueAfter)
        }
        // handle null data password
        if(!passData.value){
            e.preventDefault();
            passErr.innerHTML = `Pass is not None`
            pass.style = `max-height: var(--heightInput);margin: ${marginValueAfter};`
            root.style.setProperty('--heightForm', heightValueAfter)
        }else{
            // pass less than 6 character
            if(passData.value.length < 6){
                e.preventDefault();
                passErr.innerHTML = `Pass is less than 6 character`
                pass.style = `max-height: var(--heightInput);margin: ${marginValueAfter};`
                root.style.setProperty('--heightForm', heightValueAfter)
            }
        }
    }

    // reset error
    accData.oninput = e => {
        accountErr.innerHTML = ``
        account.style = `max-height: var(--heightInput);margin: 15px 5px;`
        root.style.setProperty('--heightForm', heightValueBefore)
    }

    passData.oninput = e => {
        passErr.innerHTML = ``
        pass.style = `max-height: var(--heightInput);margin: 15px 5px;`
        root.style.setProperty('--heightForm', heightValueBefore)
    }
}
// end validate login form

// validated sign up form
if(document.querySelector('.sign-up-form')){
    const submitbtnSignUp = document.querySelector('.submit-sign-up-js')
    const fullnameData = document.querySelector('.full-name-input')
    const emailData = document.querySelector('.email-input')
    const passSignUpData = document.querySelector('.pass-sign-up-input')
    const confirmPassData = document.querySelector('.confirm-pass-input')
    
    const fullnameErr = document.querySelector('.full-name-err')
    const emailErr = document.querySelector('.mail-err')
    const passSignUpErr = document.querySelector('.pass-sign-up-err')
    const confirmPassErr = document.querySelector('.confirm-pass-err')

    const fullname = document.querySelector('.full-name')
    const email = document.querySelector('.email')
    const password = document.querySelector('.password')
    const confirmPass = document.querySelector('.confirm-pass')

    submitbtnSignUp.onclick = e => {
        // None error
        let marginErr = "15px 5px 5px"
        if(!fullnameData.value){
            e.preventDefault()
            fullnameErr.innerHTML = `Full name is not None`
            fullname.style.margin = marginErr
        }
        if(!emailData.value){
            e.preventDefault()
            emailErr.innerHTML = `Email is not None`
            email.style.margin = marginErr
        }else{
            // validate email
            if(!validateEmail(emailData.value)){
                e.preventDefault()
                emailErr.innerHTML = `This field must be email`
                email.style.margin = marginErr
            }
        }
        if(!passSignUpData.value){
            e.preventDefault()
            passSignUpErr.innerHTML = `Pass is not None`
            password.style.margin = marginErr
        }else{
            // pass less than 6 character
            if(passSignUpData.value.length < 6){
                e.preventDefault();
                passSignUpErr.innerHTML = `Pass is less than 6 character`
                password.style.margin = marginErr
            }
        }
        if(!confirmPassData.value){
            e.preventDefault()
            confirmPassErr.innerHTML = `Confirm Pass is not None`
            confirmPass.style.margin = marginErr
        }else{
            // confirm is not correct
            if(passSignUpData.value != confirmPassData.value){
                e.preventDefault()
                confirmPassErr.innerHTML = `Pass is not Same`
                confirmPass.style.margin = marginErr
            }
        }
    }
    fullnameData.oninput = e => {
        fullnameErr.innerHTML = ``
    }
    emailData.oninput = e => {
        emailErr.innerHTML = ``
    }
    passSignUpData.oninput = e => {
        passSignUpErr.innerHTML = ``
    }
    confirmPassData.oninput = e => {
        confirmPassErr.innerHTML = ``
    }
}

// index js
if(document.querySelector('.header.index')){
    const navbarElement = document.querySelector('.navbar-js');
    const contentElement = document.querySelector('.content');
    const brandElement = document.querySelector('.navbar-logo-brand')
    const subnavsElement = document.querySelectorAll('.subnav')
    const titleFlims = document.querySelectorAll('.block-content-head')

    // style background navbar when scroll
    window.onscroll = e => {
        let navbarElementPosition = navbarElement.getBoundingClientRect().bottom;
        let contentElementPosition = contentElement.getBoundingClientRect().top;
        // navbarShowElement.style.backgroundColor = (contentElementPosition - navbarElementPosition) < 28 ? 'rgba(0, 0, 0, 0.8)' : 'unset'
        navbarElement.style.backgroundColor = (contentElementPosition - navbarElementPosition) < 28 ? 'rgba(0, 0, 0, 0.8)' : 'unset'
        brandElement.style.color = (contentElementPosition - navbarElementPosition) < 28 ? 'rgba(255, 255, 255, 0.8)' : 'unset'
        subnavsElement.forEach(subnav => 
            subnav.style.backgroundColor = (contentElementPosition - navbarElementPosition) < 28 ? 'rgba(0, 0, 0, 0.8)' : 'unset'
        )
    }

    window.onload = e => {
        let widthScreen = screen.width
        let widthImage = 1200;
        let heightImage = 600;
        
        // handle background Top
        let percentImage = widthScreen/widthImage;
        const bgHeaderTop = document.querySelector('.bg-header-top')
        bgHeaderTop.style.height = heightImage*percentImage + 'px'
        window.onresize = e => {
            let widthDevices = window.innerWidth
            if(widthDevices > 850){
                let tempWidth = (widthScreen - widthDevices)/2
                titleFlims.forEach(titleFlim => {
                    titleFlim.style.margin = `30px ${250 - tempWidth}px 20px`;
                })
            }
        }
    }
}