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

Ward Name  | Ward Code
------------- | -------------
Abbey |  AB
Abbey |  ABB
North Bathavon |  BATAN
South Bathavon |  BATAS
West Bathavon |  BATAW
Bathwick |  BA
Bloomfield |  BL
North Valley Chew |  CVNTH
South Valley Chew |  CVS
Clutton |  CLUTN
Down Combe |  CD
Farmborough |  FARMB
Littleton High |  HIGLN
East Keynsham |  KEYNE
North Keynsham |  KEYNN
South Keynsham |  KEYNS
Kingsmead |  KM
Lambridge |  LB
Lansdown/Lambridge |  LD_LB
Lansdown |  LD
Lyncombe |  LY
Mendip |  MENDP
North Norton Midsomer |  MIDNOR
Redfield Norton Midsomer |  MIDRED
Newbridge |  NB
Down Odd |  ODD
Oldfield |  OF
Paulton |  PAON
Peasedown |  PSJ
John St Peasedown |  PESJ
Whitchurch And Publow |  PUBWCH
Radstock |  RADST
Saltford |  SARD
Southdown |  SD
Record Test |  TEST
Timsbury |  TIRY
Twerton |  TW
UNKNOWN |  UNK
Walcot |  WA
Westfield |  WELD
Westmoreland |  WM
Weston |  WT
Widcombe |  WY

Parish Name  | Parish Code
------------- | -------------
Bathampton  | BATA
Batheaston  | BATE
Bathford  | BATF
Cameley  | CAEY
Camerton  | CAON
Charlcombe  | CHBE
Chelwood  | CHOD
Magna Chew  | CHMA
Stoke Chew  | CHST
Claverton  | CLON
Clutton  | CLTT
Hay Combe  | COHA
Dando Compton  | CODA
Martin Compton  | COMA
Corston  | COON
Council Parish Tunley & Dunkerton  | DUON
Harptree East  | EAHA
Englishcombe  | ENBE
Farmborough  | FAGH
Gurney Farrington  | FAGU
Freshford  | FRRD
Littleton High  | HILI
Blewett Hinton  | HIBL
Charterhouse Hinton  | HICH
Kelston  | KEON
Council Town Keynsham  | KEYN
Marksbury  | MARY
Norton Midsomer  | MSN
Combe Monkton  | MOCO
Thrubwell Nempnett  | NETH
Loe .St Newton  | NESL
Northstoke  | NOST
Malreward Norton  | NOMA
Radstock Norton  | NORA
Paulton  | PAON
John St Peasedown  | PESJ
Priston  | PRON
Publow  | PUOW
Radstock  | RADS
Saltford  | SARD
Shoscombe  | SHBE
Stoke South  | SOKE
Catherine .St  | STCA
Drew Stanton  | STDR
Sutton Stowey  | STSU
Swainswick  | SWCK
Timsbury  | TIRY
Ubley  | UBEY
Wellow  | WEOW
Harptree West  | WEHA
Westfield  | WESTF
Whitchurch  | WHCH