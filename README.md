PHP 5+ RESTful API Template
========================

[Epiphany](https://github.com/jmathai/epiphany) is a micro PHP framework that's fast, easy, clean and RESTful.

[ezSQL](https://github.com/jv2222/ezSQL) is a class to make it very easy to deal with database connections.

PHP 5+ RESTful API Template pairs both of these, providing the basic code for a database driven web services application, that outputs JSON.

## Getting Started

### System Requirements

PHP 5+, Apache and mod_rewrite.

ezSQL uses MySQL in the example, but supports many other database management systems.

### Install / Setup

1. Upload the `api` directory to the "web root" directory of your domain
2. Adjust the "yourdomain.com" and database connection string values and database query in `api/index.php`
3. Test by going to yourdomain.com/api/example and yourdomain.com/api/dbexample (you should see JSON output in the browser window or when viewing the page source)
4. Build out your real web service methods
5. Optionally edit the `api/method_docs.txt` file to include your methods

## Documentation

###Epiphany
<https://github.com/jmathai/epiphany#learn-more-about-the-modules>  
*Only the Route module is used in this example. You'll have to download and add any other modules you would like to use.*

###ezSQL
<http://htmlpreview.github.com/?https://github.com/jv2222/ezSQL/blob/master/ez_sql_help.htm>

## Follow Me

For updates / suggestions / questions / etc.
<table>
  <tr>
    <td><img src="http://www.gravatar.com/avatar/86ceadeffc086eb21df5a49787315ff6?s=60"></td><td valign="middle">Trae Regan<br><a href="http://twitter.com/traeregan">@traeregan</a><br><a href="http://trae.name">http://trae.name</a></td>
  </tr>
</table>