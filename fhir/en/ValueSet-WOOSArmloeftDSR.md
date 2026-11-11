# WOOS - Armløft (DSR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **WOOS - Armløft (DSR)**

## ValueSet: WOOS - Armløft (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/WOOSArmloeftDSR | *Version*:2.27.2 |
| Active as of 2022-10-07 | *Computable Name*:WOOSArmloeftDSR |

 
WOOS - Armløft (DSR) 

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
  "id" : "WOOSArmloeftDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/WOOSArmloeftDSR",
  "version" : "2.27.2",
  "name" : "WOOSArmloeftDSR",
  "title" : "WOOS - Armløft (DSR)",
  "status" : "active",
  "date" : "2022-10-07T00:00:00+02:00",
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
  "description" : "WOOS - Armløft (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/WOOS",
      "concept" : [{
        "code" : "unable_to_life_arm",
        "display" : "Kan slet ikke løfte armen"
      }]
    }]
  }
}

```
