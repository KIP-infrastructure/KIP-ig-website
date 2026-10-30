# WOOS - Hænder (DSR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **WOOS - Hænder (DSR)**

## ValueSet: WOOS - Hænder (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/WOOSHaenderDSR | *Version*:2.27.1 |
| Active as of 2022-10-07 | *Computable Name*:WOOSHaenderDSR |

 
WOOS - Hænder (DSR) 

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
  "id" : "WOOSHaenderDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/WOOSHaenderDSR",
  "version" : "2.27.1",
  "name" : "WOOSHaenderDSR",
  "title" : "WOOS - Hænder (DSR)",
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
  "description" : "WOOS - Hænder (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/WOOS",
      "concept" : [{
        "code" : "left_handed",
        "display" : "Venstrehåndet"
      },
      {
        "code" : "right_handed",
        "display" : "Højrehåndet"
      },
      {
        "code" : "both_hands",
        "display" : "Bruger begge hænder lige godt"
      }]
    }]
  }
}

```
