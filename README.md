## _UPI Payment Gateway_
[![<build_status>](https://img.shields.io/badge/Build_Status-Alpha-blue)](<LINK>)
> Manual Verification Only! 

# Overview
This project aims to create a UPI (Unified Payments Interface) payment gateway using PHP. Users will be able to make payments via UPI, generate QR codes, and invoke UPI apps like Google Pay, PhonePe, etc. The users have to write the Transaction/Reference Code/ID to complete the payment, and administrators can verify these transactions through an admin dashboard.

# Features
####  UPI Payment Processing:
- Users can initiate payments using their UPI-enabled apps.
- The system will generate a unique transaction code for each payment.

####  QR Code Generation:
- The system will create QR codes that users can scan with their UPI apps.
- These QR codes will encode necessary payment details (e.g., recipient UPI ID, amount, purpose).

####  Integration with UPI Apps:
- Users can choose their preferred UPI app (e.g., Google Pay, PhonePe) to complete the payment.
- The system will invoke the selected app with the relevant payment details.

####  Admin Verification:
- Administrators can access an admin dashboard.
- They can verify transactions by searching for the transaction code and checking the payment status.

# Installation
#### Requirements:
- PHP (ensure you have PHP installed on your server)
- Web server (e.g., Apache, Nginx)
- MySQL (for storing transaction data)
- Clone the Repository:

```sh
git clone https://github.com/2srk/UPI_PG.git
```


####  Configuration:
- Create a MySQL database and configure the database credentials in config.php.
- Set up your web server to point to the project directory.
Usage:
- Users can access the payment page (index.php) to initiate payments.
- The system will generate a transaction code and display a QR code.
- Users can scan the QR code using their UPI app and complete the payment.
- Administrators can log in to the admin dashboard (admin.php) to verify transactions.

## Plugins
> On the way!

# Contributing
Contributions are welcome! If you’d like to improve this project, feel free to submit pull requests or open issues.

# License
This project is licensed under the MIT License. See LICENSE for details.
