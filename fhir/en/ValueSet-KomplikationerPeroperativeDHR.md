# Komplikationer, peroperative (DHR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Komplikationer, peroperative (DHR)**

## ValueSet: Komplikationer, peroperative (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KomplikationerPeroperativeDHR | *Version*:2.27.1 |
| Active as of 2022-11-07 | *Computable Name*:KomplikationerPeroperativeDHR |

 
Komplikationer, peroperative (DHR) 

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
  "id" : "KomplikationerPeroperativeDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KomplikationerPeroperativeDHR",
  "version" : "2.27.1",
  "name" : "KomplikationerPeroperativeDHR",
  "title" : "Komplikationer, peroperative (DHR)",
  "status" : "active",
  "date" : "2022-11-07T00:00:00+02:00",
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
  "description" : "Komplikationer, peroperative (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen"
      },
      {
        "code" : "fracture",
        "display" : "Fraktur "
      },
      {
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
