<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/registerPage.css') }}">
</head>
<body>
    <div class="navbar">
            <div class="logo">
            <a href="/"><img src="{{ asset('assets/logo.png') }}" alt="LOGO CINEMAXPERIENCE"></a>
    </div>
        <div class="sign-up">Login</div>
        </div>

    
       
    <div class="overlay">
        <div class="registerpopup">
            <div class="registerheader">Register Your Account</div>
            
            <form class="identity-form" method="">
                <div class="name">
                    <input type="text" placeholder="First Name" id="FirstNameTB">
                    <input type="text" placeholder="Last Name" id="LastNameTB">
                </div>
                
                <input type="date" placeholder="Date of Birth" id="DobTB">
                <input type="email" placeholder="Email" id="EmailTB">
                <input type="password" placeholder="Password" id="PasswordTB">
                <input type="password" placeholder="Confirm Password" id="ConfirmPasswordTB">
                <div class="checkbox">
                <input type="checkbox" name="ToS">
                <label for="ToS">I agree with the Terms and Conditions
                </div>
                <button type="submit">Register</button>
                <p>Already have an account? <a href="">Login</a></p>
            </form>
            
        </div> 
        <div class="herosection">
            <div class="photoAtas">
                <div class="photo photo-1"></div>
                <div class="photo photo-2"></div>
                <div class="photo photo-3"></div>
            </div>
            
            

            <div class="photoBawah">
                <div class="photo photo-2"></div>
                <div class="photo photo-3"></div>
                <div class="photo photo-1"></div>
            </div>
        </div>
        
    </div>
    <div class="footer">
        <div class="footer-left">
            <div class="footer-left-img">
                <img src="assets/logo.png" alt="LOGO">
            </div>
            <div class="footer-left-text">
                &copy Copyright 2024 by CinemaXperience. All Rights Reserved.
            </div>
        </div>
        <div class="footer-mid">
            <div class="mid-1">
                <ul>
                    <li>FAQ</li>
                    <li>Ways to Watch</li>
                    <li>Help Center</li>
                </ul>
            </div>
            <div class="mid-2">
                <ul>
                    <li>Jobs</li>
                    <li>Privacy</li>
                    <li>Account</li>
                </ul>
            </div>
            <div class="mid-3">
                <ul>
                    <li>Terms of Use</li>
                    <li>Contact Us</li>
                    <li>Cookie Preferences</li>
                </ul>
            </div>
        </div>
        <div class="footer-right">
            <p>Follow Us</p>
            <a href="https://www.facebook.com/"><img src="assets/footer/fb.png" alt="FB"></a>
            <a href="https://www.twitter.com/"><img src="assets/footer/x.png" alt="X"></a>
            <a href="https://www.instagram.com/"><img src="assets/footer/ig.png" alt="IG"></a>
            <a href="https://www.youtube.com/"><img src="assets/footer/yt.png" alt="YT"></a>
        </div>
    </div>
</body>
</html>