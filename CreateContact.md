# Create a Contact #

Below is an example of how to create a contact. There are other options available when creating a contact, but this is just a basic example to get you going.


```
$ews = new ExchangeWebServices($host, $username, $password);

$request = new EWSType_CreateItemType();

$contact = new EWSType_ContactItemType();
$contact->GivenName = 'Homer';
$contact->Surname = 'Simpson';

// create an email address
$email = new EWSType_EmailAddressDictionaryEntryType();
$email->Key = new EWSType_EmailAddressKeyType();
$email->Key->_ = EWSType_EmailAddressKeyType::EMAIL_ADDRESS_1;
$email->_ = 'hsimpson@example.com';

// set the email
$contact->EmailAddresses = new EWSType_EmailAddressDictionaryType();
$contact->EmailAddresses->Entry[] = $email;

// create an address
$address = new EWSType_PhysicalAddressDictionaryEntryType();
$address->Key = new EWSType_PhysicalAddressKeyType();
$address->Key->_ = EWSType_PhysicalAddressKeyType::HOME;
$address->Street = '742 Evergreen Terrace';
$address->City = 'Springfield';
$address->State = 'PA';
$address->PostalCode = '19064';
$address->CountryOrRegion = 'USA';

// set the address
$contact->PhysicalAddresses = new EWSType_PhysicalAddressDictionaryType();
$contact->PhysicalAddresses->Entry[] = $address;

// create a phone number
$phone = new EWSType_PhoneNumberDictionaryEntryType();
$phone->Key = new EWSType_PhoneNumberKeyType();
$phone->Key->_ = EWSType_PhoneNumberKeyType::HOME_PHONE;
$phone->_ = '(610) 555-3223';

// set the phone number
$contact->PhoneNumbers = new EWSType_PhoneNumberDictionaryType();
$contact->PhoneNumbers->Entry[] = $phone;

// set the "file as" mapping to "first name last name"
$contact->FileAsMapping = new EWSType_FileAsMappingType();
$contact->FileAsMapping->_ = EWSType_FileAsMappingType::FIRST_SPACE_LAST;

$request->Items->Contact[] = $contact;

$result = $ews->CreateItem($request);
var_dump($result);
```