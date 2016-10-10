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

### Ward & Parish codes

Ward Code  | Ward Name
------------- | -------------
WY  | Widcombe
WT  | Weston
WM  | Westmoreland
WELD  | Westfield
WA  | Walcot
UNK  | UNKNOWN
TW  | Twerton
TIRY  | Timsbury
TEST  | Test Record
SD  | Southdown
SARD  | Saltford
RADST  | Radstock
PUBWCH  | Publow And Whitchurch
PESJ  | Peasedown St John
PSJ  | Peasedown
PAON  | Paulton
OF  | Oldfield
ODD  | Odd Down
NB  | Newbridge
MIDRED  | Midsomer Norton Redfield
MIDNOR  | Midsomer Norton North
MENDP  | Mendip
LY  | Lyncombe
LD  | Lansdown
LB_LD  | Lambridge/Lansdown
LB  | Lambridge
KM  | Kingsmead
KEYNS  | Keynsham South
KEYNN  | Keynsham North
KEYNE  | Keynsham East
HIGLN  | High Littleton
FARMB  | Farmborough
CD  | Combe Down
CLUTN  | Clutton
CVS  | Chew Valley South
CVNTH  | Chew Valley North
BL  | Bloomfield
BA  | Bathwick
BATAW  | Bathavon West
BATAS  | Bathavon South
BATAN  | Bathavon North
ABB  | Abbey
AB  | Abbey

Parish Code  | Parish Name
------------- | -------------
BATA |  Bathampton
BATE |  Batheaston
BATF |  Bathford
CAEY |  Cameley
CAON |  Camerton
CHBE |  Charlcombe
CHOD |  Chelwood
CHMA |  Chew Magna
CHST |  Chew Stoke
CLON |  Claverton
CLTT |  Clutton
COHA |  Combe Hay
CODA |  Compton Dando
COMA |  Compton Martin
COON |  Corston
DUON |  Dunkerton & Tunley Parish Council
EAHA |  East Harptree
ENBE |  Englishcombe
FAGH |  Farmborough
FAGU |  Farrington Gurney
FRRD |  Freshford
HILI |  High Littleton
HIBL |  Hinton Blewett
HICH |  Hinton Charterhouse
KEON |  Kelston
KEYN |  Keynsham Town Council
MARY |  Marksbury
MSN |  Midsomer Norton
MOCO |  Monkton Combe
NETH |  Nempnett Thrubwell
NESL |  Newton St. Loe
NOST |  Northstoke
NOMA |  Norton Malreward
NORA |  Norton Radstock
PAON |  Paulton
PESJ |  Peasedown St John
PRON |  Priston
PUOW |  Publow
RADS |  Radstock
SARD |  Saltford
SHBE |  Shoscombe
SOKE |  South Stoke
STCA |  St. Catherine
STDR |  Stanton Drew
STSU |  Stowey Sutton
SWCK |  Swainswick
TIRY |  Timsbury
UBEY |  Ubley
WEOW |  Wellow
WEHA |  West Harptree
WESTF |  Westfield
WHCH |  Whitchurch