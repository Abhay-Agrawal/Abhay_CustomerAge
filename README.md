# Customer Age Magento2 Extension
**To add the age field on the registration page with custom validation**

# How to install

Add the module in app/code/ folder in magento root like as app/code/Abhay/CustomerAge
and run the command 
```php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento indexer:reindex
php bin/magento cache:clean
php bin/magento cache:flush
```

___

![age_backend](https://user-images.githubusercontent.com/55655451/91634495-816bf880-ea0e-11ea-9db0-b3c64e4281ea.png)

# How to Enable 

* Navigate to STORES->Configuration in Magento Admin panel. Module Enable - Select “Yes” 
* Add Age of customer for validation
* Click on ‘Save Config’ to save the configuration 

___

After Enable the Module from system configuration then on the customer registration page Age Field is added and it show the validation of age according to admin setting and it is looking like as in frontend

![age_front](https://user-images.githubusercontent.com/55655451/91634505-934d9b80-ea0e-11ea-8aa5-d1e2b723c83b.png)

___
# My Magento Module

| S.No.| Module Name | Description |
| --- | --- | --- |
| 1.| [Learning Module](https://github.com/Abhay-Agrawal/Abhay_Learning-1.0.0) | To Add text message, Drop Down, Radio Button, Multi Select and Text Area in store configuration |
| 2.| [Custom Module](https://github.com/Abhay-Agrawal/CustomModule)| To Fetch the system configuration value and Product Information using GraphQl |
| 3.| [Custom Shipping](https://github.com/Abhay-Agrawal/Abhay_CustomShipping-1.0.0) | This module is used to add the Custom Shipping in the Website|
| 4.| [LatestNews](https://github.com/Abhay-Agrawal/Abhay_LatestNews-1.0.0) | Add Latest News Related to product offer with content in your website |
| 5.| [Customer Age](https://github.com/Abhay-Agrawal/Abhay_CustomerAge) |To add the age field on the registration page with custom validation |
| 6.| [GroupProductOptions](https://github.com/Abhay-Agrawal/Abhay_GroupProductOptions-1.0.0) | To show the group product options like as child product available quantity, SKU and custom message |

___
