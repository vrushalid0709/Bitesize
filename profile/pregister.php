<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post-Registration Form</title>
    <link rel="stylesheet" href="../css/pregister.css">
</head>
<body>
    <div class="container">
        <div class="left-section">
            <h2 class = "congratulations">Congratulations!</h2>
            <p class="subheading">You have successfully created an account. Please 
                fill in the details for a smoother experience.</p>
            <img src="../images/succ.webp" alt="Success" class="congrats-img">
        </div>
            <div class="right-section">
            <form action="postregister.php" method="post">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" placeholder="Full Name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" placeholder="Phone Number" required>
                </div>

                <div class="form-group">
                    <label for="diet">Dietary Preferences:</label>
                <div class="radio-group">
                    <input type="radio" id="vegetarian" name="diet" value="Vegetarian" required>
                    <label for="vegetarian">Vegetarian</label>
                    <input type="radio" id="vegan" name="diet" value="Vegan">
                    <label for="vegan">Vegan</label>
                    <input type="radio" id="non-vegetarian" name="diet" value="Non-Vegetarian">
                    <label for="non-vegetarian">Non-Vegetarian</label>
                    <input type="radio" id="jain" name="diet" value="Jain">
                    <label for="jain">Jain</label>
                </div>

                <div class="form-group">
                    <label for="allergies">Please list any allergies:</label>
                    <textarea name="allergies" placeholder="Allergies" required></textarea>
                </div>

                <div class="form-group">
                <label for="meal">Favorite Meal Types:</label>
                 <div class="checkbox-group">
                  <label><input type="checkbox" name="meal[]" value="Breakfast"> Breakfast</label>
                  <label><input type="checkbox" name="meal[]" value="Lunch"> Lunch</label>
                  <label><input type="checkbox" name="meal[]" value="Dinner"> Dinner</label>
                 </div>
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea name="address" placeholder="Address" required></textarea>
                </div>

                <div class="form-group">
                    <label for="addressType">Address Type:</label>
                    <select name="addressType" required>
                        <option value="Home">Home</option>
                        <option value="Work">Work</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>