# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;
# Instantiate the client.
$mgClient = new Mailgun('b6a17b12012103b87faca404ea93f26f-52b0ea77-adb64124');
$domain = "mojokdevke.co.ke";
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
'from' => 'Excited User <mailgun@mojokdevke.co.ke>',
    'to' => 'Baz <brian@muhindi.ml>',
        'subject' => 'Hello',
        'text' => 'Testing some Mailgun awesomness!'
        ));