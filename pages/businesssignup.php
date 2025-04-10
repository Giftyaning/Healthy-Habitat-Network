    <div class="signup-container">
        <div class="logo"></div>
        
        <div class="error-message" id="error-message">
            Please fill out all required fields correctly.
        </div>
        
        <form class="signup-form" id="signup-form">
            <h2>Create Your Account</h2>
            
            <div class="business-fields" id="business-fields">
                <div class="form-group">
                    <label for="business-name">Business Name</label>
                    <input type="text" id="business-name" name="business-name">
                </div>

                <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div> 
                
                <div class="form-group">
                    <label for="business-type">Business Type</label>
                    <input type="text" id="business-type" name="business-type" placeholder="e.g. Restaurant, Retail, Service">
                </div>
                
                <div class="form-group">
                    <label for="business-description">Business Description</label>
                    <input type="text" id="business-description" name="business-description" placeholder="Brief description of your business">
                </div>
            </div>
            
            <button type="submit" class="signup-btn">Create Account</button>
            
            <div class="login-link">
                Already have an account? <a href="login.html">Log In</a>
            </div>
            
            <div class="back-to-home">
                <a href="index.html">← Back to Home</a>
            </div>
        </form>
    </div>