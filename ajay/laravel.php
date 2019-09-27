7laravel....

reverse routing.....: it is used to generate the url based on name o symbol. 
Bundles : Bundles are also known as packages. Packages are primary way to add more functionality to laravel. 

Composer : It will pull in all the necessary libraries, dependencies, and manage all at a single place.


Caching in laravel......
	By default laravel use file cache driver, which is used to store the
serialized or cached objecrs in the file system. For huge projects , use Memcached or Redis....

Middleware , Two Types...
	Global Middleware....: It will run on every HTTP request of the application

Route Middleware : It will be assigned to a specific route.

How can we get data between two dates using Quesry in laravel?
	whereBetween()
Blog::WhereBetween('created_at',[$date1,$date2])->get();

----- To turn off CSRF protection for a specific route , we can add that specific url or route in $except valiable which is present in the app\http\Middleware\VerifyCsrfToken.phpfile



-----
List of official packages provided by laravel....
	1. Cashier
	2. Envoy
	3. Passport
	4. Scout
	5. Socialite

dd() it is "Dump and Die" Function provided by laravel.




