# banes-planning

banes-planning is a simple class avaliable that you can use to quickly and easily pull planning information from the Bath and North East Somerset planning website.

### Usage

In the following example, getPlanningResults will try to find the latest 5 planning applications submitted for the Parish of West Harptree in the Ward of Chew Valley South.

```php
include('planning_lookup.php');

$planningLookup = new planning_lookup;
$planningApplications = $planningLookup->getPlanningResults("CVS", "WEHA");

foreach ($planningApplications as $planningApplication) {
    echo($planningApplication['title'] . " - " . $planningApplication['reference'] . "\n");
}
```

```$planningApplication['title']``` is the address in relation to the application, not the title.

In order to find the appropriate ```$ward``` and ```$parish``` arguments for your application, then you will need to visit *the B&NES Advanced Search page: [`here`](https://isharemaps.bathnes.gov.uk/data.aspx?requesttype=parsetemplate&template=DevelopmentControlSearchAdvanced.tmplt)* and select your ward and parish from the drop down. Hit search and then extract the identifiers for your ward and parish from the URL.
