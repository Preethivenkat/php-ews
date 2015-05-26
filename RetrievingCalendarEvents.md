# Retrieving Calendar Events #

Example of retrieving calendar events for a specific range.

```
$ews = new ExchangeWebServices($host, $username, $password);

$request = new EWSType_FindItemType();
$request->Traversal = EWSType_ItemQueryTraversalType::SHALLOW;

$request->ItemShape = new EWSType_ItemResponseShapeType();
$request->ItemShape->BaseShape =
	EWSType_DefaultShapeNamesType::DEFAULT_PROPERTIES;

$request->CalendarView = new EWSType_CalendarViewType();
$request->CalendarView->StartDate = date('c', strtotime('01/01/2011 -00'));
$request->CalendarView->EndDate = date('c', strtotime('01/31/2011 -00'));

$request->ParentFolderIds = new EWSType_NonEmptyArrayOfBaseFolderIdsType();
$request->ParentFolderIds->DistinguishedFolderId =
	new EWSType_DistinguishedFolderIdType();
$request->ParentFolderIds->DistinguishedFolderId->Id =
	EWSType_DistinguishedFolderIdNameType::CALENDAR;
```