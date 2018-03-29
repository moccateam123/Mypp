change env connect db

/create new table Prisons /

php artisan make:model Models\Prisons -m  

/!create new table Prisons /


/create new table Roles /

php artisan make:model Models\Roles -m  

/!create new table Roles /

/create new table users /

php artisan make:model Models\Users -m  

/!create new table users /

/create new table PERMISSIONS /

php artisan make:model Models\Permissions -m  

/!create new table PERMISSIONS /


/create new table Duty_type /

php artisan make:model Models\Duty_type -m  

/!create new table Duty_type /

/create new table DUTIES /

php artisan make:model Models\Duties -m  

/!create new table DUTIES /



/create new table WAITING LIST /

php artisan make:model Models\Duty_expenses -m  

/!create new table DUTY_EXPENSES /


/create new table DUTY_EXPENSES /

php artisan make:model Models\Waiting_list -m  

/!create new table WAITING LIST /


/create new table DUTY_NOTES /

php artisan make:model Models\Duty_notes -m  

/!create new table DUTY_NOTES /


/create new table DUTY_CONFIRMATION /

php artisan make:model Models\Duty_confirmation -m  

/!create new table DUTY_CONFIRMATION /

/create new table NOTIFICATIONS /

php artisan make:model Models\Notifications -m  

/!create new table NOTIFICATIONS /


/create new table Timecards /

php artisan make:model Models\Timecards -m  

/!create new table Timecards /


run php artisan migrate