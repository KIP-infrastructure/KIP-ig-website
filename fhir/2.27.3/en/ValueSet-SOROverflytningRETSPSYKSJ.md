# SOR: Overflytning Sjælland (RETSPSYK) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: Overflytning Sjælland (RETSPSYK)**

## ValueSet: SOR: Overflytning Sjælland (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SOROverflytningRETSPSYKSJ | *Version*:2.27.3 |
| Active as of 2024-03-13 | *Computable Name*:SOROverflytningRETSPSYKSJ |

 
SOR: Overflytning Sjælland (RETSPSYK) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "SOROverflytningRETSPSYKSJ",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SOROverflytningRETSPSYKSJ",
  "version" : "2.27.3",
  "name" : "SOROverflytningRETSPSYKSJ",
  "title" : "SOR: Overflytning Sjælland (RETSPSYK)",
  "status" : "active",
  "date" : "2024-03-13T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "SOR: Overflytning Sjælland (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
      "concept" : [{
        "code" : "237021000016009",
        "display" : "Afdeling For Retspsykiatri - Ledelse"
      },
      {
        "code" : "237041000016004",
        "display" : "PSL Retspsykiatrisk Afd."
      },
      {
        "code" : "235611000016000",
        "display" : "Sjælland"
      },
      {
        "code" : "235631000016006",
        "display" : "Psykiatri ØST Overafd. 01"
      },
      {
        "code" : "235901000016009",
        "display" : "Psykiatri ØST Overafd. 05"
      },
      {
        "code" : "236121000016006",
        "display" : "Psykiatri VEST Overafd. 10"
      },
      {
        "code" : "236351000016001",
        "display" : "Psykiatri VEST Overafd. 15"
      },
      {
        "code" : "236831000016003",
        "display" : "Psykiatri SYD Overafd. 25"
      },
      {
        "code" : "697531000016008",
        "display" : "Psykiatri SYD Overafd. 27"
      },
      {
        "code" : "237031000016006",
        "display" : "PSL Retspsykiatri"
      },
      {
        "code" : "237131000016005",
        "display" : "PSL Sikringsafd."
      }]
    }]
  }
}

```
