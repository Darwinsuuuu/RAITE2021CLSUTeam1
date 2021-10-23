// $(document).ready(function() {

//     function isEmail(data) {
//         var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/
//         return regex.test(data)
//     }

//     function isName(data) {
//         var regex = /^[A-Za-z .]+$/
//         return regex.test(data)
//     }

    
//     function isContact(data) {
//         var regex = /^\d+$/
//         return regex.test(data)
//     }


//     // validations

//     $("form").submit(function(event){

//         event.preventDefault()


//         let fnameVal = $("#getFirstname").val()
//         let fnameParent = $("#getFirstname")
//         fnameParent.parent().find("small").remove()
//         fnameParent.removeClass("is-invalid")
//         if(fnameVal == '') {
//             fnameParent.parent().append("<small class='fw-bold text-danger'>Field cannot be empty!</small>")
//             fnameParent.addClass("is-invalid")
//         } else {

//             if(!isName(fnameVal)) {
//                 fnameParent.parent().append("<small class='fw-bold text-danger'>Letters only from A-Z!</small>")
//                 fnameParent.addClass("is-invalid")
//             }

//         }

        

//         let mnameVal = $("#getMiddlename").val()
//         let mnameParent = $("#getMiddlename")
//         mnameParent.parent().find("small").remove()
//         mnameParent.removeClass("is-invalid")
//         if(mnameVal == '') {
//             mnameParent.parent().append("<small class='fw-bold text-danger'>Field cannot be empty!</small>")
//             mnameParent.addClass("is-invalid")
//         } else {

//             if(!isName(mnameVal)) {
//                 mnameParent.parent().append("<small class='fw-bold text-danger'>Letters only from A-Z!</small>")
//                 mnameParent.addClass("is-invalid")
//             }

//         }


        

//         let lnameVal = $("#getLastname").val()
//         let lnameParent = $("#getLastname")
//         lnameParent.parent().find("small").remove()
//         lnameParent.removeClass("is-invalid")
//         if(lnameVal == '') {
//             lnameParent.parent().append("<small class='fw-bold text-danger'>Field cannot be empty!</small>")
//             lnameParent.addClass("is-invalid")
//         } else {

//             if(!isName(lnameVal)) {
//                 lnameParent.parent().append("<small class='fw-bold text-danger'>Letters only from A-Z!</small>")
//                 lnameParent.addClass("is-invalid")
//             }

//         }


//         let gender = $("#getGender").val()
//         let genderParent = $("#getGender")
//         genderParent.parent().find("small").remove()
//         genderParent.removeClass("is-invalid")
//         if(gender == 0) {
//             genderParent.parent().append("<small class='fw-bold text-danger'>Field cannot be empty!</small>")
//             genderParent.addClass("is-invalid")
//         }


//         let age = $("#getAge").val()
//         let ageParent = $("#getAge")
//         ageParent.parent().find("small").remove()
//         ageParent.removeClass("is-invalid")
//         if(age == '') {
//             ageParent.parent().append("<small class='fw-bold text-danger'>Field cannot be empty!</small>")
//             ageParent.addClass("is-invalid")
//         } else {

//             if(age <= 0) {
//                 ageParent.parent().append("<small class='fw-bold text-danger'>Age should be 20 and above</small>")
//                 ageParent.addClass("is-invalid")
//             }

//         }


//         let emailVal = $("#getEmail").val()
//         let emailParent = $("#getEmail")
//         emailParent.parent().find("small").remove()
//         emailParent.removeClass("is-invalid")
//         if(emailParent == '') {
//             emailParent.parent().append("<small class='fw-bold text-danger'>Field cannot be empty!</small>")
//             emailParent.addClass("is-invalid")
//         } else {

//             if(!isEmail(emailVal)) {
//                 emailParent.parent().append("<small class='fw-bold text-danger'>Invalid email format</small>")
//                 emailParent.addClass("is-invalid")
//             }

//         }


//         let contactVal = $("#getContact").val()
//         let contactParent = $("#getContact")
//         contactParent.parent().find("small").remove()
//         contactParent.removeClass("is-invalid")
//         if(contactParent == '') {
//             contactParent.parent().append("<small class='fw-bold text-danger'>Field cannot be empty!</small>")
//             contactParent.addClass("is-invalid")
//         } else {

//             if(!isContact(contactVal)) {
//                 contactParent.parent().append("<small class='fw-bold text-danger'>Invalid contact format</small>")
//                 contactParent.addClass("is-invalid")
//             }

//         }


//     })



//     $("#uploadProfilePic").click(function(){
//         $("#imageProfile").click()
//     })


// })



$("#uploadProfilePic").click(function(){
    $("#imageProfile").click()
})
    

imageProfile.onchange = evt => {
    const [file] = imageProfile.files
    if (file) {
        blah.src = URL.createObjectURL(file)
    }
}