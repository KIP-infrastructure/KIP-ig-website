# Indgreb - hvad gøres hvis en nerve er set - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indgreb - hvad gøres hvis en nerve er set**

## ValueSet: Indgreb - hvad gøres hvis en nerve er set 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IndgrebNerveSet | *Version*:2.27.3 |
| Active as of 2022-07-20 | *Computable Name*:IndgrebNerveSet |

 
Indgreb - hvad gøres hvis en nerve er set 

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
  "id" : "IndgrebNerveSet",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IndgrebNerveSet",
  "version" : "2.27.3",
  "name" : "IndgrebNerveSet",
  "title" : "Indgreb - hvad gøres hvis en nerve er set",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Indgreb - hvad gøres hvis en nerve er set",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "spared",
        "display" : "Skånet"
      },
      {
        "code" : "parted",
        "display" : "Delt"
      },
      {
        "code" : "not_indicated",
        "display" : "Ikke set"
      }]
    }]
  }
}

```
