"use strict";

function toggleLoginPanel() {
    var registerPanel = document.getElementById('register-panel');
    var loginPanel = document.getElementById('login-panel');
    if (registerPanel.style.display === 'none' && loginPanel.style.display === 'none'){
        registerPanel.style.display = 'block';
        loginPanel.style.display = 'none';
    } else {
        registerPanel.style.display = 'none';
        loginPanel.style.display = 'none';
    }
}

function showLoginForm() {
    var registerPanel = document.getElementById('register-panel');
    var loginForm = document.getElementById('login-form');
    
    registerPanel.style.display = 'none';
    loginForm.style.display = 'block';
}