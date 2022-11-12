<?php
require_once("./template/central.php");
?>
<style>
.label-input100 {
    font-family: Poppins-Regular;
    font-size: 15px;
    color: gray;
    line-height: 1.2;
    text-align: right;
    position: absolute;
    top: 14px;
    left: -105px;
    width: 80px;
}

.wrap-contact100 {
    width: 670px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    position: relative;
}

.contact100-form-title {
    width: 100%;
    position: relative;
    z-index: 1;

    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    padding: 64px 15px;
    background: #041e50;
}

.contact100-form-title-1 {
    font-family: Poppins-Bold;
    font-size: 20px;
    color: #fff;
    line-height: 1.2;
    text-align: center;
    padding-bottom: 7px;
}

.contact100-form-title-2 {
    font-family: Poppins-Regular;
    font-size: 15px;
    color: #fff;
    line-height: 1.5;
    text-align: center;
}

.contact100-form {
    width: 100%;

    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 43px 88px 57px 190px;
}

.container-contact100-form-btn {
    width: 100%;

    display: flex;
    flex-wrap: wrap;
    padding-top: 8px;
}

.validate-input {
    position: relative;
}

.wrap-input100 {
    width: 100%;
    position: relative;
    border-bottom: 1px solid #b2b2b2;
    margin-bottom: 26px;
}

.contact100-form-btn {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    min-width: 160px;
    height: 50px;
    background-color: #57b846;
    border-radius: 25px;
    font-family: Poppins-Regular;
    font-size: 16px;
    color: #fff;
    line-height: 1.2;
    -webkit-transition: all .4s;
    -o-transition: all .4s;
    -moz-transition: all .4s;
    transition: all .4s;
}

button {
    outline: none !important;
    border: none;
    background: 0 0;
    background-color: rgba(0, 0, 0, 0);
}

[type="reset"],
[type="submit"],
button,
html [type="button"] {
    -webkit-appearance: button;
}

button,
select {
    text-transform: none;
}

button,
input {
    overflow: visible;
}
</style>

<div style="margin-left: 20%;">

    <div class="container-contact100">
        <div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422"
            data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>
        <div class="wrap-contact100">
            <div class="contact100-form-title" style="background-image: url(images/bg-01.jpg)">
                <span class="contact100-form-title-1" style="font-size: 32px;"> Contact Us </span>
                <span class="contact100-form-title-2" style="font-size: 20px;">
                    Feel free to Message us
                </span>
            </div>
            <form class="contact100-form validate-form">
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Full Name:</span>
                    <input class="input100" type="text" name="name" placeholder="Enter full name" />
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Email:</span>
                    <input class="input100" type="text" name="email" placeholder="Enter email addess" />
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Phone is required">
                    <span class="label-input100">Phone:</span>
                    <input class="input100" type="text" name="phone" placeholder="Enter phone number" />
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Message is required">
                    <span class="label-input100">Message:</span>
                    <textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
                    <span class="focus-input100"></span>
                </div>
                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        <span>
                            Submit
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
        <h1>Thank you!</h1>
        <style>
        h1 {
            text-align: center;
            background-color: rgb(4, 30, 80);
            color: aliceblue;
        }
        </style>
    </div>
</div>